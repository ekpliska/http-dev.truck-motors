<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\Breadcrumbs;
/* 
 * Основные услуги
 */
$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Основные услуги';
$this->params['breadcrumbs'][] = 'Основные услуги';    
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

                        'basic_services_name',
                        [
                            'attribute'=>'basic_services_preview',
                            'value'=>$model->basic_services_preview,
                            'format' => ['image', ['height' => '50']],
                        ],

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>

            </div>
        </div>
    </div>
</div>
