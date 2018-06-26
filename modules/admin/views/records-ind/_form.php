<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\widgets\MaskedInput;
?>

<div class="row cm-fix-height">
    <div class="col-sm-12">
        <div class="row">
            <?php
                $form = ActiveForm::begin([
                    'id' => 'rec-form',
                    'enableClientValidation' => true,
                    'enableAjaxValidation' => false,
                    'fieldConfig' => [
                        'template' => '{label}{input}{error}',
                    ],
                ])
            ?>
            
            <div class="col-sm-6 col-xs-12">
                
                <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                    <?= $form->field($model, 'records_fullName')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'records_phone')
                            ->widget(MaskedInput::className(), [
                                'mask' => '+7 (999) 999-99-99',
                                ])
                            ->textInput(['placeholder' => '+7 (___) ___-__-__'])
                    ?>
                    <?= $form->field($model, 'records_date')
                        ->widget(MaskedInput::className(), [
                            'mask' => '9999-99-99',
                            ])
                        ->textInput(['placeholder' => 'гггг-мм-дд'])
                        ->label();
                    ?>
                    <?= $form->field($model, 'records_time')
                        ->widget(MaskedInput::className(), [
                            'mask' => '99:99'
                        ])
                        ->textInput(['placeholder' => 'чч:мм'])
                        ->label()
                    ?>                    
                </div>
            </div>
            
            <div class="col-sm-6 col-xs-12">
                <?= $form->field($model, 'records_mark')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'records_model')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'records_year')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'records_number')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-12 col-xs-12">
                <?= $form->field($model, 'records_comments')->textarea(['rows' => 5]) ?>
            </div>
            
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="form-group">
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>                    
                </div>
    <?php ActiveForm::end(); ?>

</div>
