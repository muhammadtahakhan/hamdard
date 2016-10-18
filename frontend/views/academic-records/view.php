<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\AcademicRecords */

$this->title = $model->academic_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Academic Records'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-records-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->academic_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->academic_id], [
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
            'academic_id',
            'application_id',
            'subject',
            'passing_year',
            'total_marks',
            'marks_obtained',
            'percentage',
            'uni_board',
            'attemps',
            'enable_flag',
            'last_update_date',
            'last_updated_by',
            'creation_date',
            'created_by',
            'last_update_login',
        ],
    ]) ?>

</div>
