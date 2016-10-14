<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ApplicationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applications-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'application_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'nic') ?>

    <?= $form->field($model, 'dob') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'f_name') ?>

    <?php // echo $form->field($model, 'f_nic') ?>

    <?php // echo $form->field($model, 'f_dob') ?>

    <?php // echo $form->field($model, 'f_email') ?>

    <?php // echo $form->field($model, 'f_mobile') ?>

    <?php // echo $form->field($model, 'f_phone') ?>

    <?php // echo $form->field($model, 'f_nationality') ?>

    <?php // echo $form->field($model, 'f_current_address') ?>

    <?php // echo $form->field($model, 'f_country') ?>

    <?php // echo $form->field($model, 'f_city') ?>

    <?php // echo $form->field($model, 'campus') ?>

    <?php // echo $form->field($model, 'test_center') ?>

    <?php // echo $form->field($model, 'student_type') ?>

    <?php // echo $form->field($model, 'f_income') ?>

    <?php // echo $form->field($model, 'f_perminant_Address') ?>

    <?php // echo $form->field($model, 'hostal_flag') ?>

    <?php // echo $form->field($model, 'enable_flag') ?>

    <?php // echo $form->field($model, 'last_updated_date') ?>

    <?php // echo $form->field($model, 'last_updated_by') ?>

    <?php // echo $form->field($model, 'creation_date') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'last_update_login') ?>

    <?php // echo $form->field($model, 'print_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
