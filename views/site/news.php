<?php
    use yii\widgets\Breadcrumbs;
    use app\widgets\News;
    use app\widgets\SubMenu;
    
/* 
 * Новости
 */
$this->title = 'Новости | ' . Yii::$app->params['site_title']; 
$this->params['breadcrumbs'][] = 'Новости';

?>


<section class="site-news">    
    <div class="container">
        <div class="post first_post col-lg-8 col-md-8 col-sm-8 col-xs-12">
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
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?= SubMenu::widget(); ?>
        </div>
    </div>    
</section>
