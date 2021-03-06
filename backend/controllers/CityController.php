<?php

namespace backend\controllers;

use Yii;
use backend\models\City;
use backend\models\CitySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
/**
 * CityController implements the CRUD actions for City model.
 */
class CityController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['login', 'error'],
//                        'allow' => true,
//                    ],
//                    [
////                        'actions' => ['index', 'index'],
////                        'allow' => true,
////                        'roles' => ['@'],
//                    ],
//                ],
//            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all City models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CitySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single City model.
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
     * Creates a new City model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new City();

        if ($model->load(Yii::$app->request->post())) {
            
            $model->created_by=Yii::$app->user->id;
            $model->creation_date=date("Y/m/d");
            $model->last_updated_by=Yii::$app->user->id;
            $model->last_update_date=date("Y/m/d");
            $model->last_update_login=0;
            $model->save();
            return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->city_id]);
        } else {
            $country=ArrayHelper::map(\backend\models\Country::find()->all(), 'country_id', 'name');
            return $this->render('create', [
                            'model' => $model,
                           'country'=>$country
            ]);
        }
    }

    /**
     * Updates an existing City model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
//           $model->created_by=Yii::$app->user->id;
//            $model->creation_date=date("Y/m/d");
            $model->last_updated_by=Yii::$app->user->id;
            $model->last_update_date=date("Y/m/d");
            $model->last_update_login=0;
            $model->save();
            return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->city_id]);
        } else {
             $country=ArrayHelper::map(\backend\models\Country::find()->all(), 'country_id', 'name');
            return $this->render('update', [
                'model' => $model,
                'country'=>$country
            ]);
        }
    }

    /**
     * Deletes an existing City model.
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
     * Finds the City model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return City the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = City::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
