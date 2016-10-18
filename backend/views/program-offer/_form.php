<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\ProgramOffer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="program-offer-form">

    <?php $form = ActiveForm::begin(); ?>

   

     <?= $form->field($model, 'session_id')->dropDownList($sessions, ['prompt'=>'Choose...']);  ?>
    
       <!--// Multiple select without model-->
    <label>Select programs </label>
        <?=  $form->field($model, 'program_id[]')->widget(Select2::classname(), [
//    'initValueText' => [1],
    'data' => $programs,
    'language' => 'de',
    'options' => ['multiple' => true, 'value'=>1, 'placeholder' => 'Select a state ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]); ?>

     <?= $form->field($model, 'year')->widget(\yii\jui\DatePicker::classname(), [
    //'language' => 'ru',
    'dateFormat' => 'yyyy',
]) ?>

   <?= $form->field($model, 'from_date')->widget(\yii\jui\DatePicker::classname(), [
    //'language' => 'ru',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>
    
     <?= $form->field($model, 'to_date')->widget(\yii\jui\DatePicker::classname(), [
    //'language' => 'ru',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
