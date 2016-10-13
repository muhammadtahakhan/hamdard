<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TestCenters */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Test Centers',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Test Centers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->test_center_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="test-centers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
