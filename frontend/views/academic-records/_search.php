<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AcademicRecordsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-records-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'academic_id') ?>

    <?= $form->field($model, 'application_id') ?>

    <?= $form->field($model, 'subject') ?>

    <?= $form->field($model, 'passing_year') ?>

    <?= $form->field($model, 'total_marks') ?>

    <?php // echo $form->field($model, 'marks_obtained') ?>

    <?php // echo $form->field($model, 'percentage') ?>

    <?php // echo $form->field($model, 'uni_board') ?>

    <?php // echo $form->field($model, 'attemps') ?>

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
