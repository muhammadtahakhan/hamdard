<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ProgramOffer */

$this->title = $model->offer_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Program Offers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-offer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->offer_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->offer_id], [
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
            'offer_id',
            'program_id',
            'session_id',
            'year',
            'from_date',
            'to_date',
            'enable_flag',
            'last_update_date',
            'last_updated_by',
            'creation_date',
            'created_by',
            'last_update_login',
        ],
    ]) ?>

</div>
