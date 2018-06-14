<?php
    use yii\helpers\Url;
    use app\widgets\Map;
    use app\widgets\MainServices;
    use app\widgets\Brands;
    use app\widgets\AdvertBlock;

$this->title = Yii::$app->params['site_title'];
?>
<?php // https://placehold.it/1200x400?text=IMAGE-2 ?>
<!-- Слайдер  -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?= Url::to('@web/images/slider/slider_1.jpeg') ?>" alt="Image">
            <div class="carousel-caption">
                <!--<h3>text image 1</h3>-->
                <!--<p>text image 1</p>-->
            </div>
        </div>
        <div class="item">
            <img src="<?= Url::to('@web/images/slider/slider_1.jpeg') ?>" alt="Image">
            <div class="carousel-caption">
                <!--<h3>text image 2</h3>-->
                <!--<p>text image 2</p>-->
            </div>
        </div>
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

<div class="site-index">
    
    <?= MainServices::widget(); ?>

    <div class="center_line text-center">
        <hr />
        <div class="center_line__button">
            <div class="center_line__button_record">
                <a href="<?= Url::to(['site/service']) ?>" class="center_line__button_record">
                    <div>
                        Записаться на СТО
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
