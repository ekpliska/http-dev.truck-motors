<?php

    use yii\helpers\Html;
    use yii\widgets\DetailView;
    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Основные услуги';
$this->params['breadcrumbs'][] = ['label' => 'Основные услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Просмотр услуги - ' . $model->basic_services_name;
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
                    <?= Html::a('Редактировать', ['update', 'id' => $model->basic_services_id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->basic_services_id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы действительно хотите удалить данную услугу?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'basic_services_name',
                        [
                            'attribute' => 'basic_services_text',
                            'value' => $model->basic_services_text,
                            'format' => 'raw',
			],
                        [
                            'attribute' => 'basic_services_preview',
                            'value' => $model->basic_services_preview,
                            'format' => ['image', ['height' => '100']],
                        ],
                        [
                            'attribute' => 'basic_services_preview_h',
                            'value' => $model->basic_services_preview_h,
                            'format' => ['image', ['height' => '100']],
                        ],
                        'basic_services_text',
                        'slug',
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</div>
