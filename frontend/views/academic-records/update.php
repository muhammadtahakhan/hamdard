<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AcademicRecords */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Academic Records',
]) . $model->academic_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Academic Records'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->academic_id, 'url' => ['view', 'id' => $model->academic_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="academic-records-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
