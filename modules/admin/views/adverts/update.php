<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Adverts */

$this->title = 'Update Adverts: ' . $model->adverts_id;
$this->params['breadcrumbs'][] = ['label' => 'Adverts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->adverts_id, 'url' => ['view', 'id' => $model->adverts_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="adverts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
