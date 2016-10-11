<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BoardUniversity */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Board University',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Board Universities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="board-university-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
