<?php
    use yii\helpers\Html;
/**
 *  Формирование слайдера с рекламой
 */
?>

<div class="col-sm-4 why__left_block">
    <p><span class="check_line"><b>/</b></span> Наличие специнструмента</p>
    <p><span class="check_line"><b>/</b></span> 1200 М2 ремонтная зона</p>
    <p><span class="check_line"><b>/</b></span> Удобное метоположение</p>
    <p><span class="check_line"><b>/</b></span> Магазин запчастей</p>
</div>
<div class="col-sm-8">
    <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
            <div class="item  active">
                <div class="row">
                    <div class="col-md-3">
                        <?= Html::img('https://placehold.it/1600x400?text=Another Image-1', ['alt' => '', 'class' => 'thumbnail_img']) ?>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-3">
                        <?= Html::img('https://placehold.it/1600x400?text=Another Image-2', ['alt' => '', 'class' => 'thumbnail_img']) ?>
                    </div>
                </div>
            </div>
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
    </div>
</div>
