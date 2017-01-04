<?php

namespace backend\controllers;

use common\models\Attachment;
use Yii;
use common\models\Artist;
use common\models\Manager;
use common\models\search\ArtistSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ArtistController implements the CRUD actions for Artist model.
 */
class ArtistController extends Controller
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
                        'actions' => ['index', 'create', 'view', 'update', 'delete', 'reestablish', 'export'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Artist models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArtistSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Artist model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Artist model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Artist();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Artist model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Artist model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Artist model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Artist the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Artist::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionExport()
    {
        $models = ArrayHelper::toArray(Artist::find()->all(), ['common\models\Artist' => [
            'id',
            'first_name',
            'last_name',
            'email',
            'phone',
            'manager' => function ($model) {
                return $model->manager_id ? $model->manager->name_ru : null;
            },
            'field_genres' => function ($model) {
                return $model->genresString;
            },
        ]]);

        $path = Artist::export($models, [
            [
                'id' => 'ID',
                'first_name' => 'First name',
                'last_name' => 'Last name',
                'email' => 'Email',
                'phone' => 'Phone',
                'manager' => 'Manager',
                'field_genres' => 'Genres'
            ]
        ]);

        Attachment::downloadByPath($path);

        $searchModel = new ArtistSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

//    public function actionImport()
//    {
//        $files = Attachment::upload('file');
//        $attachment = array_shift($files);
//
//        if ($attachment) {
//            $result = Artist::import($attachment->getFilePath(), [
//                'id',
//                'first_name',
//                'last_name',
//                'email',
//                'phone',
//                'field_genres'
//            ]);
//
//            return $result ? $result['count'] : ['error' => 'Can not be imported.'];
//        }
//        return ['error' => 'Sheet or file is found.'];
//    }

}
