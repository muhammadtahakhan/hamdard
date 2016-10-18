<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BoardUniversitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Board Universities');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="board-university-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Board University'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'board_uni_id',
            'name',
            'slug',
            'enable_flag',
            'last_update_date',
            // 'last_updated_by',
            // 'creation_date',
            // 'created_by',
            // 'last_update_login',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
