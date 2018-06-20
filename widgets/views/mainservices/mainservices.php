<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
/*
 * Отрисовываем на главной странице блок с основными услугами
 */

// Счетчик количества услуг
$count_col = 0;
?>

<div class="container">
    <div class="main-services">
        
        <div class="main-services__block">
            <div class="col-sm-10 col-md-10 col-xs-8">
                <h3 class="current_title">
                    Основные услуги
                </h3>
            </div>
            <div class="col-sm-2 col-md-2 col-xs-4">
                <a class="main-services__btn" href="<?= Url::to(['site/main-services']) ?>">Все услуги</a>
            </div>
            <div class="clearfix"></div>               
        </div>
        
        <?php foreach ($services as $key => $service) : ?>
            <div class="col-sm-3 col-md-2 col-xs-6 text-center services__link">
                <a href="<?= Url::to(['main-services/view', 'slug' => $service['slug']]) ?>">
                    <?= Html::img($service['basic_services_preview'], ['alt' => 'image_service', 'class' => 'service_img_'.$key]) ?>                
                    <p class="service_title"><?= ($service['basic_services_name']) ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php /*
<?php foreach ($services as $key => $service) : ?>

    <?php // Если счетчик количества услуг делится на три без остатка, выводим <div class="row">
        if ($count_col % 3 == 0) : ?>
        <div class="row">
    <?php endif; ?>

    <div class="col-sm-2 col-md-2 col-xs-2 text-center main-services">
        <?= Html::img($service['image_path'], ['alt' => 'image_service', 'class' => 'service_img']) ?>
        <p class="service_title"><?= ($service['title']) ?></p>
    </div>

    <?php $count_col++; ?>

    <?php // Здесь <div class="row"> закрываем, по условию (если счетчик количества услуг делится на три без остатка)
        if ($count_col % 3 == 0) : ?>
        </div>
    <?php endif; ?>

<?php endforeach; ?>
*/ ?>
