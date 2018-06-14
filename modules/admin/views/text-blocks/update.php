<?php

    use yii\helpers\Html;
    use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Sliders */

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Текстовые блоки';
$this->params['breadcrumbs'][] = ['label' => 'Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->text_blocks_name, 'url' => ['view', 'id' => $model->text_blocks_id]];
$this->params['breadcrumbs'][] = 'Редактирование блока - ' . $model->text_blocks_name;
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
