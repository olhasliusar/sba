<?php
namespace frontend\controllers;

use common\models\Article;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\User;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => 'Мы первое международное букинговое агентство, занимающееся официальным трудоустройством артистов всех жанров, а также подбором персонала для hotel индустрии.'
        ]);

        \Yii::$app->view->registerMetaTag([
            'name' => 'name="keywords" ',
            'content' => 'букинговое агентство, работа за границей, легальная работа за границей, для артистов, для персонала, агенство SBA'
        ]);

        return $this->render('index');
    }


    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                return $this->redirect(['/site/thanks']);
//                Yii::$app->session->setFlash('success', \Yii::t('general', 'Thank you for contacting us. We will respond to you as soon as possible.'));
            } else {
                Yii::$app->session->setFlash('error',  \Yii::t('general', 'There was an error sending email.'));
                return $this->refresh();
            }
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionLookingForAJob()
    {
        return $this->render('looking-for-a-job');
    }

    public function actionLookingForArtists()
    {
        \Yii::$app->view->registerMetaTag([
            'name' => 'name="description" ',
            'content' => 'Актуальные вакансии для артистов за границу. Работа по контракту за границей. Заполнить анкету!'
        ]);

        \Yii::$app->view->registerMetaTag([
            'name' => 'name="keywords" ',
            'content' => 'ищу работу за границей ищу работу, вакансии за границей, за рубежом'
        ]);

        return $this->render('looking-for-artists');
    }
    
    public function actionTestimonials()
    {
        \Yii::$app->view->registerMetaTag([
            'name' => 'name="description" ',
            'content' => 'Видеоотзывы артистов о компании SBA. Наши артисты за границей. Смотреть отзывы!'
        ]);

        \Yii::$app->view->registerMetaTag([
            'name' => 'name="keywords" ',
            'content' => 'видеоотзывы, отзывы артистов'
        ]);

        return $this->render('testimonials');
    }

    public function actionArticles()
    {
        return $this->render('articles', [
            'articles' => Article::getArticlesByCurrentLang(User::STATUS_ACTIVE, Article::ROLE_ARTICLE),
        ]);
    }

    public function actionArticle($id)
    {
        return $this->render('article', [
            'article' => Article::findById($id),
            'articles' => Article::getArticlesByCurrentLang(
                User::STATUS_ACTIVE, Article::ROLE_ARTICLE, Article::ARTICLES_SIDEBAR)
        ]);
    }
    
    public function actionVacancies()
    {
        return $this->render('vacancies', [
            'articles' => Article::getArticlesByCurrentLang(User::STATUS_ACTIVE, Article::ROLE_JOB)
        ]);
    }
    
    public function actionVacancy($id)
    {
        return $this->render('vacancy', [
            'article' => Article::findById($id),
        ]);
    }

    public function actionThanks()
    {
        return $this->render('thanks');
    }
    
    public function actionAddress()
    {
        return $this->render('address');
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContactHead()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->subject = 'SBA | Руководитель коллектива';
            $model->sendEmail(Yii::$app->params['adminEmail']);
            return $this->redirect(['/site/thanks']);
        }

        return $this->render('contact-head', [
            'model' => $model,
        ]);
    }
}
