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
 * 
 * @property Genre[] $genres
 * @property string $genresString
 */
class Company extends \yii\db\ActiveRecord
{
    const EMAIL_EOL = "\r\n";

    public $licenses;

    public $country_city;
    public $genres;
    public $skills;
    public $schedule;
    public $salary;
    public $terms;
    public $residence;
    public $food;
    public $days;
    public $tickets;
    public $visas;
    public $leaving;
    public $photo;
    public $consummation;

    public $amount;
    public $sex_age;
    public $height_weight;
    public $education;
    public $hair;
    public $marital_status;
    public $experience;
    public $language;
    public $qualities;
    public $costume;
    public $citizenship;
    public $other;
    
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
            [['country_city', 'genres', 'skills', 'schedule', 'salary', 'terms',
                'residence', 'food', 'days', 'tickets', 'visas', 'leaving', 'photo', 'consummation',
                'amount', 'sex_age', 'height_weight', 'education', 'hair', 'marital_status', 'experience',
                'language', 'qualities', 'costume', 'citizenship', 'other',
            ], 'safe'],
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
    
    public function getGenresString()
    {
        $genres = $this->genres;
        $result = '';
        foreach ($genres as $genre){
            $nameGenre = Genre::find()->where(['id' => $genre])->one();
            $result .= "$nameGenre->name";
            $result .= ', ';
        }
        return $result;
    }

    public function getAttachment(){
        return Attachment::getAttachments($this);
    }

    /**
     * @property Employer $employer
     * @param null $employer
     * @return string
     */
    public function generateAttachContent($employer = null){
        return <<<EOT
-- Информация о работодателе или агенте --\r\n
Имя - $employer->first_name\r\n
Фамилия - $employer->last_name\r\n
Email - $employer->email\r\n
Адрес - $this->address\r\n
Телефон - $employer->phone\r\n
Facebook/VK - $employer->fc\r\n
Ссылка на сайт - $employer->vk\r\n
WeChat/Viber/WhatsApp/Telegram - $employer->wechat\r\n
Контакты артистов, которые уже работали:\r\n
$this->worker1\r\n
$this->worker2\r\n
$this->worker3\r\n
\r\n-- Ссылка на скачивание файлов --\r\n
$this->urlZip\r\n
EOT;
    }

    /**
     * @return string
     */
    public function generateVacationContent(){
        return "
\r\n-- Information about vocation --\r\n
Country/city - $this->country_city\r\n
Performer's genres - $this->genresString\r\n
Performer's skills - $this->skills\r\n
Schedule - $this->schedule\r\n
Amount and form of currency of performers (salary) - $this->salary\r\n
Residence - $this->residence\r\n
Food - $this->food\r\n
Days off - $this->days\r\n
Plane tickets - $this->tickets\r\n
Visas - $this->visas\r\n
Prospective days of leaving - $this->leaving\r\n
Photo where live and work - $this->urlZip\r\n
Schedule of work - $this->consummation\r\n
\r\n-- The requirements for candidate(s) --\r\n
Number of artists - $this->amount\r\n
Sex, age - $this->sex_age\r\n
Education - $this->education\r\n
Country of residence, citizenship - $this->citizenship\r\n
Color and length of hair - $this->food\r\n
Experience - $this->experience\r\n
Foreign language skills - $this->language\r\n
Costume is required - $this->costume\r\n
Other requirements - $this->other\r\n
";
    }

    public function sendMail($employer = null)
    {
        $fileName = Attachment::getConst($this).'_'.$this->id.'.txt';
        $vacationName = 'vacation_'.$this->name.'.txt';

        $message = \Yii::$app->mailer->compose(['html' => 'createCompany-html', 'text' => 'createCompany-text'],
            ['model' => $this, 'link' => Yii::$app->request->hostInfo])
            ->setFrom(\Yii::$app->params['supportEmail'])
            ->setTo(\Yii::$app->params['supportEmail']);
        
        if ($employer->first_name) {
            $message->setSubject('Новая компания. ' . \Yii::$app->name)
                ->attachContent( $this->generateAttachContent($employer), 
                    ['fileName' => $fileName, 'contentType' => 'text/plain']);            
        } else {
            $message->setSubject('Новая вакансия. ' . \Yii::$app->name);
        }
        
        return $message->attachContent( $this->generateVacationContent(), 
            ['fileName' => $vacationName, 'contentType' => 'text/plain'])
            ->send();
    }
    
    public function getUrlZip(){
        return Yii::$app->request->hostInfo . Yii::$app->request->baseUrl . '/ru/company/download-attachment?id=' . $this->id;
    }
}
