<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\Breadcrumbs;
/* 
 * Новости
 */
$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Меню сайта';
$this->params['breadcrumbs'][] = 'Меню сайта';    
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
                    'tableOptions' => [
                        'class' => 'table table-striped table-bordered',
                        'contentOptions' => ['style' => 'max-width: 20px;'],
                    ],
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                            'attribute' => 'menu_show',
                            'value' => function ($data) {
                                return $data->menu_show ? Html::img('@web/images/sf/sign-check.svg', ['alt' => '', 'style' => 'height: 20px;']) : Html::img('@web/images/sf/sign-delete.svg', ['alt' => '', 'style' => 'height: 20px;']);
                            },
                            'format' => 'raw',
                            'headerOptions' => ['style' => 'width:10%'],
                        ],
                        'menu_name',
                        'menu_alias',
                        ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]);
                ?>                

            </div>
        </div>
    </div>
</div>