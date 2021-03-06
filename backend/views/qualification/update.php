<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Qualification */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Qualification',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Qualifications'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="qualification-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
