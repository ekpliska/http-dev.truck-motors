<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\PhotoServices */

$this->title = $model->photo_services_id;
$this->params['breadcrumbs'][] = ['label' => 'Photo Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-services-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->photo_services_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->photo_services_id], [
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
            'photo_services_id',
            'photo_services_id_name',
            'photo_services_path',
        ],
    ]) ?>

</div>
