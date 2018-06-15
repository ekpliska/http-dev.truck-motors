<?php

    use yii\helpers\Html;
    use yii\widgets\DetailView;
    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Новости';
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Просмотр новости - ' . $model->news_name;
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
                    <?= Html::a('Редактировать', ['update', 'id' => $model->news_id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->news_id], [
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
                        'news_name',
                        [
                            'attribute'=>'news_image',
                            'value'=>$model->news_image,
                            'format' => ['image', ['height' => '100']],
                        ],
                        [
                            'attribute' => 'news_text',
                            'value' => $model->news_text,
                            'format' => 'raw',
			],
                        'news_author',
                        'news_date:date',
                        [
                            'attribute' => 'Статус',
                            'value' => $model->news_show ? Html::img('@web/images/sf/sign-check.svg', ['alt' => '']) : Html::img('@web/images/sf/sign-delete.svg', ['alt' => '']),
                            'format' => 'raw',
			],
                        'date_create:date',
                        'date_update:date',
                        'news_title',
                        'news_keywords',
                        'news_descriptions',
                    ],
                ]) ?>
                
            </div>
        </div>
    </div>
</div>
