<?php

    use yii\helpers\Html;
    use yii\widgets\DetailView;
    use app\helpers\Helper;
    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Меню сайта';

$this->params['breadcrumbs'][] = [
    'template' => "<li>{link}</li>\n", // шаблон для этой ссылки  
    'label' => 'Меню сайта', // название ссылки 
    'url' => ['menu/index'] // сама ссылка
];
$this->params['breadcrumbs'][] = 'Просмотр пункта меню - ' . $model->menu_name;

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
                    <?= Html::a('Редактировать', ['update', 'id' => $model->menu_id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->menu_id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы действительно хотите удалить данный пункт меню?',
                            'method' => 'post',
                        ],]) 
                    ?>
                </p>
                
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'menu_name',
                        [
                            'attribute' => 'menu_parent',
                            'value' => Helper::getNameParent($model->menu_parent, $model->menu_name),
                        ],
                        'menu_alias',
                        'menu_titile',
                        'menu_description',
                        'menu_keywords',
                        [
                            'attribute' => 'status',
                            'value' => $model->menu_show ? Html::img('@web/images/sf/sign-check.svg', ['alt' => '']) : Html::img('@web/images/sf/sign-delete.svg', ['alt' => '']),
                            'format' => 'raw',
			], 
                        [
                            'attribute' => 'menu_footer',
                            'value' => $model->menu_footer ? 'Не отображать' : 'Отображать',
                        ]
                    ],]) 
                ?>
            </div>
        </div>
    </div>
</div>