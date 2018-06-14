<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RecordsInd */

$this->title = 'Update Records Ind: ' . $model->records_id;
$this->params['breadcrumbs'][] = ['label' => 'Records Inds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->records_id, 'url' => ['view', 'id' => $model->records_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="records-ind-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
