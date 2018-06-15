<?php

    use yii\helpers\Html;
    use yii\widgets\Breadcrumbs;
    use yii\widgets\ActiveForm;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Поставищики';
$this->params['breadcrumbs'][] = ['label' => 'Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->brands_name, 'url' => ['view', 'id' => $model->brands_id]];
$this->params['breadcrumbs'][] = 'Редактирование записи - ' . $model->brands_name;
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
                    'id' => 'brand-form',
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

                    <?= $form->field($model, 'brands_name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'brands_descriptions')->textInput(['maxlength' => true]) ?>

                </div>

                <div class="col-sm-6 col-xs-12">

                    <?= $form->field($model, 'brands_image')->fileInput() ?>
                    
                    <div class="text-center">
                        <?php if ($model->brands_image) : ?>
                            <?= Html::img($model->brands_image, ['alt' => '', 'style' => 'height: 100px;']) ?>
                        <?php endif; ?>
                    </div>

                </div>

                <div class="col-sm-12 col-xs-12 text-center">
                    <div class="form-group">

                        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>

                    </div>
                </div>

            <?php ActiveForm::end(); ?>
                

                <?php /* = $this->render('_form', [
                    'model' => $data_model,
                ]) */ ?>
        
            </div>
        </div>
    </div>
</div>
