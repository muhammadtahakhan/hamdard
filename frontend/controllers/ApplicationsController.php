<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Applications;
use frontend\models\ApplicationsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use frontend\models\ProgramPreferance;
use frontend\models\AcademicRecords;
use kartik\mpdf\Pdf;
use yii\helpers\Url;
/**
 * ApplicationsController implements the CRUD actions for Applications model.
 */
class ApplicationsController extends Controller
{
//     public $enableCsrfValidation = false;

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
     * Lists all Applications models.
     * @return mixed
     */
    public function actionValidate()
    {
//        $searchModel = new ApplicationsSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//        if (Yii::$app->request->isAjax) {
//        Yii::$app->response->format = Response::FORMAT_JSON;
            $email = $_GET['email'];
            $estatus = Applications::find()->where(['email'=>$email])->count();
//            print_r($estatus);
            if($estatus==0){
                return 'TRUE';
            }else{
                return 'FALSE';
            }
 
        
//    }
       
        
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
    
    
    public function actionSample()
        {
        if (Yii::$app->request->isAjax) {
//             $this->enableCsrfValidation = false;
//            $data = Yii::$app->request->post();
//            $searchname= explode(":", $data['searchname']);
//            $searchby= explode(":", $data['searchby']);
//            $searchname= $searchname[0];
//            $searchby= $searchby[0];
//            $search = // your logic;
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            return [
                'search' => '$search',
                'code' => 100,
            ];
              
            }
        }
     public function actionPdf($id)
        {
         $application = Applications::find()->where(['print_id'=>$id])->one();
         $programpreferance = ProgramPreferance::find()->select('program_id')->where(['application_id'=>$application->application_id])->all();
         $academins = AcademicRecords::find()->where(['application_id'=>$application->application_id])->all();
         $test_center = \backend\models\TestCenters::find()->where(['test_center_id'=>$application->test_center])->one();
         $nationality = \backend\models\Nationality::find()->where(['nationality_id'=>$application->nationality])->one();
         
//         $arrarproid=ArrayHelper::map(\backend\models\Country::find()->all(), 'program_id');
         
         $programs = \backend\models\Programs::find()->where(['program_id'=>$programpreferance])->all();
         if(isset($programs[0]->name)){ $program1 = $programs[0]->name;}else{
             $program1 = "";
         }
         if(isset($programs[1]->name)){ $program2 = $programs[1]->name;}else{
             $program2 = "";
         }
         if(isset($programs[2]->name)){ $program3 = $programs[2]->name;}else{
             $program3 = "";
         }
         if(isset($programs[3]->name)){ $program4 = $programs[3]->name;}else{
             $program4 = "";
         }
         if(isset($programs[4]->name)){ $program5 = $programs[4]->name;}else{
             $program5 = "";
         }
//         foreach($programs as $myprogram){
//            echo $myprogram->name;
//         }
//           echo "<pre>";
////           echo $programs[1]->name;
//         print_r($programs);         
//         echo "</pre>";
//         exit();
//          <img src='".Url::to('@web/img/ava.gif', true)."'/>
//           <a href='http://latcoding.com'>Latcoding.com</a>
         
        $content = "
          <table border='0' cellpadding='1' cellspacing='1' height='323' style='height: 17px;' width='855'>
	<tbody>
		<tr>
			<td colspan='4' style='text-align: center;'><span style='font-size:18px;'><strong>Hamdard University</strong></span><br />
			Admission Applicant Form<br />
			<br />
			<br />
			&nbsp;</td>
		</tr>
		<tr>
			<td colspan='3'><span style='font-size:14px;'>Name: $application->name </span></td>
			<td colspan='1' rowspan='6'><span style='font-size:14px;'>Picture</span></td>
		</tr>
		<tr>
			<td colspan='3'><span style='font-size:14px;'>Father&#39;s Name: $application->f_name</span></td>
		</tr>
		<tr>
			<td><span style='font-size:14px;'>Test Center: $test_center->name</span></td>
			<td><span style='font-size:14px;'>Date:</span></td>
			<td><span style='font-size:14px;'>Timing:</span></td>
		</tr> 
                
		<tr>
			<td><span style='font-size:14px;'>Programs:(1st preferance): $program1</span></td>
			<td colspan='2'><span style='font-size:14px;'>(2st preferance): $program2</span></td>
		</tr>
		<tr>
			<td><span style='font-size:14px;'>(3st preferance):$program3</span></td>
			<td colspan='2'><span style='font-size:14px;'>(4st preferance): $program4</span></td>
		</tr>
		<tr>
			<td><span style='font-size:14px;'>(5st preferance): $program5</span></td>
			<td colspan='2'><span style='font-size:14px;'>Signatuer of Candidate:</span></td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<p><span style='font-size:14px;'><strong>Personal Details:</strong></span></p>

<table border='1' cellpadding='1' cellspacing='1' height='317' width='850'>
	<tbody>
		<tr>
			<td><span style='font-size:14px;'>Applicant&#39;s Date Of Birth: $application->dob</span></td>
			<td><span style='font-size:14px;'>CNIC No: $application->nic</span></td>
			<td><span style='font-size:14px;'>Nationality: $nationality->name</span></td>
		</tr>
		<tr>
			<td colspan='3'><span style='font-size:14px;'>Father&#39;s / Guardian&#39;s Name: $application->f_name</span></td>
			
		</tr>
		<tr>
			<td colspan='2'><span style='font-size:14px;'>Father&#39;s / Guardian&#39;s Mailing Address: $application->f_current_address</span></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><span style='font-size:14px;'>E-mail: $application->email</span></td>
			<td><span style='font-size:14px;'>Phone: $application->phone</span></td>
			<td><span style='font-size:14px;'>Mobile: $application->mobile</span></td>
		</tr>
		<tr>
			<td colspan='3'><span style='font-size:14px;'>Permanent Address: $application->address</span></td>
		</tr>
		
	</tbody>
</table>

<p>&nbsp;</p>


            ";
         
        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content, 
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
             // call mPDF methods on the fly
            'methods' => [
                'SetHeader'=>[],
                'SetFooter'=>['{PAGENO}'],
            ]
        ]);
 
