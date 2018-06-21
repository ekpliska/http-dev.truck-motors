<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\helpers\StringHelper;
    use yii\widgets\LinkPager;
?>
<?php if (isset($articles)) : ?>
    <?php foreach ($articles as $article) : ?>
        <div class="post first_post image_left">
            <div class="post_image">
                <?= Html::img($article->articles_image, ['alt' => $article->articles_name, 'width' => '210', 'height' => '160']); ?>
            </div>
            <h3><a href="<?= Url::to(['articles/view', 'slug' => $article->slug]) ?>" class="post__a"><?= StringHelper::truncate($article->articles_name, 84, '...') ?></a></h3>
            <div class="post_meta">
                <span class="entry_date"><?= Yii::$app->formatter->asDate($article->articles_date, 'd MMMM Y') ?></span>
                <span class="entry_tags"><a href="<?= Url::to(['site/articles']) ?>" class="entry_tags__a">Статьи</a></span>
            </div>
            <p>
                <?= StringHelper::truncate(strip_tags($article->articles_text), 500, '...') ?>
            </p>
        </div>
        <hr />          
    <?php endforeach; ?>
<?php endif; ?>                
                
<?= 
    LinkPager::widget([
        'pagination' => $pages,
    ]);
?>