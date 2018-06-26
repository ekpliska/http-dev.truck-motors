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
                    'id' => 'menu-form',
                    'enableClientValidation' => true,
                    'enableAjaxValidation' => false,
                    'fieldConfig' => [
                        'template' => '{label}{input}{error}',
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
                
                <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                    <i class="fa fa-fw fa-info-circle"></i> Отображать пункт меню в хедере на сайте
                    <?= $form->field($model, 'menu_show')
                            ->checkbox()
                            ->label(false)
                    ?>
                </div>

                <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                    <i class="fa fa-fw fa-info-circle"></i> Отображать пункт меню в футере на сайте
                    <?= $form->field($model, 'menu_footer')
                            ->checkbox()
                            ->label(false)
                    ?>
                </div>
                        
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
