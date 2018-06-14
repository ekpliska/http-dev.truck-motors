<?php
    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Слайдер';

$this->params['breadcrumbs'][] = ['label' => 'Слайдер', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Добавить слайдер';
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
