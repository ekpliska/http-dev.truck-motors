<?php

    use yii\helpers\Html;
    use yii\widgets\Breadcrumbs;

/*
 * Политика конфиденциальности
 */    
$this->title = 'Политика конфиденциальности | ' . Yii::$app->params['site_title'];
$this->params['breadcrumbs'][] = 'Политика конфиденциальности';
?>
<section class="site-policy">    
    <div class="container">
        <h3>Политика конфиденциальности</h3><br>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
            ?>          
        <div class="row">
            <div class="col-sm-12">
                <p>
                    <?= $text_policy['text_blocks_text'] ?>
                </p>
            </div>
        </div>
    </div>
</section>
