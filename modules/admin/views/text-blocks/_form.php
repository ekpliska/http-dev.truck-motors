<?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TextBlocks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row cm-fix-height">
    <div class="col-sm-12">
        <div class="row">

            <?php
                $form = ActiveForm::begin([
                    'id' => 'record-ind',
                    'enableClientValidation' => true,
                    'enableAjaxValidation' => false,
                    'fieldConfig' => [
                        'template' => '{label}{input}{error}',
                    ],
                ])
            ?>
            
            <div class="col-sm-6 col-xs-12">
                <?= $form->field($model, 'text_blocks_name')->textInput(['maxlength' => true]) ?>
            </div>

                        
            <div class="col-sm-6 col-xs-12">
                <?= $form->field($model, 'text_block_alias')->textInput(['maxlength' => true]) ?>
            </div>
            
            <div class="col-sm-12 col-xs-12 text-left">
                <?= $form->field($model, 'text_blocks_text')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'standard', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                    ],
                    ]); 
                ?>
                
            </div>
            
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="form-group">

                    <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>        
</div>
