<?php
namespace api\modules\v1\controllers;

use common\models\LoginForm;
use common\models\User;

use Yii;
use yii\behaviors;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\rest\Controller;
use yii\filters\auth\QueryParamAuth;

/**
 * Class SiteController
 * @package api\modules\v1\controllers
 */
class SiteController extends Controller
{

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['authenticator'] = [
            'class' => QueryParamAuth::className(),
            //'class' => HttpBasicAuth::className();
            //'class' => CompositeAuth::className();
            'only' => [
                'auth'
            ],
        ];

        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'only' => [
                'login',
                'auth'
            ],
            'rules' => [
                [
                    'actions' => [
                        'login',
                    ],
                    'allow' => true,
                    'roles' => ['?'],
                ],
                [
                    'actions' => [
                        'auth',
                    ],
                    'allow' => true,
                    'roles' => ['@'],
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

    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return User::auth(Yii::$app->user->identity);
        }
        return ['error' => $model->errors()];
    }

    public function actionAuth()
    {
        return User::auth(Yii::$app->user->identity);
    }
}
