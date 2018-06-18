<?php

    use yii\helpers\Html;
    use yii\widgets\Breadcrumbs;
    use yii\widgets\ActiveForm;
    use mihaildev\ckeditor\CKEditor;
    use yii\widgets\MaskedInput;    

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Статьи';
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->articles_name, 'url' => ['view', 'id' => $model->articles_id]];
$this->params['breadcrumbs'][] = 'Редактирование статьи - ' . $model->articles_name;
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
                            'preset' => 'standard', 
                            'inline' => false, 
                        ],
                        ]); 
                    ?>
                </div>


                <div class="col-sm-6 col-xs-12">
                    <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                    <?= $form->field($model, 'articles_image')->fileInput(['id' => 'imgInput'])->label() ?>
                        <i class="fa fa-fw fa-info-circle"></i> Размер превью для новости <strong>510 &times; 470</strong>                   
                        <div class="text-center">
                            <?php if ($model->articles_image) : ?>
                                <?= Html::img($model->articles_image, ['alt' => '', 'style' => 'height: 100px;']) ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>            

                <div class="col-sm-6 col-xs-12">
                    <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                        <?= $form->field($model, 'articles_show')
                            ->checkbox(['checked ' => true])
                            ->label(false) 
                        ?>
                        <i class="fa fa-fw fa-info-circle"></i> Выводить новость на сайте
                    </div>
                    <?= $form->field($model, 'articles_author')->textInput(['readOnly' => true]) ?>
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
</div>                