<?php
    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Меню сайта';

$this->params['breadcrumbs'][] = [
    'template' => "<li>{link}</li>\n", // шаблон для этой ссылки  
    'label' => 'Меню сайта', // название ссылки 
    'url' => ['menu/index'] // сама ссылка
];
$this->params['breadcrumbs'][] = 'Добавить пункт меню';
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

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
                
            </div>
        </div>
    </div>
</div>
