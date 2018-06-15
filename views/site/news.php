<?php
    use yii\helpers\Html;
    use yii\widgets\Breadcrumbs;
    use app\widgets\Info;
    use app\widgets\MainServices;
    
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
                <?php foreach ($news as $new) : ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <?= Html::img(); ?>
                        <img class="card-img-top" ">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
