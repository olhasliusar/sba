<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

use common\components\extended\ExtActiveRecord;
use common\components\upload\UploadFile;
use common\components\upload\File;

use Imagine\Image\ImageInterface;
use Imagine\Image\Box;
use Imagine\Gd\Imagine;

/**
 * This is the model class for table "attachment".
 *
 * @property integer $id
 * @property string $name
 * @property string $real_name
 * @property integer $obj_id
 * @property string $obj_type
 * @property string $type
 * @property string $path
 * @property string $ext
 * @property integer $show
 * @property string $thumbnail_path
 * @property string $baseName
 * @property string $zipName
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property string $base
 * @property string $url
 * @property string $defaultIconUrl
 *
 * @property string $miniature
 * @property string $urlThumbnailPath
 * @property string $filePath
 */
class Attachment extends ExtActiveRecord
{

    const SHOW_TRUE = 1;
    const SHOW_FALSE = 0;

    const ATTACHMENT_MODULE = 'static';

    const DEFAULT_ORGANIZATION = 'default/organization/logo.png';
    const DEFAULT_USER = 'default/user/logo.png';
    const DEFAULT_EVENT = 'default/event/logo.png';

    const PATH_IMAGE = '\images\\';
    const PATH_DOCUMENT = '\documents\\';
    const PATH_THUMBNAIL = '\images\thumbnail\\';
    const PATH_UNKNOWN = '\unknown\\';

    const TYPE_IMAGE = 'image';
    const TYPE_DOCUMENT = 'document';
    const TYPE_VIDEO = 'video';
    const TYPE_AUDIO = 'audio';
    const TYPE_ARCHIVE = 'archive';
    const TYPE_UNKNOWN = 'unknown';
    const TYPE_ALL = 'all';

    const OBJ_TYPE_USER = 'user';
    const OBJ_TYPE_ORGANIZATION = 'organization';
    const OBJ_TYPE_EVENT = 'event';
    const OBJ_TYPE_COMMENT = 'comment';


    const DEFAULT_NAME_LENGTH = 10;

    const DEFAULT_IMAGES_ARRAY = [

        self::OBJ_TYPE_ORGANIZATION => self::DEFAULT_ORGANIZATION,
        self::OBJ_TYPE_EVENT => self::DEFAULT_EVENT,
        self::OBJ_TYPE_USER => self::DEFAULT_USER,

        self::OBJ_TYPE_COMMENT => [
            self::TYPE_DOCUMENT => 'default/attachment/document-icon.png',
            self::TYPE_VIDEO => 'default/attachment/video-icon.jpeg',
            self::TYPE_AUDIO => 'default/attachment/audio-icon.png',
        ],
    ];

    const ALL_TYPES = [
        self::TYPE_DOCUMENT => [
            'pdf',
            'doc',
            'txt',
            'xlsx',
            'xls'
        ],
        self::TYPE_IMAGE => [
            'png',
            'jpg',
            'gif',
            'jpeg',
        ],
        self::TYPE_VIDEO => [
            'mkv',
            'avi',
            'wmv',
            'mp4',
        ],
        self::TYPE_AUDIO => [
            'mp3',
            'wma',
            'wav',
        ],
        self::TYPE_ARCHIVE => [
            'zip',
            'rar',
        ]
    ];

