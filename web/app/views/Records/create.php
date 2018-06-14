<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RecordsInd */

$this->title = 'Create Records Ind';
$this->params['breadcrumbs'][] = ['label' => 'Records Inds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="records-ind-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
