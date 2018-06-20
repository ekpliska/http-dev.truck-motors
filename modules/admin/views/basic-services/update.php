<?php

    use yii\helpers\Html;
    use yii\widgets\Breadcrumbs;
    use yii\widgets\ActiveForm;
    use mihaildev\ckeditor\CKEditor;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Основные услуги';
$this->params['breadcrumbs'][] = ['label' => 'Основные услуги', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->basic_services_name, 'url' => ['view', 'id' => $model->basic_services_id]];
$this->params['breadcrumbs'][] = 'Редактирование услуги - ' . $model->basic_services_name;
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
        </div>
    </div>
</div>
                