    public $attachments = [];
    public $zipName;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attachment';
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at'
                ]
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by'
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['obj_id', 'obj_type', 'type'], 'required'],
            [['obj_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'show'], 'integer'],
            [['obj_type', 'type', 'thumbnail_path'], 'string'],
            [['name', 'real_name', 'path'], 'string', 'max' => 255],
            [['ext'], 'string', 'max' => 10],
            [['zipName'], 'string'],

            [['attachments'], 'file', 'maxFiles' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'old_name' => 'Old Name',
            'obj_id' => 'Obj ID',
            'obj_type' => 'Obj Type',
            'type' => 'Type',
            'path' => 'Path',
            'ext' => 'Ext',
            'show' => 'Show',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    public static function uploadBase64($attributes, ActiveRecord $obj, $show = false)
    {
        $type = self::getConst($obj);

        $file = new File();
        $file->isBase64 = true;
        $imgSTR = Yii::$app->request->post($attributes);

        if ($imgSTR && self::checkFolder($type)) {

            $part = explode(',', $imgSTR);
            $file->fileBase64 = base64_decode($part[1]);

            if (file_put_contents($file->fullPath, $file->fileBase64)) {

                if ($model = Attachment::find()->where(['obj_id' => $obj->id, 'obj_type' => $type])->one()) {
                    $model->delete();
                }

                return self::saveNew([
                    'path' => $file->urlPath,
                    'name' => 'fdf',
                    'ext' => $file->extension,
                    'obj_id' => $obj->id,
                    'obj_type' => $type,
                    'type' => $file->typeByExtension,
                    'real_name' => $file->realName,
                    'thumbnailPath' => $file->thumbnailPath,
                    'show' => (int)  $show
                ], $file->fullPath, $file->isBase64);
            }
        }

        return false;
    }

    public static function upload(ActiveRecord $obj, $show = false)
    {
        /** @var File $attachment */
        $attachments = UploadFile::loadFiles();
        $type = self::getConst($obj);
        $ids = [];

        if ($attachments && self::checkFolder($type)) {
            foreach ($attachments as $attachment) {

                $path = $attachment->getFullPath();

                if ($attachment->saveAs($path)) {
                    $ids[] = self::saveNew([
                        'path' => $attachment->urlPath,
                        'name' => $attachment->baseName,
                        'ext' => $attachment->extension,
                        'obj_id' => $obj->id,
                        'obj_type' => $type,
                        'type' => $attachment->typeByExtension,
                        'real_name' => $attachment->realName,
                        'thumbnailPath' => $attachment->urlPath,
                        'show' => (int) $show
                    ], $path);
                }
            }
            return $ids;
        }
        return [];
    }


    /**
     * @param array $attributes
     * @param string $path
     * @param bool $isBase
     * @return bool
     *
     * @throws \Imagine\Exception\InvalidArgumentException
     * @throws \Imagine\Exception\RuntimeException
     */
    private static function saveNew(array $attributes, $path, $isBase = false)
    {
        $attachment = new self();
        $attachment->load(['Attachment' => $attributes]);

//        if (!$isBase && $attachment->type === self::TYPE_IMAGE) {
//            self::thumbnail($path, $attachment->thumbnail_path);
//        }
        return $attachment->save() ? $attachment->id : false;
    }

    /**
     * @param string $path
     * @param string $thumbnailPath
     *
     * @throws \Imagine\Exception\InvalidArgumentException
     * @throws \Imagine\Exception\RuntimeException
     */
    private static function thumbnail($path, $thumbnailPath)
    {
        $imagine = new Imagine();
        $imagine->open($path)->thumbnail(new Box(100, 100), ImageInterface::THUMBNAIL_INSET)->save($thumbnailPath);
    }


    #  check Path

    private static function checkFolder($type)
    {
        return UploadFile::checkPaths(Yii::getAlias('@' . self::ATTACHMENT_MODULE . '/web/' . $type), [
            'image' => '/images/',
            'thumbnail' => '/images/thumbnail/',
            'document' => '/documents/',
            'unknown' => '/unknown/',
            'video' => '/video/',
            'audio' => '/audio/',
            'archive' => '/archive/'
        ]);
    }

    # getters

    /**
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public static function getBase()
    {
        return Yii::$app->urlManager->getHostInfo() . '/' . self::ATTACHMENT_MODULE . '/web/';
    }

    /**
     * @param bool $thumbnailPath
     * @return string
     *
     * @throws \yii\base\InvalidParamException
     */
    public function getFilePath($thumbnailPath = false)
    {
        $path = $thumbnailPath ? $this->thumbnail_path : $this->path;
        return Yii::getAlias('@' . Attachment::ATTACHMENT_MODULE) . '/web/' . $this->obj_type . $path;
    }

    /**
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function getUrl()
    {
        return self::getBase() . $this->obj_type . $this->path;
    }

    /**
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function getUrlThumbnail()
    {
        return self::getBase() . $this->obj_type . $this->thumbnail_path;
    }

    /**
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function getMiniature()
    {
        return $this->thumbnail_path ? $this->getUrlThumbnail() : self::getDefaultIconUrl($this->obj_type, $this->type);
    }

    /**
     * @param int $length
     * @return string
     */
    public function getBaseName($length = 0)
    {
        $name = $this->name . '.' . $this->ext;

        if ($length && mb_strlen($name) >= $length) {
            return mb_substr(strip_tags($this->name), 0, $length, 'UTF-8') . '...';
        }

        return $name;
    }


    # remove

    public function removeFile()
    {
        if (is_file($this->filePath) && unlink($this->filePath)) {
            if ($this->thumbnail_path && is_file($this->getFilePath(true))) {
                unlink($this->getFilePath(true));
            }
            return true;
        }
        return false;
    }



    # Download

    /**
     * @param array $models
     * @param null $name
     * @param null $type
     * @return bool
     */
    public static function downloadAll(array $models, $name = null, $type = null)
    {
        $zip = new \ZipArchive();
        $date = date('d-m-Y', time());
        $zip_name = $name ? $name . '_' . $type . '_' . $date . '.zip' : $type . '_' . $date . '.zip';

        if ($zip->open($zip_name, \ZIPARCHIVE::CREATE)) {

            foreach ($models as $file) {
                $path = str_replace('/', '\\', $file->filePath);
                if ($file instanceof Attachment && file_exists($path)) {
                    $zip->addFile($path, basename($file->baseName));
                }
            }

            $zip->close();

            if (file_exists($zip_name)) {
                header('Content-type: application/zip');
                header('Content-Disposition: attachment; filename="' . $zip_name . '"');
                readfile($zip_name);

                unlink($zip_name);
            }
        }
    }

    /**
     * @return bool
     */
    public function download()
    {
        if (file_exists($this->filePath)) {
            header('Content-Description: Reports');
            header('Last-Modified: ' . gmdate('D,d M YH:i:s') . 'GMT');
            header('Content-Disposition: attachment; filename=' . basename($this->baseName));
            header('Expires: 0');
            header('Cache-Control: no-cache, must-revalidate');
            header('Pragma: no-cache');
            header('Content-Length: ' . filesize($this->filePath));
            header('Content-Length: ' . filesize($this->filePath));

            readfile($this->filePath);
        }
        return false;
    }


    /**
     * @param ActiveRecord $obj
     * @param string $const
     * @return static[]
     */
    public static function getAttachmentsByType(ActiveRecord $obj, $const)
    {
        $type = $const === self::TYPE_ALL ? array_keys(self::ALL_TYPES) : $const;
        return static::findAll(['obj_type' => self::getConst($obj), 'obj_id' => $obj->id, 'type' => $type]);
    }

    /**
     * @param ActiveRecord $obj
     * @param string $type
     * @return static|null
     */
    public static function getAttachment(ActiveRecord $obj, $type)
    {
        return static::find()->where(['obj_type' => self::getConst($obj), 'obj_id' => $obj->id, 'type' => $type])->one();
    }

    /**
     * @param ActiveRecord $obj
     * @return string
     */
    public static function getConst($obj)
    {
        $array = explode('\\', get_class($obj));
        return strtolower(end($array));
    }

    public static function getDefaultIconUrl($obj_type, $type = null)
    {
        if (is_array(self::DEFAULT_IMAGES_ARRAY[$obj_type])) {
            $path = self::DEFAULT_IMAGES_ARRAY[$obj_type][$type];
        } else {
            $path = self::DEFAULT_IMAGES_ARRAY[$obj_type];
        }

        return self::getBase() . $path;
    }

    /**
     * @param ActiveRecord $obj
     * @param $const
     * @return string
     */
    public static function logoAttachment(ActiveRecord $obj, $const)
    {
        /**  @var Attachment $model */
        $objType = self::getConst($obj);
        $model = Attachment::find()
            ->where(['obj_type' => $objType, 'obj_id' => $obj->id, 'type' => $const])
            ->one();

        return $model ? $model->url : self::getDefaultIconUrl($objType, $const);
    }
}
