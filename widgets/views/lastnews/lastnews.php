<?php
    use yii\helpers\Url;
    use yii\helpers\StringHelper;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php if (isset($last_news)) : ?>
    <div class="side_bar_widget">
        <h4 class="colored">Последние новости</h4>
            <?php foreach ($last_news as $last_new) : ?>
            <div>
                <div class="flickr">
                    <img src="<?= $last_new->news_image ?>" class="bordered_img last" alt=" ">
                </div>
                <h6>
                    <a class="link" href="<?= Url::to(['news/view', 'slug' => $last_new->slug]) ?>">
                        <?= $last_new->news_name ?>
                    </a>
                </h6>
                <span class="side_bar_widget__date">
                    <?= Yii::$app->formatter->asDate($last_new->news_date, 'd MMMM Y') ?>
                </span>
                <p class="small">
                    <?= StringHelper::truncate(strip_tags($last_new->news_text), 150, '...') ?>
                    <br />
                    <span><?= $last_new->news_date ?></span>
                </p>
            </div>
            <hr />
        <?php endforeach; ?>  
    </div>  
<?php endif; ?>