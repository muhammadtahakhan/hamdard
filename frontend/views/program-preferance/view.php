<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProgramPreferance */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Program Preferances'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-preferance-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'application_id',
            'first_preferance',
            'secend_preferance',
            'third_preferance',
            'fourth_preferance',
            'fifth_preferance',
            'enable_flag',
            'last_update_date',
            'last_updated_by',
            'creation_date',
            'created_by',
            'last_update_login',
        ],
    ]) ?>

</div>
