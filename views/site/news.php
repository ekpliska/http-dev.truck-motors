<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\widgets\Breadcrumbs;
    use yii\helpers\StringHelper;
    use app\widgets\Info;
    use app\widgets\MainServices;
    use app\widgets\News;
    
/* 
 * Новости
 */
$this->title = Yii::$app->params['site_title'] . ' ' . 'Новости'; 
$this->params['breadcrumbs'][] = 'Новости';

?>


<section class="site-new">    
    <div class="container">
        <h3>Новости</h3><br>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
            ?>          
        <div class="row">
            <div class="col-sm-12">
                <?= News::widget(); ?>
            </div>
         </div>          
    </div>    
</section>
