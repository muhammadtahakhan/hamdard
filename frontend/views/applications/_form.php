<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Applications */
/* @var $form yii\widgets\ActiveForm */
?>



  <div class="container">
    <div class="site-index">
        <div class="body-content">

            <div class="row">
                <div class="col-md-12">
                    <br /><br /><br /><br />
<!--                    <div class="jumbotron">
                        <h1>Height options</h1>
                        <img src="<?php echo Yii::getAlias('@web') ?>/form/header.jpg" />
                        <p class="lead">
                            Default height is set to 'first', but you can change to tallest, auto, or some number,
                            which means height of content in pixels. But precise height of wizard is dependent on chosen
                            theme.
                        </p>
                    </div>-->

                    <form id="wizard_example" action="">
                          <fieldset>
                            <legend>Applicant's Info</legend>
                            <div class="row">
                                <div class="col-lg-6">
                                   
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               name="exampleInputEmail1" placeholder="Enter email">
                                     </div>
                                      
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">date of birth</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               name="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">cnic</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               name="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                   
                                   
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                               name="exampleInputPassword1" placeholder="Password" >
                                    </div>
                                   
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Phone</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
                                    
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Mobile</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
                                    
<!--                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Country</label>
                                          <select class="form-control" name="favoriteNumber">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">City</label>
                                         <select class="form-control" name="favoriteNumber">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    
                                    
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>-->
 
                                    
                                </div>
                                  <div class="col-lg-6">
                                   
<!--                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               name="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Gender</label>
                                         <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" value="option1" checked>
                                                Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" value="option1">
                                                   Female
                                                </label>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">date of birth</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               name="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">cnic</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               name="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nationality</label>
                                          <select class="form-control" name="favoriteNumber">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               name="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                               name="exampleInputPassword1" placeholder="Password" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
                                    
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Phone</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
                                    
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Mobile</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>-->
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Gender</label>
                                         <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" value="option1" checked>
                                                Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" value="option1">
                                                   Female
                                                </label>
                                            </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Nationality</label>
                                          <select class="form-control" name="favoriteNumber">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Country</label>
                                          <select class="form-control" name="favoriteNumber">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">City</label>
                                         <select class="form-control" name="favoriteNumber">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    
                                    
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
 
                                    
                                </div>
                              
                          
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Father's/Guardian's Info.</legend>
                            <div class="row">
                                <div class="col-lg-6">
                                   
                                    
                                    
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">nic</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Phone</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Mobile</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Occupation</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>  
 
                                </div>
                                <div class="col-lg-6">
                                   
                                  <div class="form-group">
                                        <label for="exampleInputPassword1">Monthly Income</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Country</label>
                                         <select class="form-control" name="favoriteNumber">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">City</label>
                                         <select class="form-control" name="favoriteNumber">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Perminant Address</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Current Address</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordAgain1"
                                               name="exampleInputPasswordAgain1" placeholder="Password">
                                    </div>
                                        
 
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
                        <select class="form-control">
                            <option>Monthly</option>
                            <option>Yearly</option>
                        </select>
                    </td>
                    <td><input type="text" class="form-control" value=""/></td>
                    <td> <select class="form-control">
                            <option>2001</option>
                             <option>2001</option>
                              <option>2001</option> <option>2001</option> <option>2001</option>
                               <option>2001</option>
                                <option>2001</option>
                                 <option>2001</option>
                                  <option>2001</option>
                                   <option>2001</option>
                                    <option>2001</option>
                                      <option>2001</option>
                                        <option>2001</option>  <option>2001</option>
                                          <option>2001</option>
                                            <option>2001</option>  <option>2001</option>
                                              <option>2001</option>
                                                <option>2001</option>
                                                  <option>2001</option>
                                                    <option>2001</option>
                                                      <option>2001</option>
                                                        <option>2001</option>
                                            
                                        
                            
                        </select></td>
                    <td>
                        <select class="form-control">
                            <option>1</option>
                             <option>2</option>
                              <option>3</option>
                               <option>4</option>
                            <option>5</option>
                        </select>
                    </td>
                    <td><input type="text" class="form-control" value=""/></td>
                    <td><input type="text" class="form-control" value=""/></td>
                    <td><input type="text" class="form-control" value=""/></td>
                    <td> 
                        <select class="form-control">
                            <option>Monthly</option>
                            <option>Yearly</option>
                        </select>
                    </td>
                    
                </tr>
                
            </tbody>
        </table>
    </div>
<!--                                <noscript>
                                    <input class="nocsript-finish-btn sf-right nocsript-sf-btn" type="submit"
                                           name="no-js-clicked" value="finish"/>
                                </noscript>-->
                            </div>
                        </fieldset>
                         <fieldset>
                            <legend>Preference Details</legend>
                            <div class="row">
                                <div class="col-lg-6">
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Gender</label>
                                         <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" value="option1" checked>
                                                Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" value="option1">
                                                   Female
                                                </label>
                                            </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Tick the Campus Applied for: </label>
                                         <div class="radio">
                                            <label>
                                                <input type="radio" name="applied_for" value="option1" checked>
                                                Karachi
                                            </label>
                                        </div>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="applied_for" value="option1">
                                                 Islamabad
                                                </label>
                                            </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Do you require accommodation? </label>
                                         <div class="radio">
                                            <label>
                                                <input type="radio" name="accomodation" value="option1" checked>
                                                Yes
                                            </label>
                                        </div>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="accomodation" value="option1">
                                                No
                                                </label>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Please tick the applicable box: </label>
                                         <div class="radio">
                                            <label>
                                                <input type="radio" name="s_type" value="option1" checked>
                                              Local Student
                                            </label>
                                        </div>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="s_type" value="option1">
                                                  Foreign Student
                                                </label>
                                            </div>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="s_type" value="option1">
                                                  Overseas Pakistani 
                                                </label>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Test Center for Biological Sciences : </label>
                                         <div class="radio">
                                            <label>
                                                <input type="radio" name="s_type" value="option1" checked>
                                              Local Student
                                            </label>
                                        </div>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="s_type" value="option1">
                                                  Foreign Student
                                                </label>
                                            </div>
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" name="s_type" value="option1">
                                                  Overseas Pakistani 
                                                </label>
                                            </div>
                                    </div>
                                </div>
                               
                                <noscript>
                                    <input class="nocsript-finish-btn sf-right nocsript-sf-btn" type="submit"
                                           name="no-js-clicked" value="finish"/>
                                </noscript>
                            </div>
                        </fieldset>
                    </form>
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

    <?= $form->field($model, 'f_dob')->textInput() ?>

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
