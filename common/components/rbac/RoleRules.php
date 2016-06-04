<?php
namespace common\components\rbac;

use common\models\User;
use Yii;
use yii\rbac\Rule;

class RoleRules extends Rule
{
    public $name = 'role';

    public function execute($user, $item, $params)
    {
        /**
         * User $user
         */

        if (!Yii::$app->user->isGuest) {
            $group = Yii::$app->user->identity->role;
            switch ($item->name) {
                case 'one':
                    return $group === User::ROLE_ONE;
                    break;
                case 'two':
                    return $group === User::ROLE_TWO;
                    break;
            }
        }
        return false;
    }
}