<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ProgramOffer */

$this->title = Yii::t('app', 'Create Program Offer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Program Offers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-offer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
         'programs'=>$programs,
         'sessions'=>$sessions
    ]) ?>

</div>
