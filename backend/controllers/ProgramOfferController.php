<?php

namespace backend\controllers;

use Yii;
use backend\models\ProgramOffer;
use backend\models\ProgramOfferSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
/**
 * ProgramOfferController implements the CRUD actions for ProgramOffer model.
 */
class ProgramOfferController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ProgramOffer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProgramOfferSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProgramOffer model.
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
     * Creates a new ProgramOffer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProgramOffer();

        if ($model->load(Yii::$app->request->post())) {
            
             $year =   $model->year;
             $from_date =  $model->from_date;
             $to_date =  $model->to_date;
           echo"seaaion id ->".  $session_id = $model->session_id;
            
            $allprograms = $model->program_id;
            print_r($allprograms);
//            exit();
            foreach($allprograms as $program){
            $model2 = new ProgramOffer();
//                echo $program;
          echo  $model2->year= $year ;
          echo  $model2->from_date =  $from_date ;
          echo  $model2->to_date =  $to_date;
          echo"seaaion id ->".  $model2->session_id =  $session_id;
          echo  $model2->created_by=Yii::$app->user->id;
          echo  $model2->creation_date=date("Y/m/d");
          echo  $model2->last_updated_by=Yii::$app->user->id;
          echo  $model2->last_update_date=date("Y/m/d");
          echo  $model2->last_update_login=0;
          echo  $model2->program_id = $program;
            echo"<br/>";
            $model2->save();
            if($model2->save()){
               
            }
            }
//            exit();
//            $model->created_by=Yii::$app->user->id;
//            $model->creation_date=date("Y/m/d");
//            $model->last_updated_by=Yii::$app->user->id;
//            $model->last_update_date=date("Y/m/d");
//            $model->last_update_login=0;
//            print_r($model->program_id);
//            exit();
//            $model->save();
            return $this->redirect(['index']);
        } else {
            $programs=ArrayHelper::map(\backend\models\Programs::find()->all(), 'program_id', 'name');
            $sessions=ArrayHelper::map(\backend\models\Session::find()->all(), 'session_id', 'name');
            return $this->render('create', [
                'model' => $model,
                'programs'=>$programs,
                'sessions'=>$sessions
            ]);
        }
    }

    /**
     * Updates an existing ProgramOffer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
//            return $this->redirect(['view', 'id' => $model->offer_id]);
        } else {
             $programs=ArrayHelper::map(\backend\models\Programs::find()->all(), 'program_id', 'name');
            $sessions=ArrayHelper::map(\backend\models\Session::find()->all(), 'session_id', 'name');
            return $this->render('update', [
                'model' => $model,
                'programs'=>$programs,
                'sessions'=>$sessions
            ]);
        }
    }

    /**
     * Deletes an existing ProgramOffer model.
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
     * Finds the ProgramOffer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProgramOffer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProgramOffer::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
