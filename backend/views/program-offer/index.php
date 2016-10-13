<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProgramOfferSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Program Offers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-offer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Program Offer'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'offer_id',
            'program_id',
            'session_id',
            'from_date',
            'to_date',
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
