<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\SiteMenu;

/*
 * Шапка, меню
 */
?>
<header>
    <div class="wrap">
        <nav class="navbar navbar-inverse panel_top">
            <div class="container container-fluid">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center logo_info">
                    <div>
                        <span class="panel_top__logo">
                            <a href="<?= Url::home() ?>">
                                <?= Html::img('@web/images/logo_company.png', ['class' => 'panel_top__image', 'alt' => Yii::$app->params['site_name']]) ?>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 text-center adrees">
                    <div>
                        <div class="panel_top__part">
                            <div class="panel_top__part_adress">
                                <i class="fa fa-map-marker"></i>
                            </div>
                                <p>
                                    Ярославль, Промзона,
                                    <br />
                                    ул. Декабристов, 5
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 text-center phone">
                    <div>
                        <div class="panel_top__part">
                            <div class="panel_top__part_phone">
                                <i class="fa fa-phone"></i>
                            </div>
                                <p><a href="tel: +74852594141">(4852) 59-41-41</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 text-center record">
                    <div>
                        <div class="panel_top__part">
                            <div class="panel_top__part_record">
                                <a href="<?= Url::to(['site/service']) ?>" class="panel_top__part_link">
                                    <p>Записаться на сервис</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div> 
    
    <nav class="navbar navbar-default navbar-menu">
        <div class="container">
            <div class="navbar-header">
                <ul class="soc-icons">
                    <li><a href="#" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
		    <li><a href="https://vk.com/sto_truckmotors" target="_blank"><i class="fa fab fa-vk"></i></a></li>
		    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
	 	</ul>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w4-collapse">
                    <span class="sr-only">Меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
		</button>
            </div>
            <div id="w4-collapse" class="collapse navbar-collapse">
                <?= SiteMenu::widget(['view_name' => 'sitemenu']) ?>
            </div>
        </div>
    </nav>
    
</header>
