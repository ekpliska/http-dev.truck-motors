<?php
    use yii\bootstrap\ActiveForm;
    use yii\widgets\Breadcrumbs;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\widgets\MaskedInput;
    use yii\captcha\Captcha;
    use yii\web\View;
    use kartik\date\DatePicker;
    use kartik\time\TimePicker;
    use app\widgets\Info;

$this->title = Yii::$app->params['site_title'] . ' ' . 'Запись на СТО'; 
$this->params['breadcrumbs'][] = [
    'template' => "<li>{link}</li>\n", // шаблон для этой ссылки  
    'label' => 'Сервис', // название ссылки 
    'url' => ['site/service'] // сама ссылка
];
$this->params['breadcrumbs'][] = ['label' => 'Запись на СТО', 'url' => ['site/service']];
$this->params['breadcrumbs'][] = 'Физическое лицо';

/* 
 * Форма - Запись на СТО (Физическое лицо)
 */
?>
<section class="form-page">
    <div class="container">
        <h3>Физическое лицо</h3>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
        ?>
         
        <div class="row">
            <?php if (Yii::$app->session->hasFlash('success')) : ?>
                <div class="alert alert-info" role="alert">
                    <strong>
                        <?= Yii::$app->session->getFlash('success', false); ?>
                    </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>                
            <?php endif; ?>

            <?php if (Yii::$app->session->hasFlash('error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <strong>
                        <?= Yii::$app->session->getFlash('error', false); ?>
                    </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                     
                </div>                
            <?php endif; ?>
            
            <?php
                $form = ActiveForm::begin([
                    'id' => 'record-ind',
                    'enableClientValidation' => true,
                    'enableAjaxValidation' => false,
                    'fieldConfig' => [
                        'template' => '{input}{error}',
                    ],
                    'options' => [
                        'class' => 'fp__form'
                    ],
                    ])
            ?>
            <div class="col-sm-6 col-xs-12">

                <?php /* = $form->field($model, 'records_townId')
                        ->dropDownList(ArrayHelper::map(Towns::find()->all(), 'towns_id', 'towns_name'),
                        ['prompt' => 'Выбрать город из списка...'])
                */ ?>
                
                <?= $form->field($model, 'records_fullName')->input('text', ['placeholder' => $model->getAttributeLabel('records_fullName')])->label(false); ?>
                
                <?= $form->field($model, 'records_phone')
                        ->widget(MaskedInput::className(), [
                            'mask' => '+7 (999) 999-99-99',
                            ])
                        ->textInput(['placeholder' => $model->getAttributeLabel('records_phone')])
                        ->label(false);
                ?>

                <?= $form->field($model, 'records_mark')->input('text', ['placeholder' => $model->getAttributeLabel('records_mark')])->label(false); ?>
                
                <?= $form->field($model, 'records_model')->input('text', ['placeholder' => $model->getAttributeLabel('records_model')])->label(false); ?>
                
                <?= $form->field($model, 'records_year')->input('text', ['placeholder' => $model->getAttributeLabel('records_year')])->label(false); ?>
                
            </div>
            
            <div class="col-sm-6 col-xs-12">
                
                <?= $form->field($model, 'records_number')->input('text', ['placeholder' => $model->getAttributeLabel('records_number')])->label(false); ?>
                
                <?= $form->field($model, 'records_comments')->textarea(['placeholder' => $model->getAttributeLabel('records_comments')])->label(false); ?>
                
                <?=
                    $form->field($model, 'records_date')
                        ->widget(DatePicker::className(), [
                            'language' => 'ru',
                            'name' => 'date_rec',
                            'type' => DatePicker::TYPE_INPUT,
                            'value' => date('yyyy-mm-dd'),
                            'options' => ['placeholder' => 'Дата'],
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'autoclose' => true,
                                'todayHighlight' => true,
                            ]
                        ])
                ?>
                
                <?=
                    $form->field($model, 'records_time')
                        ->widget(TimePicker::className(), [
                            'language' => 'ru',
                            'size' => 'md',
                            'name' => 'time_rec',
                            'value' => date('H:i'),
                            'addonOptions' => [
                                'asButton' => true,
                                'buttonOptions' => ['class' => 'btn btn-info'],
                            ],
                            'pluginOptions' => [
                                'format' => 'H:i',
                                'minuteStep' => 5,
                                'showMeridian' => false,
                                'showSeconds' => false,
                            ]                            
                        ])
                ?>
            </div>
            
            <div class="col-sm-12 col-xs-12 text-center">
                <?= $form->field($model, 'verifyCode')
                        ->widget(Captcha::className(), [
                            'template' => '<div class="row">'
                                . '<div class="col-lg-6 col-sm-6 col-xs-6 text-right">'
                                    . '{image}' . Html::button('<i class="fa fa-refresh" aria-hidden="true"></i>', ['id' => 'refresh-captcha'])
                                . '</div>'
                                . '<div class="col-lg-3 col-sm-3 col-xs-4">{input}</div></div>',
                            'imageOptions' => [
                                'id' => 'my-captcha-image',
                            ],
                        ]) 
                ?>
            </div>

            <?php $this->registerJs("
                $('#refresh-captcha').on('click', function(e){
                    e.preventDefault();
                    $('#my-captcha-image').yiiCaptcha('refresh');
                })
            "); ?>            
            
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="form-group">
                    <?= $form->field($model, 'records_check')
                        ->checkbox([
                            'uncheck' => false,
                            'value' => '1',
                            ])
                        ->label('Соглашаюсь на обработку персональных данных ' . 
                                Html::beginTag('a', ['href' => Url::to(['site/privacy-policy']), 'target' => '_blank']) . 
                                 'Ознакомиться с политикой конфиденциальности' .
                                Html::endTag('a')                                
                                )
                    ?>
                </div>                
            </div>
            
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="form-group">
                    <?=
                        Html::submitButton('Отправить', [
                            'class' => 'fp__submit btn',
                        ]);
                    ?>
                 </div>
            </div>
            
            <?php ActiveForm::end(); ?>
        </div>

        <?= Info::widget(['alias_block' => 'schedule_block']) ?> 
        
    </div>
    
</section>