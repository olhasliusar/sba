<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\components\rbac\RoleRules;
use yii\helpers\Console;

class RbacController extends Controller
{
    public function actionInit()
    {
        $authManager = Yii::$app->authManager;
        $authManager->removeAll();

        $RoleRules = new RoleRules();

        $admin = $authManager->createRole('');

        $login = $authManager->createPermission('login');
        $logout = $authManager->createPermission('logout');
        $error = $authManager->createPermission('error');
        $signUp = $authManager->createPermission('sign-up');
        $index = $authManager->createPermission('index');
        $view = $authManager->createPermission('view');
        $update = $authManager->createPermission('update');
        $delete = $authManager->createPermission('delete');

        $authManager->add($login);
        $authManager->add($logout);
        $authManager->add($error);
        $authManager->add($signUp);
        $authManager->add($index);
        $authManager->add($view);
        $authManager->add($update);
        $authManager->add($delete);

        $authManager->add($RoleRules);

        $admin->ruleName = $RoleRules->name;

        $authManager->add($admin);

        $authManager->addChild($admin, $login);
        $authManager->addChild($admin, $logout);
        $authManager->addChild($admin, $error);
        $authManager->addChild($admin, $signUp);
        $authManager->addChild($admin, $index);
        $authManager->addChild($admin, $view);

//        $authManager->addChild($admin, $elseRole);

        $this->stdout($this->ansiFormat("\n Role up successfully.\n", Console::FG_GREY), Console::BOLD);
    }
}