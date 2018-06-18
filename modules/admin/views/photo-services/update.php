<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\PhotoServices */

$this->title = 'Update Photo Services: ' . $model->photo_services_id;
$this->params['breadcrumbs'][] = ['label' => 'Photo Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->photo_services_id, 'url' => ['view', 'id' => $model->photo_services_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="photo-services-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
