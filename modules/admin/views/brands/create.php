<?php

    use yii\helpers\Html;
    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Поставщики';

$this->params['breadcrumbs'][] = ['label' => 'Поставщики', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Добавить поставщика';


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
