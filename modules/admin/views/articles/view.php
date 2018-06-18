<?php

    use yii\helpers\Html;
    use yii\widgets\DetailView;
    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Статьи';
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Просмотр статьи - ' . $model->articles_name;
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
                    <?= Html::a('Редактировать', ['update', 'id' => $model->articles_id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->articles_id], [
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
                        
                        'articles_name',
                        [
                            'attribute'=>'articles_image',
                            'value'=>$model->articles_image,
                            'format' => ['image', ['height' => '100']],
                        ],
                        [
                            'attribute' => 'articles_text',
                            'value' => $model->articles_text,
                            'format' => 'raw',
			],
                        'articles_author',
                        'articles_date:date',
                        [
                            'attribute' => 'Статус',
                            'value' => $model->articles_show ? Html::img('@web/images/sf/sign-check.svg', ['alt' => '']) : Html::img('@web/images/sf/sign-delete.svg', ['alt' => '']),
                            'format' => 'raw',
			],
                        'date_create:date',
                        'date_update:date',
                        'articles_title',
                        'articles_keywords',
                        'articles_descriptions',
                        'slug',
                    ],
                ]) ?>

                
            </div>
        </div>
    </div>
</div>                
