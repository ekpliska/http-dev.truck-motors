<?php

    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Слайдер';
$this->params['breadcrumbs'][] = 'Слайдер';
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
                        [
                            'class' => 'yii\grid\SerialColumn',
                        ],

                        [
                            'attribute' => 'sliders_show',
                            'value' => function ($data) {
                                return $data->sliders_show ? Html::img('@web/images/sf/sign-check.svg', ['alt' => '', 'style' => 'height: 20px;']) : Html::img('@web/images/sf/sign-delete.svg', ['alt' => '', 'style' => 'height: 20px;']);
                            },
                            'format' => 'raw',
                            'headerOptions' => ['style' => 'width: 10%;'],
                        ],
                        'sliders_name',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>

            </div>
        </div>
    </div>
</div>