<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BoardUniversity */

$this->title = Yii::t('app', 'Create Board University');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Board Universities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="board-university-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
