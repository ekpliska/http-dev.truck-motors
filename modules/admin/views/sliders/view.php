<?php

    use yii\helpers\Html;
    use yii\widgets\DetailView;
    use yii\widgets\Breadcrumbs;

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
                        [
                            'attribute'=>'sliders_image',
                            'value'=>$model->sliders_image,
                            'format' => ['image', ['height' => '100']],
                        ],
                        [
                            'attribute' => 'Статус',
                            'value' => $model->sliders_show ? Html::img('@web/images/sf/sign-check.svg', ['alt' => '']) : Html::img('@web/images/sf/sign-delete.svg', ['alt' => '']),
                            'format' => 'raw',
			],
                        [
                            'attribute' => 'Тип слайдера',
                            'value' => function ($data) {
                                return $data->sliders_adverts ? '<span style="padding: 3px; font-size: 12px;" class="btn-danger">Реклама</span>' : '<span style="padding: 3px; font-size: 12px;" class="btn-primary">На сайте</span>';
                            },
                            'format' => 'raw',
                        ],
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>
