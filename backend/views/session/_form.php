<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Session */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="session-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php // echo $form->field($model, 'year')->textInput() ?>
    <?= $form->field($model, 'year')->widget(\yii\jui\DatePicker::classname(), [
    //'language' => 'ru',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>

  <?php // ec $form->field($model, 'enable_flag')->textInput(['maxlength' => true]) ?>

    <?php // ec $form->field($model, 'last_update_date')->textInput() ?>

    <?php // ec $form->field($model, 'last_updated_by')->textInput() ?>

    <?php // ec $form->field($model, 'creation_date')->textInput() ?>

   <?php // ec $form->field($model, 'created_by')->textInput() ?>

    <?php // ec $form->field($model, 'last_update_login')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
