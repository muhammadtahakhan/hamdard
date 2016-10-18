<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AcademicRecordsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Academic Records');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-records-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Academic Records'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'academic_id',
            'application_id',
            'subject',
            'passing_year',
            'total_marks',
            // 'marks_obtained',
            // 'percentage',
            // 'uni_board',
            // 'attemps',
            // 'enable_flag',
            // 'last_update_date',
            // 'last_updated_by',
            // 'creation_date',
            // 'created_by',
            // 'last_update_login',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
