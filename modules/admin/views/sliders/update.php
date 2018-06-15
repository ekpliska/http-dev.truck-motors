<?php

    use yii\helpers\Html;
    use yii\widgets\Breadcrumbs;
    use yii\widgets\ActiveForm;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Слайдер';
$this->params['breadcrumbs'][] = ['label' => 'Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sliders_name, 'url' => ['view', 'id' => $model->sliders_id]];
$this->params['breadcrumbs'][] = 'Редактирование слайдера - ' . $model->sliders_name;
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

                <?php
                    $form = ActiveForm::begin([
                        'id' => 'slider-form',
                        'enableClientValidation' => true,
                        'enableAjaxValidation' => false,
                        'fieldConfig' => [
                            'template' => '{label}{input}{error}',
                        ],
                        'options' => [
                            'enctype' => 'multipart/form-data'
                        ],
                    ])
                ?>
            
                <div class="col-sm-6 col-xs-12">

                    <?= $form->field($model, 'sliders_name')->input('text', ['placeholder' => $model->getAttributeLabel('sliders_name')])->label() ?>

                    <?= $form->field($model, 'sliders_title')->input('text', ['placeholder' => $model->getAttributeLabel('sliders_title')])->label() ?>

                    <?= $form->field($model, 'sliders_text')->input('text', ['placeholder' => $model->getAttributeLabel('sliders_text')])->label() ?>

                </div>

                <div class="col-sm-6 col-xs-12">

                    <?= $form->field($model, 'sliders_image')->fileInput()->label() ?>
                    
                    <?= $form->field($model, 'sliders_show')->checkbox()->label(false) ?>

                </div>

                <div class="col-sm-12 col-xs-12 text-center">
                    <div class="form-group">
                        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>
        
            </div>
        </div>
    </div>
</div>
