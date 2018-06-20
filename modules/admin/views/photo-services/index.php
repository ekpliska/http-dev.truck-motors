<?php

    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Фото галерея';
$this->params['breadcrumbs'][] = 'Фото галерея';
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
                    <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        [
                            'attribute' => 'photo_services_id_name',
                            'value' => $model->basicServices->basic_services_name,
                        ],

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
                
            </div>
        </div>
    </div>
</div>
