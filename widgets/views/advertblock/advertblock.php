<?php
    use yii\helpers\Html;
/**
 *  Формирование слайдера с рекламой
 */
$first_slider = 0;    
?>

<div class="col-sm-4 why__left_block">
    <p><span class="check_line"><b>/</b></span> Наличие специнструмента</p>
    <p><span class="check_line"><b>/</b></span> 1200 М2 ремонтная зона</p>
    <p><span class="check_line"><b>/</b></span> Удобное метоположение</p>
    <p><span class="check_line"><b>/</b></span> Магазин запчастей</p>
</div>
<div class="col-sm-8">
    <?php if (isset($sliders_advert)) : ?>
        <div class="carousel slide media-carousel" id="media">
            <div class="carousel-inner">
                <?php foreach ($sliders_advert as $slide) : ?>
                    <?php $first_slider++; ?>
                    <div class="<?= $first_slider == 1 ? 'item active' : 'item' ?>">
                        <div class="row">
                            <div class="col-md-3">
                                <?= Html::img($slide->sliders_image, ['alt' => '', 'class' => 'thumbnail_img']) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
            <a data-slide="next" href="#media" class="right carousel-control">›</a>
        </div>
    <?php endif; ?>
</div>
