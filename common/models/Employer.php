<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employer".
 *
 * @property integer $id
 * @property string $company_id
 * @property string $role
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $skype
 * @property string $phone
 * @property integer $status
 *
 * @property string $fc
 * @property string $vk
 * @property string $wechat
 *
 * @property string $roleName
 */
class Employer extends \yii\db\ActiveRecord
{
    const ROLE_CHIEF = 1;
    const ROLE_MANAGER = 2;

    public $fc;
    public $vk;
    public $wechat;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'role', 'status'], 'integer'],
            [['first_name', 'last_name', 'email', 'skype', 'phone'], 'string', 'max' => 255],
            [['fc', 'vk', 'wechat'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_id' => 'Company',
            'role' => 'Role',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'skype' => 'Skype',
            'phone' => 'Phone',
            'status' => 'Status',
        ];
    }

    public function getRoleName(){
        return $this->role == self::ROLE_CHIEF ? 'Глава компании' :
            $this->role == self::ROLE_MANAGER ? 'Менеджер' : '';
    }
}
