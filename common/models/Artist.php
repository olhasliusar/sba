<?php

namespace common\models;

use common\components\ActiveRecord\ExtendedActiveRecord;
use common\components\traits\exportExcel;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\behaviors\BlameableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "artist".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property ArtistGenre[] $artistGenres
 * @property Genre[] $genres
 * @property string $genresString
 * @property Attachment[] $images
 *
 * @property integer $manager
 *
 * @property integer $birth
 * @property string $height_weight
 * @property string $bust_waist_hips
 * @property string $country_city
 * @property string $citizenship
 * @property string $fc
 * @property string $vk
 * @property string $countries
 * @property string $salary
 * @property string $duration
 * @property string $contract_start_date
 *
 * @property string $international_passport
 * @property string $date_passport
 * @property string $visa
 *
 * @property array $exp_country_city
 * @property array $exp_place
 * @property array $exp_period
 * @property array $exp_contact
 *
 * @property string $university
 * @property string $specialty
 * @property string $languages
 * @property string $achievements
 *
 * @property string $video1
 * @property string $video2
 * @property Attachment[] $document
 * @property Attachment[] $passport
 *
 * @property Attachment $attachment
 * @property string $urlZip
 * @property string $experience
 */
class Artist extends ExtendedActiveRecord
{
    use exportExcel;

    const EMAIL_EOL = "\r\n";
    public $manager;

    public $bust_waist_hips;
    public $citizenship;
    public $vk;
    public $genres;
    public $countries;
    public $salary;
    public $duration;
    public $contract_start_date;

    public $international_passport;
    public $date_passport;
    public $visa;

    public $exp_country_city;
    public $exp_place;
    public $exp_period;
    public $exp_contact;

    public $university;
    public $specialty;
    public $languages;
    public $achievements;

//    public $video1;
//    public $video2;

    public $document;
    public $passport;
    public $images;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['first_name', 'last_name', 'email', 'phone'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['birth', 'height_weight', 'bust_waist_hips', 'country_city', 'citizenship', 'fc', 'vk',
                'manager',
                'genres',
                'images',
                'countries', 'salary', 'duration', 'contract_start_date',
                'international_passport', 'date_passport', 'visa',
                'exp_country_city', 'exp_place', 'exp_period', 'exp_contact',
                'university', 'specialty', 'languages', 'achievements',
                'video1', 'video2', 'document', 'passport',
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
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'email' => 'Email',
            'phone' => 'Телефон',
            'status' => 'Статус',
            'created_at' => 'Создано в',
            'updated_at' => 'Обновлено в',
            'created_by' => 'Создано',
            'updated_by' => 'Изменено',
            'genres' => 'Жанры',
        ];
    }

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

    public function afterSave($insert, $changedAttributes)
    {
        $genres = $this->genres;
        if (!empty($genres)) {
            foreach ($genres as $item) {
                $genre = new ArtistGenre();
                $genre->artist_id = $this->id;
                $genre->genre_id = $item;
                $genre->save();
            }
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtistGenres()
    {
        return $this->hasMany(ArtistGenre::className(), ['artist_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenres()
    {
        return $this->hasMany(Genre::className(), ['id' => 'genre_id'])->viaTable('artist_genre', ['artist_id' => 'id']);
    }

    public function getGenresString()
    {
        $genres = $this->getGenres()->all() ?: [];

        $nameGenre = [];
        foreach ($genres as $genre) {
            $nameGenre[] = $genre->name;
        }
        return implode(', ', $nameGenre);
    }

    public function getGenresList()
    {
        $genres = $this->genres;
        if (!isset($genres)) {
            return null;
        }
        $list = [];
        foreach ($genres as $genre) {
            $list[] = \Yii::t('genre_t', $genre->name);
        }
        return $list;
    }

    public function getAttachment()
    {
        return Attachment::getAttachments($this);
    }

    public function getExperience()
    {
        $string = '';
        $exp_country_city = $this->exp_country_city;
        foreach ($exp_country_city as $key => $value) {
            $string .= 'Страна/город - ' . $this->exp_country_city[$key] . "\r\n";
            $string .= 'Название заведения - ' . $this->exp_place[$key] . "\r\n";
            $string .= 'Период работы - ' . $this->exp_period[$key] . "\r\n" . "\r\n";
            $string .= 'Контакты работодателя - ' . $this->exp_contact[$key] . "\r\n" . "\r\n";
        }
        return $string;
    }

    public function generateAttachContent()
    {
        return <<<EOT
Имя - $this->first_name\r\n
Фамилия - $this->last_name\r\n
Email - $this->email\r\n
Номер телефона - $this->phone\r\n
Дата рождения - $this->birth\r\n
Рост/вес - $this->height_weight\r\n
Страна/город проживания - $this->country_city\r\n
Ссылка на Facebook - $this->fc\r\n
Жанр - $this->genresString\r\n
\r\n-- Пожелания --\r\n
Страны - $this->countries\r\n
Гонорар - $this->salary\r\n
Продолжительность - $this->duration\r\n
Дата начала контракта - $this->contract_start_date\r\n
\r\n-- Документы --\r\n
Наличие загранпаспорта - $this->international_passport\r\n
Срок действия загранпаспорта - $this->date_passport\r\n
Наличие открытых виз - $this->visa\r\n
\r\n-- Опыт работы --\r\n
$this->experience\r\n
\r\n-- Образование --\r\n
ВУЗ - $this->university\r\n
Специальность - $this->specialty\r\n
Языки - $this->languages\r\n
Видео - $this->video1\r\n
Видео - $this->video2\r\n
\r\n-- Ссылка на скачивание файлов --\r\n
$this->urlZip\r\n
EOT;
    }

    public function sendMail()
    {
        return \Yii::$app->mailer->compose(['html' => 'createArtist-html', 'text' => 'createArtist-text'], ['model' => $this])
            ->setFrom(\Yii::$app->params['supportEmail'])
            ->setTo(\Yii::$app->params['supportEmail'])
            ->setSubject('Зарегистрирован новый артист. ' . \Yii::$app->name)
            ->attachContent($this->generateAttachContent(), ['fileName' => 'artist_' . $this->id . '.txt', 'contentType' => 'text/plain'])
//            ->attach('/home/worldsb/public_html/composer.json')
            ->send();
    }

    public function getUrlZip()
    {
        return Yii::$app->request->hostInfo . Yii::$app->request->baseUrl . '/ru/artist/download-attachment?id=' . $this->id;
    }
}
