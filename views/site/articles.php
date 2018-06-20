<?php
    use yii\widgets\Breadcrumbs;
    use app\widgets\News;
    use app\widgets\SubMenu;
    
/* 
 * Статьи (Для СЕО)
 */
$this->title = 'Статьи | ' . Yii::$app->params['site_title']; 
$this->params['breadcrumbs'][] = 'Статьи';

?>


<section class="site-new">    
    <div class="container">
        <div class="post first_post col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Статьи</h3><br>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
            ?>          
            <div class="row">
                <div class="col-sm-12">
                    articles
                </div>
            </div>  
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            articles
        </div>
    </div>    
</section>
