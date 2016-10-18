<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Programs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?php // echo $form->field($model, 'enable_flag')->textInput(['maxlength' => true]) ?>

     <?php // echo $form->field($model, 'last_update_date')->textInput() ?>

     <?php // echo $form->field($model, 'last_update_by')->textInput() ?>

     <?php // echo $form->field($model, 'creation_date')->textInput() ?>

     <?php // echo $form->field($model, 'created_by')->textInput() ?>

    <?php // echo $form->field($model, 'lase_update_login')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
