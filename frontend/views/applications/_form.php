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
                            <legend>Applicant's Information</legend>
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
                                <div class="col-lg-12">
                                    <p>
                                        Even though using "lorem ipsum" often arouses curiosity due to its resemblance
                                        to classical Latin, it is not intended to have meaning. Where text is visible in
                                        a document, people tend to focus on the textual content rather than upon overall
                                        presentation, so publishers use lorem ipsum when displaying a typeface or design
                                        in order to direct the focus to presentation. "Lorem ipsum" also approximates a
                                        typical distribution of letters in English.
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputName1">Your name</label>
                                                <input type="text" class="form-control" id="exampleInputName1"
                                                       name="exampleInputName1" placeholder="Your name">
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputCat1">Name of your cat</label>
                                                <input type="text" class="form-control" id="exampleInputCat1"
                                                       name="exampleInputCat1" placeholder="Name of your cat">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputHam1"></label>
                                                <input type="text" class="form-control" id="exampleInputHam1"
                                                       name="exampleInputHam1" placeholder="Name of your hamster">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputGrocer1"></label>
                                                <input type="text" class="form-control" id="exampleInputGrocer1"
                                                       name="exampleInputGrocer1"
                                                       placeholder="Name of your grocery seller">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios2" value="option3" checked>
                                                    Option one is this and that&mdash;be sure to include why it's great
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios2" value="option4">
                                                    Option two can be something else and selecting it will deselect
                                                    option one
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="superPower"> I want have super-power
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="moreSuperPower"> I have one or more
                                                    super-power already
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <p>
                                        Even though using "lorem ipsum" often arouses curiosity due to its resemblance
                                        to classical Latin, it is not intended to have meaning. Where text is visible in
                                        a document, people tend to focus on the textual content rather than upon overall
                                        presentation, so publishers use lorem ipsum when displaying a typeface or design
                                        in order to direct the focus to presentation. "Lorem ipsum" also approximates a
                                        typical distribution of letters in English.
                                    </p>

                                    <p>
                                        Using "lorem ipsum" often arouses curiosity due to its resemblance to classical
                                        Latin, it is not intended to have meaning. Where text is visible in a document,
                                        people tend to focus on the textual content rather than upon overall
                                        presentation, so publishers use lorem ipsum when displaying a typeface or design
                                        in order to direct the focus to presentation. "Lorem ipsum" also approximates a
                                        typical distribution of letters in English.
                                    </p>
                                </div>
                                <noscript>
                                    <input class="nocsript-finish-btn sf-right nocsript-sf-btn" type="submit"
                                           name="no-js-clicked" value="finish"/>
                                </noscript>
                            </div>
                        </fieldset>
                         <fieldset>
                            <legend>Final after step</legend>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>
                                        Even though using "lorem ipsum" often arouses curiosity due to its resemblance
                                        to classical Latin, it is not intended to have meaning. Where text is visible in
                                        a document, people tend to focus on the textual content rather than upon overall
                                        presentation, so publishers use lorem ipsum when displaying a typeface or design
                                        in order to direct the focus to presentation. "Lorem ipsum" also approximates a
                                        typical distribution of letters in English.
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputName1">Your name</label>
                                                <input type="text" class="form-control" id="exampleInputName1"
                                                       name="exampleInputName1" placeholder="Your name">
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputCat1">Name of your cat</label>
                                                <input type="text" class="form-control" id="exampleInputCat1"
                                                       name="exampleInputCat1" placeholder="Name of your cat">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputHam1"></label>
                                                <input type="text" class="form-control" id="exampleInputHam1"
                                                       name="exampleInputHam1" placeholder="Name of your hamster">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputGrocer1"></label>
                                                <input type="text" class="form-control" id="exampleInputGrocer1"
                                                       name="exampleInputGrocer1"
                                                       placeholder="Name of your grocery seller">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios2" value="option3" checked>
                                                    Option one is this and that&mdash;be sure to include why it's great
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios2" value="option4">
                                                    Option two can be something else and selecting it will deselect
                                                    option one
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="superPower"> I want have super-power
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="moreSuperPower"> I have one or more
                                                    super-power already
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <p>
                                        Even though using "lorem ipsum" often arouses curiosity due to its resemblance
                                        to classical Latin, it is not intended to have meaning. Where text is visible in
                                        a document, people tend to focus on the textual content rather than upon overall
                                        presentation, so publishers use lorem ipsum when displaying a typeface or design
                                        in order to direct the focus to presentation. "Lorem ipsum" also approximates a
                                        typical distribution of letters in English.
                                    </p>

                                    <p>
                                        Using "lorem ipsum" often arouses curiosity due to its resemblance to classical
                                        Latin, it is not intended to have meaning. Where text is visible in a document,
                                        people tend to focus on the textual content rather than upon overall
                                        presentation, so publishers use lorem ipsum when displaying a typeface or design
                                        in order to direct the focus to presentation. "Lorem ipsum" also approximates a
                                        typical distribution of letters in English.
                                    </p>
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
                    <p class="pull-left">© ajoke.cz/wizard 2015</p>
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
