<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Adverts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adverts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'adverts_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adverts_image')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
