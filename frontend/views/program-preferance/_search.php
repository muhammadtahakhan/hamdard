<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProgramPreferanceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="program-preferance-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'application_id') ?>

    <?= $form->field($model, 'first_preferance') ?>

    <?= $form->field($model, 'secend_preferance') ?>

    <?= $form->field($model, 'third_preferance') ?>

    <?php // echo $form->field($model, 'fourth_preferance') ?>

    <?php // echo $form->field($model, 'fifth_preferance') ?>

    <?php // echo $form->field($model, 'enable_flag') ?>

    <?php // echo $form->field($model, 'last_update_date') ?>

    <?php // echo $form->field($model, 'last_updated_by') ?>

    <?php // echo $form->field($model, 'creation_date') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'last_update_login') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
