<?php
    use yii\helpers\Html;
/*
 * Слайдер вывода логотипов
 */
?>

<div class="container text-center brand_logo">
    <div class="row">
        <div class="col-md-2 col-sm-4 col-xs-3">
            <?= Html::img('@web/images/brands_logo/daf.png', ['alt' => 'daf', 'class' => 'thumbnail_img img-responsive']) ?>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-3">
            <?= Html::img('@web/images/brands_logo/iveco.png', ['alt' => 'iveco', 'class' => 'thumbnail_img img-responsive']) ?>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-3">
            <?= Html::img('@web/images/brands_logo/man.png', ['alt' => 'man', 'class' => 'thumbnail_img img-responsive']) ?>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-3">
            <?= Html::img('@web/images/brands_logo/mercedes.png', ['alt' => 'mercedes', 'class' => 'thumbnail_img img-responsive']) ?>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-3">
            <?= Html::img('@web/images/brands_logo/renault.png', ['alt' => 'renault', 'class' => 'thumbnail_img img-responsive']) ?>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-3">
            <?= Html::img('@web/images/brands_logo/sacnia.png', ['alt' => 'sacnia', 'class' => 'thumbnail_img img-responsive']) ?>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-3">
            <?= Html::img('@web/images/brands_logo/volvo.png', ['alt' => 'volvo', 'class' => 'thumbnail_img img-responsive']) ?>
        </div>
    </div>
</div>

<?php /*
<div class="row">
    <div class="col-md-12">
        <div class="carousel slide media-carousel" id="media">
            <div class="carousel-inner">
                <div class="item  active">
                    <div class="row">
                        <div class="col-md-3">
                            <?= Html::img('@web/images/brands_logo/daf.png', ['alt' => 'daf', 'class' => 'thumbnail_img']) ?>
                        </div>
                        <div class="col-md-3">
                            <?= Html::img('@web/images/brands_logo/iveco.png', ['alt' => 'iveco', 'class' => 'thumbnail_img']) ?>
                        </div>
                        <div class="col-md-3">
                            <?= Html::img('@web/images/brands_logo/man.png', ['alt' => 'man', 'class' => 'thumbnail_img']) ?>
                        </div>
                        <div class="col-md-3">
                            <?= Html::img('@web/images/brands_logo/mercedes.png', ['alt' => 'mercedes', 'class' => 'thumbnail_img']) ?>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-3">
                            <?= Html::img('@web/images/brands_logo/renault.png', ['alt' => 'renault', 'class' => 'thumbnail_img']) ?>
                        </div>
                        <div class="col-md-3">
                            <?= Html::img('@web/images/brands_logo/sacnia.png', ['alt' => 'sacnia', 'class' => 'thumbnail_img']) ?>
                        </div>
                        <div class="col-md-3">
                          <?= Html::img('@web/images/brands_logo/volvo.png', ['alt' => 'volvo', 'class' => 'thumbnail_img']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
            <a data-slide="next" href="#media" class="right carousel-control">›</a>
        </div>
    </div>
</div>
 */ ?>
