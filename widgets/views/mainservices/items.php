<?php
    use yii\helpers\Url;
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