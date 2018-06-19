<?php

    use yii\helpers\Html;
    use yii\widgets\Breadcrumbs;
    use app\widgets\MainServices;

$this->title = Yii::$app->params['site_title'] . ' ' . 'О компании';
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
                <p>Content</p>
            </div>
        </div>
        <?= MainServices::widget(['view_name' => 'mainservices']); ?>
    </div>
</section>
