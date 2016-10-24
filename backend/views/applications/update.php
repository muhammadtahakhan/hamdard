<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Applications */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Applications',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Applications'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->application_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="applications-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
