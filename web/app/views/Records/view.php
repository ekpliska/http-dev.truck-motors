<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RecordsInd */

$this->title = $model->records_id;
$this->params['breadcrumbs'][] = ['label' => 'Records Inds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="records-ind-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->records_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->records_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'records_id',
            'records_townId',
            'records_fullName',
            'records_mark',
            'records_model',
            'records_year',
            'records_number',
            'records_comments',
            'records_date',
            'records_check',
            'records_phone',
        ],
    ]) ?>

</div>
