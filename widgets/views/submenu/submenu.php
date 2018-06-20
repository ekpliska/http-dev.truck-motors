<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use app\widgets\Brands;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="panel panel-default sub_menu">
    <div class="panel-body">
        <div class="sub_menu__dil">
            <h5 class="sub_menu__title">Мы работаем с</h5>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <?= Html::img('@web/images/suppliers/pe.png', ['class' => 'img-fluid img-thumbnail', 'alt' => 'PE', 'width' => '90']) ?>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <?= Html::img('@web/images/suppliers/bpw.png', ['class' => 'img-fluid img-thumbnail', 'alt' => 'BPE', 'width' => '90']) ?>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <?= Html::img('@web/images/suppliers/pe.png', ['class' => 'img-fluid img-thumbnail', 'alt' => 'PE', 'width' => '90']) ?>
            </div>
            <hr />
            <div class="clearfix"></div>    
        </div>
        
        <div class="sub_menu__dil_rec">
            <h5 class="sub_menu__title">Запись на сервис</h5>
            <div class="col-md-12">
                <p>
                    Компания "TruckMotorc" предоставляет услуги автосервиса для физических и юридических лиц. 
                    Записаться на услуги автосервиса можно перейдя по ссылке
                </p>
                <a href="<?= Url::to(['site/service']) ?>">Записаться на сервис</a>
            </div>
            <hr />
            <div class="clearfix"></div>    
        </div>
        
        <div class="sub_menu__dil_brand">
            <h5 class="sub_menu__title">Сервис для европейских машин</h5>
            <?= Brands::widget(['view_name' => 'subbrands']); ?>
            <div class="clearfix"></div>    
        </div>

        
        <div class="sub_menu__dil_advert">
            <h5 class="sub_menu__title">Реклама</h5>
            content
            <div class="clearfix"></div>    
        </div>

    </div>
</div>