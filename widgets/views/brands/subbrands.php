<?php
    use yii\helpers\Html;
/*
 * Слайдер вывода логотипов
 */
?>
<div class="text-center brand_logo">
    <div class="row">
        <?php $i = 0; ?>
        <?php foreach ($brands as $brand) : ?>
            <?php $i++; ?>
            <?php if ($i % 3 == 0) : ?>
                <div class="row">
            <?php endif; ?>
                <div class="col-md-4 col-sm-9 col-xs-4">
                    <a href="#" data-toggle="modal" data-target="#brands-<?= $brand['brands_id'] ?>">
                        <?= Html::img($brand['brands_image'], ['alt' => 'daf', 'class' => 'thumbnail_img_small img-responsive']) ?>
                    </a>
                </div>
            <?php if ($i % 3 == 0) : ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
    
<?php foreach ($brands as $brand) : ?>    
<div class="modal" id="brands-<?= $brand['brands_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modal-title__brand"><?= $brand['brands_name'] ?></h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8 col-sm-6">
                            <?= Html::img($brand['brands_image'], ['alt' => 'daf', 'class' => 'img-thumbnail']) ?>
                        </div>
                        <div class="col-4 col-sm-6 text-left">
                            <?= $brand['brands_descriptions'] ?>
                        </div>
                    </div>
                </div>                             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>    
<?php endforeach; ?>    
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
