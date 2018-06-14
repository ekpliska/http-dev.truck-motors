<?php

    use yii\helpers\Html;
    use yii\widgets\DetailView;
    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Поставищики';
$this->params['breadcrumbs'][] = ['label' => 'Поставищики', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Просмотр блока - ' . $model->brands_name;
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
                    <?= Html::a('Редактировать', ['update', 'id' => $model->brands_id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->brands_id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы действительно хотите удалить данного поставщика?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'brands_name',
                        'brands_descriptions',
                        [
                            'attribute'=>'brands_image',
                            'value'=>$model->brands_image,
                            'format' => ['image', ['height' => '100']],
                        ],
                    ],
                ]) ?>
            
            </div>
        </div>
    </div>
</div>