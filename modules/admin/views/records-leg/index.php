<?php

    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Заявки на сервис';
$this->params['breadcrumbs'][] = 'Заявки на сервис - Юридические лица';
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
                                'attribute' => 'records_date',
                                'value' => function ($data) { 
                                    return Yii::$app->formatter->asDate($data->records_date, 'dd-MM-YYYY')
                                            . '<br />' 
                                            . $data->records_time;
                                },
                                'format' => 'raw',
                            ],
                            [
                                'attribute' => 'rec_contact',
                                'value' => function ($data) { return $data->records_nameCompany . '<br />' . $data->records_phone; },                                
                                'format' => 'raw',
                            ],
                            [
                                'attribute' => 'rec_info',
                                'value' => function ($data){ 
                                    return $data->records_mark . '<br />' 
                                            . $data->records_model . '<br />'
                                            . $data->records_year . '<br />'
                                            . $data->records_number . '<br />';                                     
                                },
                                'format' => 'raw',
                                'headerOptions' => ['style' => 'width:30%'],        
                            ],
                            'records_comments',
//                            'records_check',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
                
            </div>
        </div>
    </div>
</div>

