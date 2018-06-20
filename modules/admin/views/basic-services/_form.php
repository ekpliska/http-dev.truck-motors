<?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use mihaildev\ckeditor\CKEditor;

?>

<div class="row cm-fix-height">
    <div class="col-sm-12">
        <div class="row">
            
            <?php
                $form = ActiveForm::begin([
                    'id' => 'service-form',
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
            
            <div class="col-sm-12 col-xs-12">
                <?= $form->field($model, 'basic_services_name')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-6 col-xs-12">
                <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                    <i class="fa fa-fw fa-info-circle"></i> Размер превью <strong>243 &times; 243</strong>                    
                    <?= $form->field($model, 'basic_services_preview')->fileInput() ?>                        
                </div>
            </div>

            <div class="col-sm-6 col-xs-12">
                <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                    <i class="fa fa-fw fa-info-circle"></i> Размер превью для эффекта :hover <strong>243 &times; 243</strong>                    
                    <?= $form->field($model, 'basic_services_preview_h')->fileInput() ?>
                </div>
            </div>
            
            <div class="col-sm-12 col-xs-12">                
                <?= $form->field($model, 'basic_services_text')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', 
                        'inline' => false, 
                    ],
                    ]); 
                ?>
            </div>
            
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>        
            </div>

        
        <?php ActiveForm::end(); ?>

</div>
