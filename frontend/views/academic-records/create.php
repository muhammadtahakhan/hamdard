<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\AcademicRecords */

$this->title = Yii::t('app', 'Create Academic Records');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Academic Records'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-records-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
