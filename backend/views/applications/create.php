<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Applications */

$this->title = Yii::t('app', 'Create Applications');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Applications'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applications-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
