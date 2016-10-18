<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TestCenters */

$this->title = Yii::t('app', 'Create Test Centers');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Test Centers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-centers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
