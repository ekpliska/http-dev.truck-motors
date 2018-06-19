<?php
    use yii\widgets\Breadcrumbs;
    use app\widgets\MainServices;
    use yii\helpers\Url;
/* 
 * Основные услуги
 */

$this->title = Yii::$app->params['site_title'] . ' ' . 'Основные услуги'; 
$this->params['breadcrumbs'][] = 'Основные услуги';
?>
<section class="site-service">
    <div class="container">
        <h3>Основные услуги</h3>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
        ?>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            text
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?= MainServices::widget(['view_name' => 'items']); ?>
            <hr />
            Записаться на сервис
            <hr />
            Реклама
        </div>
        
    </div>                
</section>