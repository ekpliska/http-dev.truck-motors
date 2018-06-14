<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RecordsInd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="records-ind-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'records_id')->textInput() ?>

    <?= $form->field($model, 'records_townId')->textInput() ?>

    <?= $form->field($model, 'records_fullName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'records_mark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'records_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'records_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'records_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'records_comments')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'records_date')->textInput() ?>

    <?= $form->field($model, 'records_check')->textInput() ?>

    <?= $form->field($model, 'records_phone')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
