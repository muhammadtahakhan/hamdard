<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Applications */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applications-form">

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

    <?= $form->field($model, 'f_occupation')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'bpm_session')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
