<?php
    use yii\helpers\Html;
    use yii\widgets\Breadcrumbs;
    use app\widgets\Info;
    use app\widgets\MainServices;
/* 
 * Запись на СТО
 */

$this->title = 'Запись на сервис | ' . Yii::$app->params['site_title']; 
$this->params['breadcrumbs'][] = [
    'template' => "<li>{link}</li>\n", // шаблон для этой ссылки  
    'label' => 'Сервис', // название ссылки 
//    'url' => ['site/service'] // сама ссылка
                                 ];
$this->params['breadcrumbs'][] = 'Запись на сервис';
?>
<section class="site-service">
    <div class="container">
        <h3>Запись на сервис</h3>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
        ?>
             
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-sm-6 text-center">
                    <?=
                        Html::a('Физическое лицо', ['site/record-ind'], ['class' => 'btn btn-sm animated-button ind']);
                    ?>
                </div>
                <div class="col-sm-6 text-center">
                    <?=
                        Html::a('Юридическое лицо', ['site/record-leg'], ['class' => 'btn btn-sm animated-button leg']);
                    ?>
                </div>
            </div>
        </div>
        
        <?= Info::widget(['alias_block' => 'schedule_block']) ?> 
        
        <?= MainServices::widget(['view_name' => 'mainservices']); ?>
    </div>                
</section>