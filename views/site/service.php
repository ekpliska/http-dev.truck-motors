<?php
    use yii\helpers\Html;
    use yii\widgets\Breadcrumbs;
    use app\widgets\Info;
    use app\widgets\MainServices;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$this->title = Yii::$app->params['site_title'] . ' ' . 'Запись на СТО'; 
$this->params['breadcrumbs'][] = [
    'template' => "<li>{link}</li>\n", // шаблон для этой ссылки  
    'label' => 'Сервис', // название ссылки 
    'url' => ['site/service'] // сама ссылка
                                 ];
$this->params['breadcrumbs'][] = 'Запись на СТО';
?>
<section class="site-service">
    <div class="container">
        <h3>Запись на СТО</h3>
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
        
        <?= MainServices::widget(); ?>
    </div>                
</section>