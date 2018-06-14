<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\Breadcrumbs;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
                    ],
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                            'attribute' => 'menu_show',
                            'value' => function ($data) {
                                return $data->menu_show ? Html::img('@web/images/sf/sign-check.svg', ['alt' => '']) : Html::img('@web/images/sf/sign-delete.svg', ['alt' => '']);
                            },
                            'format' => 'raw',
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