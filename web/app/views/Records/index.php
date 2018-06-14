<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Records Inds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="records-ind-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Records Ind', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'records_id',
            'records_townId',
            'records_fullName',
            'records_mark',
            'records_model',
            //'records_year',
            //'records_number',
            //'records_comments',
            //'records_date',
            //'records_check',
            //'records_phone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
