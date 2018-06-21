<?php
    use yii\helpers\Url;
    use yii\widgets\Breadcrumbs;
    
/* 
 * Страница одной статьи
 */
$this->title = $post->articles_name;
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['site/articles']];
$this->params['breadcrumbs'][] = $post->articles_name;
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
            <h3><?= $post->articles_name ?></h3>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
            ?>
            <div class="post_meta">
                <span class="entry_date"><?= $post->articles_date ?></span>
                <span class="entry_tags"><a href="<?= Url::to(['site/articles']) ?>">Статьи</a></span>
            </div>
            <img class="frame alignleft" src="<?= $post->articles_image ?>" alt="">
            <p>
                <?= $post->articles_text ?>
            </p>
	</div>
    </div>
</section>