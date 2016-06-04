<?php
namespace api\modules\v1\controllers;

use common\models\LoginForm;
use common\models\User;

use Yii;
use yii\behaviors;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\rest\Controller;

/**
 * Class SiteController
 * @package api\modules\v1\controllers
 */
class SiteController extends Controller
{

    /**
     * @return array
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'only' => ['login', 'auth'],
            'rules' => [
                [
                    'actions' => ['login', 'auth'],
                    'allow' => true,
                    'roles' => ['?'],
                ],
            ],
        ];

        $behaviors['verbFilter'] = [
            'class' => VerbFilter::className(),
            'actions' => [
                'login' => ['POST'],
                'auth' => ['GET'],
            ],
        ];

        return $behaviors;
    }

    /**
     * @return array
     */
    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return ['login' => true, 'user' => User::auth(Yii::$app->user->identity)];
        }
        return ['login' => false];
    }

    public function actionAuth()
    {
        /**
         * @var User $user
         */
        $user = User::findIdentityByAccessToken(Yii::$app->request->get('auth'));

        return $user ? ['auth' => true, 'user' => User::auth($user)] : ['auth' => false];
    }
}
