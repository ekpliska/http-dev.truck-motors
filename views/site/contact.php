<?php
    use yii\widgets\Breadcrumbs;
    use app\widgets\MainServices;
    use app\widgets\Map;

$this->title = 'Контакты | ' . Yii::$app->params['site_title']; 
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
            <div class="col-sm-7">
                <p>
                    <?= $text_contact['text_blocks_text'] ?>
                </p>
            </div>
            <div class="col-sm-5">
                <?= Map::widget() ?>
            </div>
        </div>
        <?= MainServices::widget(['view_name' => 'mainservices']); ?>
    </div>
</section>
<?php $this->registerCss('#map {border: 1px solid #bfbfbf;}'); ?>