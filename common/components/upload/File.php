<?php
/**
 * Created by PhpStorm.
 * User: vlad_
 * Date: 10.04.2016
 * Time: 7:10
 */

namespace common\components\upload;

use common\models\Attachment;
use yii\base\Object;


/**
 * This is the model class for class Attachment.
 *
 * @property integer name
 * @property string tempName
 * @property string type
 * @property integer size
 * @property string error
 *
 *
 * @property string baseName
 * @property string fullPath
 * @property string realName
 * @property string extension
 *
 * @property string thumbnailPathDefault
 *
 * @property string typeByExtension
 * @property string thumbnailUrl
 * @property string thumbnailPath
 * @property string urlPath
 */
class File extends Object
{
    const ALIAS_THUMBNAIL = 'thumbnail';

    public $name;
    public $tempName;
    public $realName;
    public $type;
    public $size;
    public $error;



    /**
     * @return string original file base name
     */
    public function getBaseName()
    {
        return pathinfo($this->name, PATHINFO_FILENAME);
    }

    /**
     * @return string file extension
     */
    public function getExtension()
    {
        return strtolower(pathinfo($this->name, PATHINFO_EXTENSION));
    }

    /**
     * Get full path to file D:\OpenServer\...
     *
     * @param string|null $name
     * @return string
     */
    public function getFullPath($name = null)
    {
        $this->realName = $name ?: uniqid(10, false);

        return $this->aliasByType($this->typeByExtension) . $this->realName . '.' . $this->getExtension();
    }

    /**
     * Get Url Path http://project/statics/web/images/...
     *
     * @return string
     */
    public function getUrlPath()
    {
        return $this->aliasByType($this->typeByExtension, true) . $this->realName . '.' . $this->getExtension();
    }


    /**
     * Get full path to file D:\OpenServer\... for thumbnail alias
     *
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->aliasByType(self::ALIAS_THUMBNAIL, true) . $this->realName . '_thumbnail.' . $this->getExtension();
    }

    /**
     * Get Url Path http://project/statics/web/images/thumbnail/... for thumbnail alias
     *
     * @return string
     */
    public function getThumbnailPath()
    {
        return $this->aliasByType(self::ALIAS_THUMBNAIL, false) . $this->realName . '_thumbnail.' . $this->getExtension();
    }


    /**
     * @param string $alias
     * @param bool $url
     * @return mixed
     */
    private function aliasByType($alias, $url = false)
    {
        return UploadFile::$aliases[$alias][$url ? 'folder' : 'fullPath'];
    }

    /**
     * Save file
     *
     * @param $file
     * @param bool $deleteTempFile
     * @return bool
     */
    public function saveAs($file, $deleteTempFile = true)
    {
        if ((int)$this->error === UPLOAD_ERR_OK) {
            if ($deleteTempFile) {
                return move_uploaded_file($this->tempName, $file);
            } elseif (is_uploaded_file($this->tempName)) {
                return copy($this->tempName, $file);
            }
        }
        return false;
    }

    /**
     * Get Type By Extension from counts ALL_TYPES
     *
     * @return bool|int|string
     *
     * TODO: fix!
     */
    public function getTypeByExtension()
    {
        foreach (Attachment::ALL_TYPES as $key => $item) {
            if (in_array($this->extension, $item, false)) {
                return $key;
            }
        }
        return Attachment::TYPE_UNKNOWN;
    }
}