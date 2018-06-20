<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use app\widgets\Brands;
/* 
 * Основные услуги, вывод пунктов для саб меню
 * active
 */
$slug = Yii::$app->controller->actionParams['slug'];
?>
<?php if (isset($services)) : ?>
    <ul class="list-group list-group-flush">
        <?php foreach ($services as $item) : ?>
        <a href="<?= Url::to(['main-services/view', 'slug' => $item['slug']]) ?>" class="list-group-item list-group-item-action <?= $item['slug'] == $slug ? 'active' : '' ?>">
                <?= $item['basic_services_name'] ?>
            </a>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

        <div class="sub_menu__dil">
            <h5 class="sub_menu__title">Мы работаем с</h5>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <?= Html::img('@web/images/suppliers/pe.png', ['class' => 'img-fluid img-thumbnail', 'alt' => 'PE', 'width' => '90']) ?>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <?= Html::img('@web/images/suppliers/bpw.png', ['class' => 'img-fluid img-thumbnail', 'alt' => 'BPE', 'width' => '90']) ?>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <?= Html::img('@web/images/suppliers/pe.png', ['class' => 'img-fluid img-thumbnail', 'alt' => 'PE', 'width' => '90']) ?>
            </div>
            <hr />
            <div class="clearfix"></div>    
        </div>



<div class="sub_menu__dil_rec">
    <h5 class="sub_menu__title">Запись на сервис</h5>
    <div class="col-md-12">
        <p>
            Компания "TruckMotorc" предоставляет услуги автосервиса для физических и юридических лиц. 
            Записаться на услуги автосервиса можно перейдя по ссылке
        </p>
        <a href="<?= Url::to(['site/service']) ?>">Записаться на сервис</a>
    </div>
    <div class="clearfix"></div>    
</div>

<div class="sub_menu__dil_brand">
    <h5 class="sub_menu__title">Сервис для европейских машин</h5>
    <?= Brands::widget(['view_name' => 'subbrands']); ?>
    <div class="clearfix"></div>    
</div>

<div class="sub_menu__dil_advert">
    <h5 class="sub_menu__title">Реклама</h5>
    content
    <div class="clearfix"></div>    
</div>
