<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\helpers\StringHelper;
    use yii\widgets\LinkPager;
?>
<?php if (isset($news)) : ?>
    <?php foreach ($news as $new) : ?>
        <div class="post first_post image_left">
            <div class="post_image">
                <?= Html::img($new->news_image, ['alt' => $new->news_name, 'width' => '210', 'height' => '160']); ?>
            </div>
            <h3><a href="<?= Url::to(['news/view', 'slug' => $new->slug]) ?>" class="post__a"><?= StringHelper::truncate($new->news_name, 84, '...') ?></a></h3>
            <div class="post_meta">
                <span class="entry_date"><?= Yii::$app->formatter->asDate($new->news_date, 'd MMMM Y') ?></span>
                <span class="entry_tags"><a href="<?= Url::to(['site/news']) ?>" class="entry_tags__a">Новости</a></span>
            </div>
            <p>
                <?= StringHelper::truncate(strip_tags($new->news_text), 500, '...') ?>
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