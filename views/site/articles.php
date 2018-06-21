<?php
    use yii\widgets\Breadcrumbs;
    use app\widgets\Articles;
    use yii\helpers\Url;
    
/* 
 * Статьи (Для СЕО)
 */
$this->title = 'Статьи | ' . Yii::$app->params['site_title']; 
$this->params['breadcrumbs'][] = 'Статьи';

?>

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

<section class="site-news">    
    <div class="container">
        <div class="post first_post col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Статьи</h3><br>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
            ?>          
            <div class="row">
                <div class="col-sm-12">
                    <?= Articles::widget(); ?>
                </div>
            </div>  
        </div>
    </div>    
</section>
