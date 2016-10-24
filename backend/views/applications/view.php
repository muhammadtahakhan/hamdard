<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Applications */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Applications'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applications-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->application_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->application_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'application_id',
            'name',
            'nic',
            'dob',
            'email:email',
            'mobile',
            'phone',
            'nationality',
            'gender',
            'address',
            'country',
            'city',
            'f_name',
            'f_nic',
            'f_occupation',
            'f_email:email',
            'f_mobile',
            'f_phone',
            'f_nationality',
            'f_current_address',
            'f_country',
            'f_city',
            'campus',
            'test_center',
            'student_type',
            'f_income',
            'f_perminant_Address',
            'hostal_flag',
            'enable_flag',
            'last_updated_date',
            'last_updated_by',
            'creation_date',
            'created_by',
            'last_update_login',
            'print_id',
            'bpm_session',
        ],
    ]) ?>

</div>
