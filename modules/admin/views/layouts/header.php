<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
/*
 * Меню и панель пользователя
 */
?>
<!-- Menu (left side) -->
<div id="cm-menu">
    <nav class="cm-navbar cm-navbar-primary">
        <div class="cm-flex">
            <a href="<?= Url::to(['admin/index']) ?>" class="cm-logo"></a>
        </div>
        <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
    </nav>
    
    <div id="cm-menu-content">
        <div id="cm-menu-items-wrapper">
            <div id="cm-menu-scroller">
                <ul class="cm-menu-items">
                    <li class="active"><a href="<?= Url::to(['admin/index']) ?>" class="sf-house">Главная</a></li>
                    <li class="cm-submenu">
                        <a class="sf-book-bookmark">Заявки<span class="caret"></span></a>
                        <ul>
                            <li><a href="#">Физические лица</a></li>
                            <li><a href="#">Юридические лица</a></li>
                        </ul>
                    </li>
                    <li class="cm-submenu">
                        <a class="sf-box-full">Новости<span class="caret"></span></a>
                        <ul>
                            <li><a href="#">Добавить новость на сайт</a></li>
                            <li><a href="#">Все новости</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= Url::to(['menu/index']) ?>">Меню сайта</a></li>
                    <li><a href="<?= Url::to(['sliders/index']) ?>">Слайдер</a></li>
                    <li><a href="<?= Url::to(['text-blocks/index']) ?>">Текстовые блоки</a></li>                     
                    <li><a href="<?= Url::to(['/']) ?>">Перейти на сайт</a></li>
                    <li><a href="#" class="sf-lock-open">Выйти</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Nav panel for user) -->
<header id="cm-header">
    <nav class="cm-navbar cm-navbar-primary">
        <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
        <div class="cm-flex">
<!--            <h1>Главная</h1>-->
            <form id="cm-search" action="index.html" method="get">
                <input type="search" name="q" autocomplete="off" placeholder="Search...">
            </form>
        </div>
        <div class="pull-right">
            <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>                
        </div>
        
        <div class="dropdown pull-right">
            <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
            <ul class="dropdown-menu">
                <li class="disabled text-center">
                    <a style="cursor:default;"><strong>John Smith</strong></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-cog"></i> Settings</a>
                </li>
                <li>
                    <a href="login.html"><i class="fa fa-fw fa-sign-out"></i> Sign out</a>
                </li>
            </ul>
        </div>
    </nav>
</header>