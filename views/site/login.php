<?php
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['site_title'] . ' ' . 'Вход';
$this->params['breadcrumbs'][] = 'Вход';
?>
<section class="form-page">
    <div class="container">
        <h3>Вход</h3><br>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
            ?>          
        <div class="row">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                'options' => [
                    'class' => 'fp__form'
                    ],
                ]); 
            ?>

            <?= $form->field($model, 'username')->textInput() ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>            
            
        </div>
    </div>
</section>
