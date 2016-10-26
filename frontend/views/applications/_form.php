<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Applications */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
//                                      foreach ($preferance as $mypre){
////                                          <!--print_r($mypre->offer_id)."<br />";-->
//                                       $mypre = \backend\models\Programs::find()->where(['program_id'=>$mypre->program_id])->one();
//                                       echo "<pre>";
//                                       print_r($mypre);
//                                       echo "</pre>";
//                                           echo"<option value='$mypre->program_id'>$mypre->name</option>" ;
//                                           
//                                       
//                                          
//                                      } 
                                      ?>

  <div class="container">
    <div class="site-index">
        <div class="body-content">

            <div class="row">
                <div class="col-md-12">
                    <br /><br />
                  
<!--                    <div class="jumbotron">
                        <h1>Height options</h1>
                        <img src="<?php echo Yii::getAlias('@web') ?>/form/header.jpg" />
                        <p class="lead">
                            Default height is set to 'first', but you can change to tallest, auto, or some number,
                            which means height of content in pixels. But precise height of wizard is dependent on chosen
                            theme.
                        </p>
                    </div>-->

                    <!--<form id="wizard_example" action="">-->
                         <?php $form = ActiveForm::begin([
                             'id'=>'wizard_example'
                         ]); ?>
                    <fieldset>
                            <legend>Applicant's Info</legend>
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                      
                                      <?= $form->field($model, 'name', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(array('placeholder' => 'Enter Name', 'required'=>'true', 'required data-msg'=>'Name This field is required.', 'data-parsley-group'=>'block0'));  ?>

                                      <?= $form->field($model, 'nic', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(array('placeholder' => 'Enter NIC', 'required'=>'true', 'min'=>'1', 'maxlength'=>'15', 'type'=>'number',));  ?>

                                     <?= $form->field($model, 'dob', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(array('placeholder' => 'Enter Date of Birth', 'id'=>'date', 'required'=>'true'));  ?>

                                        

                                     <?= $form->field($model, 'email', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(['placeholder' => 'Enter Email address', 'required'=>'true', 'type'=>'email']);  ?>

                                     <?= $form->field($model, 'mobile', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(array('placeholder' => 'Enter Mobile Number', 'min'=>'1', 'maxlength'=>'11', 'type'=>'number', 'required'=>'true'));  ?>

                                         <?= $form->field($model, 'phone', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(array('placeholder' => 'Enter Phone Number', 'min'=>'1', 'maxlength'=>'11', 'type'=>'number', 'required'=>'true'));  ?>



 
                                    
                                </div>
                                  <div class="col-lg-6">
                                     
                                      <?php $model->gender = 'male'; ?>
                                      <?= $form->field($model, 'gender', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->radioList(array('male'=>'Male','female'=>'Female'))  ?>
                                      
                                      <?= $form->field($model, 'nationality', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->dropDownList($nationality,  ['prompt'=>'Choose...', 'required'=>'true']); ?>
                                      
                                      
                                      <?= $form->field($model, 'country', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->dropDownList($country, ['prompt'=>'Choose...', 'required'=>'true']); ?>
                                      
                                      <?= $form->field($model, 'city', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->dropDownList($city, ['prompt'=>'Choose...', 'required'=>'true']);  ?>
                                      
                                       
                                      <?= $form->field($model, 'address', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(array('placeholder' => 'Enter Address', 'required'=>'true'));  ?>
 
                                    
                                </div>
                              
                          
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Father's/Guardian's Info.</legend>
                            <div class="row">
                                <div class="col-lg-6">
                                   
                                    
                                      <?= $form->field($model, 'f_name', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(['placeholder' => "Father\Guardian's Name", 'required'=>'true'])  ?>
                                    
                                    
                                      <?= $form->field($model, 'f_nic', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(['placeholder' => "Father\Guardian's NIC", 'min'=>'1', 'maxlength'=>'15', 'type'=>'number', 'required'=>'true'])  ?>
                                    
                                    <?= $form->field($model, 'f_email', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(['placeholder' => "Father\Guardian's Email", 'type'=>'email', 'id'=>"exampleInputEmail", 'required'=>'true'])  ?>
                                    
                                      <?= $form->field($model, 'f_phone', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(['placeholder' => "Father\Guardian's Phone", 'min'=>'1', 'maxlength'=>'11', 'type'=>'number', 'required'=>'true']) ?>
                                    
                                    
                                    
                                      <?= $form->field($model, 'f_mobile', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(['placeholder' => "Father\Guardian's Mobile", 'min'=>'1', 'maxlength'=>'11', 'type'=>'number', 'required'=>'true']) ?>
                                    
                                                                        
                                    
                                    <?= $form->field($model, 'f_occupation', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(['placeholder' => "Father\Guardian's Occupation", 'required'=>'true'])  ?>
                                    
                                   
                                </div>
                                <div class="col-lg-6">
                                    
                                     <?= $form->field($model, 'f_income', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(['placeholder' => "Father\Guardian's Occupation", 'min'=>'1', 'max'=>'300000', 'type'=>'number', 'required'=>'true'])  ?>
                                    
                                      
                                      <?= $form->field($model, 'f_country', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->dropDownList($country, ['prompt'=>'Choose...', 'required'=>'true']); ?>
                                      
                                      <?= $form->field($model, 'f_city', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->dropDownList($city, ['prompt'=>'Choose...', 'required'=>'true']);  ?>
                                    
                                   
                                    
                                     <?= $form->field($model, 'f_perminant_Address', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->textInput(['placeholder' => "Father\Guardian's Address", 'required'=>'true'])  ?>
                                    
                                    
                                </div>
                          
                            </div>
                        </fieldset>
                       
                         <fieldset>
                            <legend>Academic Records</legend>
                            <div class="row">
                                <div class="table-responsive col-lg-12">
                             <table class="table table-bordered">
            <thead>
                <th>Qualification</th>
                <th>Subject</th>
                <th>Year of Passing</th>
                <th>Attempt</th>
                <th>Total Marks</th>
                <th>Marks Obtained </th>
                <th>Percentage</th>
                <th>Board / University</th>
                
            </thead>
            <tbody>
               
                <tr>
                    <td> 
                        <select class="form-control" name="Applications[qualification][]" required="true">
                            <option value="" disabled selected>Select your option</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="Applications[subject][]" value="" required="true"/>
                    </td>
                    <td> 
                        <input type="date" name="Applications[passing_year][]" class="form-control" value="" required="true"/>
                    </td>
                    <td>
                        <select class="form-control" name="Applications[attempt][]" required="true">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                   </td>
                   <td><input name="Applications[total_marks][]" type="number" type="text" class="form-control" value="" required="true"/></td>
                   <td><input name="Applications[obtained][]" type="number" class="form-control" value="" required="true"/></td>
                   <td><input name="Applications[percentage][]" type="number" class="form-control" value="" required="true" /></td>
                   <td> 
                                                   
                                                    
                                                     <?= $form->field($model, 'boarduni[]', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->dropDownList($boarduni, ['prompt'=>'Choose...'])->label(FALSE); ?>
                   </td>

                                            </tr>
               
                 <tr>
                    <td> 
                        <select class="form-control" name="Applications[qualification][]">
                            <option value="" disabled selected>Select your option</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="Applications[subject][]" value="" />
                    </td>
                    <td> 
                        <input type="date" name="Applications[passing_year][]" class="form-control" value="" />
                    </td>
                    <td>
                        <select class="form-control" name="Applications[attempt][]">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                   </td>
                   <td><input name="Applications[total_marks][]" type="number" type="text" class="form-control" value=""/></td>
                   <td><input name="Applications[obtained][]" type="number" class="form-control" value=""/></td>
                   <td><input name="Applications[percentage][]" type="number" class="form-control" value="" /></td>
                   <td> 
                                                   
                                                    
                                                     <?= $form->field($model, 'boarduni[]', ['template' => 
                                           "<div class='form-group'>
                                                {label}\n{input}\n{hint}\n{error}
                                             </div>"
                                      ])->dropDownList($boarduni, ['prompt'=>'Choose...'])->label(FALSE); ?>
                   </td>

                                            </tr>
                                            
              
                                        </tbody>
                                    </table>
                                    <button id="addrecord" align="center">add more record</button><br /><br /><br /><br />
    </div>
                                <noscript>
                                    <input class="nocsript-finish-btn sf-right nocsript-sf-btn" type="submit"
                                           name="no-js-clicked" value="finish"/>
                                </noscript>
                            </div>
                        </fieldset>
                         <fieldset>
                            <legend>Preference Details</legend>
                            <div class="row">
                                <div class="col-lg-6">
                                    Applications[campus]
                                    
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">First Preferance</label>
                                        <select id="preferance1" class="form-control" name="Applications[preferance][]">
                                  <option value="" disabled selected>Select...</option>
                                        <?php
                                      foreach ($preferance as $mypre){
//                                          print_r($mypre->offer_id)."<br />";
                                       $mypre = \backend\models\Programs::find()->where(['program_id'=>$mypre->program_id])->one();
//                                       echo "<pre>";
//                                       print_r($mypre);
//                                       echo "</pre>";
                                           echo"<option value='$mypre->program_id'>$mypre->name</option>" ;
                                           
                                       
                                          
                                      } 
                                      ?>

                                     </select>
                                    </div>
                                    
                                     
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">First Preferance</label>
                                        <select id="preferance2" class="form-control" onchange="apreferance()" name="Applications[preferance][]">
                                  <option value="" disabled selected>Select...</option>
                                       <?php
                                      foreach ($preferance as $mypre){
//                                          print_r($mypre->offer_id)."<br />";
                                       $mypre = \backend\models\Programs::find()->where(['program_id'=>$mypre->program_id])->one();
//                                       echo "<pre>";
//                                       print_r($mypre);
//                                       echo "</pre>";
                                           echo"<option value='$mypre->program_id'>$mypre->name</option>" ;
                                           
                                       
                                          
                                      } 
                                      ?>

                                     </select>
                                    </div>
                                    
                                     
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">First Preferance</label>
                                        <select id="preferance3" class="form-control" name="Applications[preferance][]">
                                   <option value="" disabled selected>Select...</option>
                                            <?php
                                      foreach ($preferance as $mypre){
//                                          print_r($mypre->offer_id)."<br />";
                                       $mypre = \backend\models\Programs::find()->where(['program_id'=>$mypre->program_id])->one();
//                                       echo "<pre>";
//                                       print_r($mypre);
//                                       echo "</pre>";
                                           echo"<option value='$mypre->program_id'>$mypre->name</option>" ;
                                           
                                       
                                          
                                      } 
                                      ?>

                                     </select>
                                    </div>
                                    
                                     
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">First Preferance</label>
                                        <select id="preferance4" class="form-control" name="Applications[preferance][]">
                                   <option value="" disabled selected>Select...</option>
                                            <?php
                                      foreach ($preferance as $mypre){
//                                          print_r($mypre->offer_id)."<br />";
                                       $mypre = \backend\models\Programs::find()->where(['program_id'=>$mypre->program_id])->one();
//                                       echo "<pre>";
//                                       print_r($mypre);
//                                       echo "</pre>";
                                           echo"<option value='$mypre->program_id'>$mypre->name</option>" ;
                                           
                                       
                                          
                                      } 
                                      ?>

                                     </select>
                                    </div>
                                    
                                     
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">First Preferance</label>
                                        <select id="preferance5" class="form-control" name="Applications[preferance][]">
                                  <option value="" disabled selected>Select...</option>
                                                 <?php
                                      foreach ($preferance as $mypre){
//                                          print_r($mypre->offer_id)."<br />";
                                       $mypre = \backend\models\Programs::find()->where(['program_id'=>$mypre->program_id])->one();
//                                       echo "<pre>";
//                                       print_r($mypre);
//                                       echo "</pre>";
                                           echo"<option value='$mypre->program_id'>$mypre->name</option>" ;
                                           
                                       
                                          
                                      } 
                                      ?>

                                     </select>
                                    </div>
                                   

                                </div>
                                
                                <div class="col-lg-6">
                                    
                                    
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Tick the Campus Applied for: </label>
                                         <div class="radio">
                                            <label>
                                                <input type="radio" name="Applications[campus]" value="option1" checked>
                                                Karachi
                                            </label>
                                        </div>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="Applications[campus]" value="option2">
                                                 Islamabad
                                                </label>
                                            </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Do you require accommodation? </label>
                                         <div class="radio">
                                            <label>
                                                <input type="radio" name="Applications[hostal_flag]" value="Y" checked>
                                                Yes
                                            </label>
                                        </div>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="Applications[hostal_flag]" value="N">
                                                No
                                                </label>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Please tick the applicable box: </label>
                                         <div class="radio">
                                            <label>
                                                <input type="radio" name="Applications[student_type]" value="0" checked>
                                              Local Student
                                            </label>
                                        </div>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="Applications[student_type]" value="1">
                                                  Foreign Student
                                                </label>
                                            </div>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="Applications[student_type]" value="2">
                                                  Overseas Pakistani 
                                                </label>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Test Center for Biological Sciences : </label>
                                        <?php
                                        foreach($test_center as $center){ ?>
                                         <div class="radio">
                                            <label>
                                                <input type="radio" name="Applications[test_center]" value="<?=$center->test_center_id?>" checked>
                                              <?=$center->name?>
                                            </label>
                                        </div>
                                            
                                    <?php    }
                                        ?>
                                        
                                    </div>
                                </div>
                               
                                <noscript>
                                    <input class="nocsript-finish-btn sf-right nocsript-sf-btn" type="submit"
                                           name="no-js-clicked" value="finish"/>
                                </noscript>
                            </div>
                        </fieldset>
                    </form>
                     //<?php ActiveForm::end(); ?>
                </div>
            </div>
           


            <footer class="footer">
                <div class="container">
                    <p class="pull-left"></p>
                </div>
            </footer>
        </div>
    </div>
</div>






<!--<div class="applications-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dob')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput() ?>

    <?= $form->field($model, 'city')->textInput() ?>

    <?= $form->field($model, 'f_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_nic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_occupation')->textInput() ?>

    <?= $form->field($model, 'f_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_current_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_country')->textInput() ?>

    <?= $form->field($model, 'f_city')->textInput() ?>

    <?= $form->field($model, 'campus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_center')->textInput() ?>

    <?= $form->field($model, 'student_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_income')->textInput() ?>

    <?= $form->field($model, 'f_perminant_Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hostal_flag')->textInput() ?>

    <?= $form->field($model, 'enable_flag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_updated_date')->textInput() ?>

    <?= $form->field($model, 'last_updated_by')->textInput() ?>

    <?= $form->field($model, 'creation_date')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'last_update_login')->textInput() ?>

    <?= $form->field($model, 'print_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>-->
<script>
function apreferance(){
//    var csrfToken = $('meta[name="csrf-token"]').attr("content");
    $.ajax({
       url: '<?php echo Yii::$app->getUrlManager()->createUrl('applications/sample')  ; ?>',
       type: 'GET',
        dataType: 'json',
       data: {
                 searchname: 'name ', 
                 searchby:'safsd' , 
//                 _csrf : csrfToken,
//                 _csrf : '<?=Yii::$app->request->getCsrfToken()?>'                 
                
             },
       success: function (data) {
          console.log(data.search);
       }
  });
}


</script>
<script>
//$(document).ready(function() {
//    $('#exampleInputEmail').formValidation();
//});


$('#applications-email').on('blur', function () {

     var lrg = $("#applications-email").val().trim().length;
      if(lrg != 0){
    $.ajax({
       url: '<?php echo Yii::$app->getUrlManager()->createUrl('applications/validate')  ; ?>',
       type: 'GET',
//       dataType : "json",
       data: {
                 email: $("#applications-email").val() , 
                 _csrf : '<?=Yii::$app->request->getCsrfToken()?>'
             },
       success: function(data) {
          console.log(data);
          
          if(data=='FALSE'){
              alert($("#applications-email").val()+' Alrady been taken');
              $("#applications-email").addClass('error');
              $("#applications-email").val('') ;
              $("#applications-email-error").css({ 'display': 'inline-block' });
          }
          
       }
  });  
  }
});


$("#preferance1").change(function(){
//$('#preferance1').find(":selected");
 var select1 = document.getElementById('preferance1').value;
 var select2 = document.getElementById('preferance2').value;
 var select3 = document.getElementById('preferance3').value;
 var select4 = document.getElementById('preferance4').value;
 var select5 = document.getElementById('preferance5').value;
// console.log(select1);
 
 $('#preferance2').children().removeClass("hidden");
 $('#preferance2').find('[value='+select1+']').addClass("hidden");
    
    $('#preferance3').children().removeClass("hidden");
 $('#preferance3').find('[value='+select1+']').addClass("hidden");
    
    $('#preferance4').children().removeClass("hidden");
 $('#preferance4').find('[value='+select1+']').addClass("hidden");
    
    $('#preferance5').children().removeClass("hidden");
 $('#preferance5').find('[value='+select1+']').addClass("hidden");


});





$("#preferance2").change(function(){
//$('#preferance1').find(":selected");
 var select1 = document.getElementById('preferance1').value;
 var select2 = document.getElementById('preferance2').value;
 var select3 = document.getElementById('preferance3').value;
 var select4 = document.getElementById('preferance4').value;
 var select5 = document.getElementById('preferance5').value;
// console.log(select1);
 
 $('#preferance3').children().removeClass("hidden");
 $('#preferance3').find('[value='+select1+']').addClass("hidden");;
 $('#preferance3').find('[value='+select2+']').addClass("hidden");;
 
 
 $('#preferance4').children().removeClass("hidden");;
 $('#preferance4').find('[value='+select1+']').addClass("hidden");
 $('#preferance4').find('[value='+select2+']').addClass("hidden");
 
 
 $('#preferance5').children().removeClass("hidden");
 $('#preferance5').find('[value='+select1+']').addClass("hidden");
 $('#preferance5').find('[value='+select2+']').addClass("hidden");
  


});



$("#preferance3").change(function(){
//$('#preferance1').find(":selected");
 var select1 = document.getElementById('preferance1').value;
 var select2 = document.getElementById('preferance2').value;
 var select3 = document.getElementById('preferance3').value;
 var select4 = document.getElementById('preferance4').value;
 var select5 = document.getElementById('preferance5').value;
// console.log(select1);
 
 $('#preferance4').children().removeClass("hidden");
 $('#preferance4').find('[value='+select1+']').addClass("hidden");
 $('#preferance4').find('[value='+select2+']').addClass("hidden");
 $('#preferance4').find('[value='+select3+']').addClass("hidden");
 
 
 $('#preferance5').children().removeClass("hidden");
 $('#preferance5').find('[value='+select1+']').addClass("hidden");
 $('#preferance5').find('[value='+select2+']').addClass("hidden");
 $('#preferance5').find('[value='+select3+']').addClass("hidden");
 
 
});




$("#preferance4").change(function(){
//$('#preferance1').find(":selected");
 var select1 = document.getElementById('preferance1').value;
 var select2 = document.getElementById('preferance2').value;
 var select3 = document.getElementById('preferance3').value;
 var select4 = document.getElementById('preferance4').value;
 var select5 = document.getElementById('preferance5').value;
// console.log(select1);
 
 $('#preferance5').children().removeClass("hidden");
 $('#preferance5').find('[value='+select1+']').addClass("hidden");
 $('#preferance5').find('[value='+select2+']').addClass("hidden");
 $('#preferance5').find('[value='+select3+']').addClass("hidden");
 $('#preferance5').find('[value='+select4+']').addClass("hidden");
 
 
 
 
});



$("#addrecord").click(function(){
   
    var row = `<tr> <td> 
                        <select class="form-control" name="Applications[qualification][]">
                            <option value="" disabled selected>Select your option</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="Applications[subject][]" value="" />
                    </td>
                    <td> 
                        <input type="date" name="Applications[passing_year][]" class="form-control"  />
                    </td>
                    <td>
                        <select class="form-control" name="Applications[attempt][]">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                   </td>
                   <td><input name="Applications[total_marks][]" type="number" type="text" class="form-control" value=""/></td>
                   <td><input name="Applications[obtained][]" type="number" class="form-control" value=""/></td>
                   <td><input name="Applications[percentage][]" type="number" class="form-control" value="" /></td>
                   <td> 
                                                   
                                                    
                                                     <div class="form-group field-applications-boarduni">
<div class='form-group'>
                                                
<select id="applications-boarduni" class="form-control" name="Applications[boarduni][]">
<option value="">Choose...</option>
<option value="1">ss</option>
<option value="2">aaa</option>
<option value="3">weww</option>
</select>

<div class="help-block"></div>
                                             </div>
</div>                   </td>

                                            </tr>`;               // Create element with HTML 
   
   
   
    $("table").append(row);      // Append the new elements
    return false;
});







</script>