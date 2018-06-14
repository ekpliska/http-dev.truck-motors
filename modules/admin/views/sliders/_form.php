<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Sliders */
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
                        'template' => '{label}{input}',
                    ],
                ])
            ?>
            
            <div class="col-sm-6 col-xs-12">
                
                <?= $form->field($model, 'sliders_name')->input('text', ['placeholder' => $model->getAttributeLabel('sliders_name')])->label() ?>
                
                <?= $form->field($model, 'sliders_title')->input('text', ['placeholder' => $model->getAttributeLabel('sliders_title')])->label() ?>
                
                <?= $form->field($model, 'sliders_text')->input('text', ['placeholder' => $model->getAttributeLabel('sliders_text')])->label() ?>
                
            </div>

            <div class="col-sm-6 col-xs-12">
                
                <?= $form->field($model, 'sliders_image')->input('text', ['placeholder' => $model->getAttributeLabel('sliders_image')])->label() ?>
                
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
