<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
/* 
 * Галерея фотографий к основным услугам
 */
    
?>

<?php if (isset($images)) : ?>
<div class="row">
    <div class="list-group gallery">
        <?php foreach ($images as $image) : ?>
            <div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
                <a class="thumbnail fancybox" rel="ligthbox" href="<?= Url::to(['images/upload/store/' . $image->filePath]) ?>">
                    <?= Html::img('@web/images/upload/store/' . $image->filePath, ['alt' => '', 'calss' => 'img-responsive']) ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>

<?php
$js = <<<JS
$(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });        
JS;
$this->registerJs($js, yii\web\View::POS_READY);
?>