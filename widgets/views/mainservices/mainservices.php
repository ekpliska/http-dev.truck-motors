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
        <h3 class="current_title">
            Основные услуги
        </h3>
        <?php foreach ($services as $key => $service) : ?>
            <div class="col-sm-3 col-md-2 col-xs-6 text-center">
                <?= Html::img($service['image_path'], ['alt' => 'image_service', 'class' => 'service_img_'.$key]) ?>
                <p class="service_title"><?= ($service['title']) ?></p>
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
