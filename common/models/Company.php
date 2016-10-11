<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use common\models\Attachment;

/**
 * This is the model class for table "company".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $description
 * @property string $worker1
 * @property string $worker2
 * @property string $worker3
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property Attachment[] $licenses
 * @property Attachment $attachment
 * 
 * @property string $urlZip
 */
class Company extends \yii\db\ActiveRecord
{
    public $licenses;
    
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name', 'address', 'worker1', 'worker2', 'worker3'], 'string', 'max' => 255],
            [['licenses'], 'safe'],
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
            'address' => 'Address',
            'description' => 'Description',
            'worker1' => 'Worker1',
            'worker2' => 'Worker2',
            'worker3' => 'Worker3',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
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

    public function getAttachment(){
        return Attachment::getAttachments($this);
    }


    /**
     * @property Employer $employer
     * @param null $employer
     * @return string
     */
    public function generateAttachContent($employer = null){//TODO doc link
        return <<<EOT
-- Информация о работодателе или агенте --\r\n
Имя - $employer->first_name\r\n
Фамилия - $employer->last_name\r\n
Должность - $employer->roleName\r\n
Телефон - $employer->phone\r\n
Email - $employer->email\r\n
Skype - $employer->skype\r\n
Facebook - $employer->fc\r\n
VK - $employer->vk\r\n
WeChat/WhatsApp/Viber - $employer->wechat\r\n
\r\n-- Информация о компании --\r\n
Название компании - $this->name\r\n
Адрес - $this->address\r\n
Контакты артистов, которые уже работали:\r\n
$this->worker1\r\n
$this->worker2\r\n
$this->worker3\r\n
\r\n-- Ссылка на скачивание файлов --\r\n
$this->urlZip\r\n
EOT;
    }

    public function sendMail($employer = null)
    {
//        http://sba.world/ru/company/download-attachment?id=10
        return \Yii::$app->mailer->compose(['html' => 'createCompany-html', 'text' => 'createCompany-text'],
            ['model' => $this, 'link' => Yii::$app->request->hostInfo])
            ->setFrom(\Yii::$app->params['supportEmail'])
            ->setTo('olha.sliusar0315@gmail.com')
            ->setSubject('Зарегистрирована новая компания. ' . \Yii::$app->name)
            ->attachContent( $this->generateAttachContent($employer), ['fileName' => 'company_'.$this->id.'.txt', 'contentType' => 'text/plain'])
//            ->attach('/home/worldsb/public_html/composer.json')
            ->send();
    }
    
    public function getUrlZip(){
        return Yii::$app->request->hostInfo . Yii::$app->request->baseUrl . '/ru/company/download-attachment?id=' . $this->id;
    }
}
