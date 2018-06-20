<?php

    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use app\modules\admin\models\BasicServices;

?>
<div class="row cm-fix-height">
    <div class="col-sm-12">
        <div class="row">
            <?php
                $form = ActiveForm::begin([
                    'id' => 'photo-form',
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
                <?= $form->field($model, 'photo_services_id_name')
                        ->dropDownList(ArrayHelper::map(BasicServices::find()->orderBy('basic_services_name asc')->all(),
                                'basic_services_id', 'basic_services_name'),
                                ['prompt' => 'Выберите услугу из списка'])
                ?>
                <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                    <i class="fa fa-fw fa-info-circle"></i> Выбрать услугу, к которой загружать фотографии для галереи
                </div>                
            </div>

            <div class="col-sm-6 col-xs-12">
                <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                    <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
                    <i class="fa fa-fw fa-info-circle"></i> Размер фотографии <strong></strong>
                </div> 
            </div>
            
            <?php $images = $model->getImages(); ?>  
            <?php if (isset($images)) : ?>
                <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                        <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                            <i class="fa fa-fw fa-info-circle"></i> Прикрепленные фотографии к услуге <strong></strong>
                        </div>
                        <div class="row">
                            <?php foreach ($images as $image) : ?>
                                <div class="col-md-3">
                                    <?= Html::img('@web/images/upload/store/' . $image->filePath, ['alt' => '', 'width' => '100']) ?>
                                </div>                            
                            <?php endforeach; ?>
                        </div>                        
                    </div>
                        
                    
                </div>
            <?php endif; ?>

            <div class="col-sm-12 col-xs-12 text-center">
                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>        
</div>
