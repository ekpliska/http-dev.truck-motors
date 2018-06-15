<?php
    use yii\helpers\Url;
    use app\widgets\Map;
    use app\widgets\MainServices;
    use app\widgets\Brands;
    use app\widgets\AdvertBlock;

$this->title = Yii::$app->params['site_title'];
$first_slider = 0;
?>
<?php // https://placehold.it/1200x400?text=IMAGE-2 ?>
<!-- Слайдер  -->
<?php if (isset($sliders) && count($sliders) > 0) : ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>    
        <div class="carousel-inner" role="listbox">
            <?php foreach ($sliders as $slider) : ?>
                <?php $first_slider++; ?>
                <div class="<?= $first_slider == 1 ? 'item active' : 'item' ?>">
                    <img src="<?= Url::to($slider->sliders_image) ?>" alt="Image">
                    <?php if ($slider->sliders_title && $slider->sliders_text) : ?>
                        <div class="carousel-caption">
                            <h3><?= $slider->sliders_title ?></h3>
                            <p><?= $slider->sliders_text ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Навигация слайдера -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Предыдущий</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Следующий</span>
        </a>
    </div>
<?php endif; ?>

<div class="site-index">
    
    <?= MainServices::widget(); ?>

    <div class="center_line text-center">
        <hr />
        <div class="center_line__button">
            <div class="center_line__button_record">
                <a href="<?= Url::to(['site/service']) ?>" class="center_line__button_record">
                    <div>
                        Записаться на сервис
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container why">
        <h3 class="why__current_why">
            Почему выбирают нас
        </h3>
        <?= AdvertBlock::widget(); ?>
    </div>
    <div class="container">
        <?= Brands::widget(); ?>
    </div>

</div>

    <?= Map::widget(); ?>
</div>
