<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TestCentersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Test Centers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-centers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Test Centers'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'test_center_id',
            'name',
            'locaion',
//            'enable_flag',
//            'last_update_date',
            // 'last_updated_by',
            // 'creation_date',
            // 'created_by',
            // 'last_update_login',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
