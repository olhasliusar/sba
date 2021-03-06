<?php

namespace backend\controllers;

use Yii;
use common\models\Article;
use common\models\search\ArticleSearch;
use yii\base\Exception;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;
use yii\filters\AccessControl;
use common\models\Attachment;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'vacation', 'create', 'view', 'update', 'delete', 'reestablish', 'image-upload', 'create-broadcast'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticleSearch();
        $searchModel->role = Article::ROLE_ARTICLE;
        $searchModel->status = User::STATUS_ACTIVE;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    /**
     * Lists all Article models.
     * @return mixed
     */
    public function actionVacation()
    {
        $searchModel = new ArticleSearch();
        $searchModel->role = Article::ROLE_JOB;
        $searchModel->status = User::STATUS_ACTIVE;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Article model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id)
        ]);
    }

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Article();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Attachment::upload($model);
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->changeImages();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
//        $this->findModel($id)->delete();
        $this->findModel($id)->setStatus(User::STATUS_DELETED);

        return $this->redirect(['index']);
    }
    
    public function actionReestablish($id)
    {
        $this->findModel($id)->setStatus(User::STATUS_ACTIVE);

        return $this->redirect(['index']);
    }

    public function actionImageUpload()
    {
        $uploadedFile = UploadedFile::getInstanceByName('upload');
        $mime = FileHelper::getMimeType($uploadedFile->tempName);
        $mime = $uploadedFile->type;
        $file = time()."_".$uploadedFile->name;

        if ($uploadedFile == null)
        {
            $message = "No file uploaded.";
        }
        else if ($uploadedFile->size == 0)
        {
            $message = "The file is of zero length.";
        }
        else if ($mime != "image/jpeg" && $mime != "image/png")
        {
            $message = "Изображение должно быть JPG или PNG формата.";
        }
        else if ($uploadedFile->size > 2*10*(1024*1024))
        {
            $message = "Изображение должно быть не больше 20MB";
        }
        else if ($uploadedFile->tempName == null)
        {
            $message = "You may be attempting to hack our server. We're on to you; expect a knock on the door sometime soon.";
        }
        else {
            $message = "";

            $url = Yii::$app->urlManager->getHostInfo() . '/static/web/article/images/description/'.$file;
            $uploadPath = Yii::getAlias('@static').'/web/article/images/description/'.$file;

            try{
                $move = $uploadedFile->saveAs($uploadPath);
                if(!$move)
                {
                    $message = "Error moving uploaded file. Check the script is granted Read/Write/Modify permissions.";
                }
            }catch (\Exception $e) {
                echo " {$e->getMessage()}";
            }
            
        }
        $funcNum = $_GET['CKEditorFuncNum'] ;
        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
    }

    public function actionCreateBroadcast($id)
    {
        if (Article::createBroadcast($id)) {
            Yii::$app->session->setFlash('success', \Yii::t('general', 'Добавлено в рассылку.'));
        } else {
            Yii::$app->session->setFlash('error',  \Yii::t('general', 'Ошибка. Не добавлено в рассылку.'));
        }
        
        return $this->render('view', [
            'model' => $this->findModel($id)
        ]);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
