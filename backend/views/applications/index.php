<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ApplicationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Applications');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applications-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Applications'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'application_id',
            'name',
            'nic',
            'dob',
            'email:email',
            // 'mobile',
            // 'phone',
            // 'nationality',
            // 'gender',
            // 'address',
            // 'country',
            // 'city',
            // 'f_name',
            // 'f_nic',
            // 'f_occupation',
            // 'f_email:email',
            // 'f_mobile',
            // 'f_phone',
            // 'f_nationality',
            // 'f_current_address',
            // 'f_country',
            // 'f_city',
            // 'campus',
            // 'test_center',
            // 'student_type',
            // 'f_income',
            // 'f_perminant_Address',
            // 'hostal_flag',
            // 'enable_flag',
            // 'last_updated_date',
            // 'last_updated_by',
            // 'creation_date',
            // 'created_by',
            // 'last_update_login',
            // 'print_id',
            // 'bpm_session',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
