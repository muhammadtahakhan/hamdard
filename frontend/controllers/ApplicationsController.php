<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Applications;
use frontend\models\ApplicationsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * ApplicationsController implements the CRUD actions for Applications model.
 */
class ApplicationsController extends Controller
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
     * Lists all Applications models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ApplicationsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        
        
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

//        return $this->renderPartial('index', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
        
    }

    /**
     * Displays a single Applications model.
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
     * Creates a new Applications model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Applications();
     
        $time = new \DateTime('now');
         $cyear = $time->format('Y');
        $today = $time->format('Y-m-d');
        strtotime($today)."<br />";
        
        
         $preferance = \backend\models\ProgramOffer::find()->andWhere(['=', 'year', $cyear])->andWhere(['between', 'from_date', 'to_date',  $today ])->all();
//         echo  "<pre>";
//         print_r($preferance);
//         echo  "</pre>";
         
        if ($model->load(Yii::$app->request->post())) {
//                sturdent info 
//            echo $model->name."<br />">
//            echo $model->nic."<br />";
//            echo $model->dob."<br />";
//            echo $model->email."<br />";
//            echo $model->mobile."<br />";
//            echo $model->phone."<br />";
//            echo $model->nationality."<br />";
//            echo $model->gender."<br />";
//            echo $model->address."<br />";
//            echo $model->country."<br />";
//            echo $model->city."<br />";
                      
//                   parent info   
//            echo $model->f_name."<br />";
//            echo $model->f_nic."<br />";
//            echo $model->f_email."<br />";
//            echo $model->f_income."<br />";
//            echo $model->f_occupation."<br />";
//            echo $model->f_phone."<br />";
//            echo $model->f_mobile."<br />";
//            echo $model->f_perminant_Address."<br />";
            
//                final tabs
//            echo $model->campus."<br />";
//            echo $model->hostal_flag."<br />";
//            echo $model->student_type."<br />";
//            echo $model->test_center."<br />";
                                
//                preferances
              
//            echo $model->campus."<br />";
//            echo $model->campus."<br />";
//            echo $model->campus."<br />";
//            echo $model->campus."<br />";
//            echo $model->campus."<br />";
            
//               Academin Records
//            print_r($model->qualification);echo "<br />";
//            print_r($model->subject);echo "<br />";
//            print_r($model->passing_year);echo "<br />";
//            print_r($model->attempt);echo "<br />";
//            print_r($model->total_marks);echo "<br />";
//            print_r($model->obtained);echo "<br />";
//            print_r($model->percentage);echo "<br />";
//            print_r($model->boarduni);echo "<br />";
            
//                Preferances
              print_r($model->preferance);echo "<br />";
            
                
//            echo $model->preferance."<br />";
//            echo $model->campus."<br />";
//            echo $model->campus."<br />";
//            echo $model->campus."<br />";
//            echo $model->campus."<br />";
                              
            
            exit();
            $model->save();
            return $this->redirect(['view', 'id' => $model->application_id]);
        } else {
            
           
            $nationality=ArrayHelper::map(\backend\models\Nationality::find()->all(), 'nationality_id', 'name');
             $country=ArrayHelper::map(\backend\models\Country::find()->all(), 'country_id', 'name');
              $city=ArrayHelper::map(\backend\models\City::find()->all(), 'city_id', 'name');
            
            return $this->render('create', [
                'model' => $model,
                'nationality'=>$nationality,
                'country'=>$country,
                'city'=>$city,
                'preferance'=>$preferance
            ]);
        }
    }

    /**
     * Updates an existing Applications model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->application_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Applications model.
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
     * Finds the Applications model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Applications the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Applications::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
