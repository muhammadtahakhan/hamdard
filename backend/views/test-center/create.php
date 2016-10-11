<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TestCenter */

$this->title = Yii::t('app', 'Create Test Center');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Test Centers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-center-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