        // http response
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'application/pdf');
 
        // return the pdf output as per the destination setting
        return $pdf->render();       
         
         
        
        }
    
 /**
     * Creates a new Applications model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed     * If creation is successful, the browser will be redirected to the 'view' page.

     */
    public function actionCong()
    {
        
        return $this->render('cong');
    }
        
        
    /**
     * Creates a new Applications model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed     * If creation is successful, the browser will be redirected to the 'view' page.

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
//              print_r($model->preferance);echo "<br />";
//            exit();
                
//            echo $model->preferance."<br />";
//            echo $model->campus."<br />";
//            echo $model->campus."<br />";
//            echo $model->campus."<br />";
//            echo $model->campus."<br />";
            
           
            
//            exit();
          if($model->save()){
//            return $this->redirect(['view', 'id' => $model->application_id]);
                            foreach($model->preferance as $preferance){
//                             echo $preferance;
                             $newpre = new ProgramPreferance();
                             $newpre->application_id= $model->application_id;
                             $newpre->program_id=$preferance;
                             $newpre->created_by=0;
                             $newpre->creation_date=date("Y/m/d");
                             $newpre->last_updated_by = 2;
                             $newpre->last_update_date=date("Y/m/d");
                             $newpre->last_update_login=0;
                           if( $newpre->save()){
                               echo "saving";
                           } else {
                               echo "preferance not saving";
                               exit();
                           }

                         }
                         
//                print_r(count($model->qualification));
                     for ($x = 0; $x <= count($model->qualification)-1; $x++) {
//                        echo $model->boarduni[$x];
//                        print_r($model->boarduni);
                         
                         $record = new AcademicRecords();
//                         $record->qualification=$model->qualification[$x];
                         $record->subject= $model->subject[$x];
                         $record->passing_year=$model->passing_year[$x];
                         $record->attemps= $model->attempt[$x];
                         $record->total_marks= $model->total_marks[$x];
                         $record->marks_obtained=  $model->obtained[$x];
                         $record->percentage= $model->percentage[$x];
                         $record->uni_board= $model->boarduni[$x];
                         $record->application_id=$model->application_id;
                         $record->created_by=0;
                         $record->creation_date=date("Y/m/d");
                         $record->last_updated_by=0;
                         $record->last_update_date=date("Y/m/d");
                         $record->last_update_login=0;
                        if( $record->save()){
                            
                        } else {
                        echo "academic record is not saving";    
                        }
                         
                                                
                                                     
                        } 
//                        exit();
                        
                          $md5email = Applications::find()->where(['application_id'=>$model->application_id])->one();
                          $md5email->print_id = md5($model->application_id+$model->email);
                          $md5email->save();
                         
                          Yii::$app->mailer->compose()
                            ->setFrom('from@domain.com')
                            ->setTo($model->email)
                            ->setSubject('admission Form')
                            ->setTextBody('Plain text content'.Yii::$app->getUrlManager()->createUrl('applications/pdf'))
                            ->setHtmlBody('<b>HTML content</b>')
                            ->send();
//                          // bpm_session Applicationn;
                          
                          
                     // get your HTML raw content without any layouts or scripts
//                            return $this->render('cong');
                 return $this->redirect(["applications/cong"]);
//          return $this->redirect(['index']);
          
                        }else{
              echo "application not saving";
          }
        } else {
            
           
            $nationality=ArrayHelper::map(\backend\models\Nationality::find()->all(), 'nationality_id', 'name');
            $country=ArrayHelper::map(\backend\models\Country::find()->all(), 'country_id', 'name');
            $city=ArrayHelper::map(\backend\models\City::find()->all(), 'city_id', 'name');
            $boarduni=ArrayHelper::map(\backend\models\BoardUniversity::find()->all(), 'board_uni_id', 'name');
            $test_center = \backend\models\TestCenters::find()->all();
            return $this->render('create', [
                'model' => $model,
                'nationality'=>$nationality,
                'country'=>$country,
                'city'=>$city,
                'preferance'=>$preferance,
                'boarduni'=>$boarduni,
                'test_center'=>$test_center
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
