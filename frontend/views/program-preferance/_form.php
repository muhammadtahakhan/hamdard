<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProgramPreferance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="program-preferance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'application_id')->textInput() ?>

    <?= $form->field($model, 'first_preferance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secend_preferance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'third_preferance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fourth_preferance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fifth_preferance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enable_flag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_update_date')->textInput() ?>

    <?= $form->field($model, 'last_updated_by')->textInput() ?>

    <?= $form->field($model, 'creation_date')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'last_update_login')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
