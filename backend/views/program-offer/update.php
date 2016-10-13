<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ProgramOffer */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Program Offer',
]) . $model->offer_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Program Offers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->offer_id, 'url' => ['view', 'id' => $model->offer_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="program-offer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
