<?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use mihaildev\ckeditor\CKEditor;
    use yii\widgets\MaskedInput;

?>
<div class="row cm-fix-height">
    <div class="col-sm-12">
        <div class="row">
            <?php
                $form = ActiveForm::begin([
                    'id' => 'articles-form',
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
                <?= $form->field($model, 'articles_name')->textInput(['maxlength' => true]) ?>                
            </div> 

            <div class="col-sm-6 col-xs-12">
                
                <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                <?= $form->field($model, 'articles_date')
                        ->widget(MaskedInput::className(), [
                            'mask' => '9999-99-99',
                            ])
                        ->textInput(['placeholder' => 'гггг-мм-дд'])
                        ->label();
                ?>
                    <i class="fa fa-fw fa-info-circle"></i> Формат: Год - месяц - число
                </div>
                
            </div>             
                
            <div class="col-sm-12 col-xs-12">                
                <?= $form->field($model, 'articles_text')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', 
                        'inline' => false, 
                    ],
                    ]); 
                ?>
            </div>

            
            <div class="col-sm-6 col-xs-12">
                <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                <?= $form->field($model, 'articles_image')->fileInput(['id' => 'imgInput'])->label() ?>
                    <i class="fa fa-fw fa-info-circle"></i> Размер превью для статьи <strong>510 &times; 470</strong>
                </div> 
            </div>            
            
            <div class="col-sm-6 col-xs-12">
                <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                    <?= $form->field($model, 'articles_show')
                        ->checkbox(['checked ' => true])
                        ->label(false) 
                    ?>
                    <i class="fa fa-fw fa-info-circle"></i> Показывать статью на сайте
                </div>
                <?= $form->field($model, 'articles_author')
                        ->textInput([
                            'readOnly' => true, 
                            'maxlength' => true,
                            'value' => Yii::$app->user->identity['users_fullname'],
                            ]) 
                ?>
            </div>
           
            
            <div class="col-sm-12 col-xs-12">
                <?= $form->field($model, 'articles_title')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'articles_keywords')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'articles_descriptions')->textInput(['maxlength' => true]) ?>
            </div>
                        
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
            
        </div>
    </div>        
</div>