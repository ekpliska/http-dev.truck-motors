<?php
    use yii\helpers\Html;
    use yii\widgets\Breadcrumbs;
    use app\widgets\MainServices;

$this->title = Yii::$app->params['site_title'] . ' ' . 'Контакты'; 
$this->params['breadcrumbs'][] = 'Контакты';
?>
<section class="site-contact">    
    <div class="container">
        <h3>Контакты</h3><br>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
            ?>        
        <div class="row">
            <div class="col-sm-12">
                <p>Content</p>
            </div>
        </div>
        <?= MainServices::widget(); ?>
    </div>
</section>
