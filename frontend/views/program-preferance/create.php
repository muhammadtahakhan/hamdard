<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ProgramPreferance */

$this->title = Yii::t('app', 'Create Program Preferance');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Program Preferances'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-preferance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
