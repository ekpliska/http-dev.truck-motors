<?php
    use yii\helpers\Url;
    use yii\widgets\Breadcrumbs;
    use app\widgets\LastNews;
/* 
 * Страница одной новости
 */
$this->title = $post->news_name;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['site/news']];
$this->params['breadcrumbs'][] = $post->news_name;
?>
<section class="site-new">    
    <div class="container">
        <div class="post first_post col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3><?= $post->news_name ?></h3>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
            ?>
            <div class="post_meta">
                <span class="entry_date"><?= $post->news_date ?></span>
                <span class="entry_tags"><a href="<?= Url::to(['site/news']) ?>">News</a></span>
            </div>
            <img class="frame alignleft" src="<?= $post->news_image ?>" alt="">
            <p>
                <?= $post->news_text ?>
            </p>
	</div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?= LastNews::widget() ?>
        </div>
    </div>
</section>