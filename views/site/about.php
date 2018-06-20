<?php

    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\widgets\Breadcrumbs;
    use app\widgets\MainServices;

$this->title = 'О Компании | ' . Yii::$app->params['site_title'];
$this->params['breadcrumbs'][] = 'О компании';
?>
<section class="site-about">    
    <div class="container">
        <h3>О компании</h3><br>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
            ?>          
        <div class="row">
            <div class="col-sm-12">
                <p>
                    <?= $text_about['text_blocks_text'] ?>
                </p>
                <hr />
                <div class="row">
                    <div class="list-group gallery">
                            <div class="col-sm-3 col-xs-6 col-md-3 col-lg-3">
                                <a class="thumbnail fancybox" rel="ligthbox" href="<?= Url::to(['images/gallery/about_company_1.jpg']) ?>">
                                    <?= Html::img('@web/images/gallery/about_company_1.jpg', ['alt' => '', 'calss' => 'img-responsive']) ?>
                                </a>
                            </div>
                            <div class="col-sm-3 col-xs-6 col-md-3 col-lg-3">
                                <a class="thumbnail fancybox" rel="ligthbox" href="<?= Url::to(['images/gallery/about_company_2.jpg']) ?>">
                                    <?= Html::img('@web/images/gallery/about_company_2.jpg', ['alt' => '', 'calss' => 'img-responsive']) ?>
                                </a>
                            </div>
                            <div class="col-sm-3 col-xs-6 col-md-3 col-lg-3">
                                <a class="thumbnail fancybox" rel="ligthbox" href="<?= Url::to(['images/gallery/about_company_3.jpg']) ?>">
                                    <?= Html::img('@web/images/gallery/about_company_3.jpg', ['alt' => '', 'calss' => 'img-responsive']) ?>
                                </a>
                            </div>
                            <div class="col-sm-3 col-xs-6 col-md-3 col-lg-3">
                                <a class="thumbnail fancybox" rel="ligthbox" href="<?= Url::to(['images/gallery/about_company_4.jpg']) ?>">
                                    <?= Html::img('@web/images/gallery/about_company_4.jpg', ['alt' => '', 'calss' => 'img-responsive']) ?>
                                </a>
                            </div>
                    </div>
                </div>
                
            </div>
        </div>
        <?= MainServices::widget(['view_name' => 'mainservices']); ?>
    </div>
</section>
<?php
$js = <<<JS
$(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });        
JS;
$this->registerJs($js, yii\web\View::POS_READY);
?>