<?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Brands */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row cm-fix-height">
    <div class="col-sm-12">
        <div class="row">
            
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
