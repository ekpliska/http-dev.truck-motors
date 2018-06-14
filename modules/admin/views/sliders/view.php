<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Sliders */

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Слайдер';
$this->params['breadcrumbs'][] = ['label' => 'Слайдер', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Просмотр слайдера - ' . $model->sliders_name;
?>


<div class="row cm-fix-height">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?= Breadcrumbs::widget([
                    'homeLink' => ['label' => 'Главная', 'url' => '/admin'],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])
                ?>

                <p>
                    <?= Html::a('Редактировать', ['update', 'id' => $model->sliders_id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->sliders_id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы действительно хотите удалить данный слайд?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'sliders_name',
                        'sliders_title',
                        'sliders_text',
                        'sliders_image',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>
