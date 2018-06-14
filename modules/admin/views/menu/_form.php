<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use app\modules\admin\models\Menu;

/*
 *  Форма для страниц Создания/Редактирования Меню
 */    
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
                        
                <?= $form->field($model, 'menu_name')->input('text', ['placeholder' => $model->getAttributeLabel('menu_name')])->label() ?>

                <?= $form->field($model, 'menu_parent')
                        ->dropDownList(ArrayHelper::map(Menu::find()->all(), 'menu_id', 'menu_name'))
                ?>

                <?= $form->field($model, 'menu_alias')->input('text', ['placeholder' => $model->getAttributeLabel('menu_alias')])->label() ?>
                        
                <?= $form->field($model, 'menu_titile')->input('text', ['placeholder' => $model->getAttributeLabel('menu_titile')])->label() ?>
                        
            </div>
            
            <div class="col-sm-6 col-xs-12">
                        
                <?= $form->field($model, 'menu_keywords')->input('text', ['placeholder' => $model->getAttributeLabel('menu_keywords')])->label() ?>
                
                <?= $form->field($model, 'menu_description')->textarea(['rows' => '5', 'maxlength' => true]) ?>
                        
                <?= $form->field($model, 'menu_show')
                        ->checkbox([
                            'uncheck' => false,
                            'value' => '1',
                        ])
                        ->label(false)
                ?>

                <?= $form->field($model, 'menu_footer')
                        ->checkbox([
                            'uncheck' => false,
                            'value' => '1',
                        ])
                        ->label(false)
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
