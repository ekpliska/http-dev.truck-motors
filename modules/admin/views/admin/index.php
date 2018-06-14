<?php
    use yii\helpers\Url;
?>

<!--<div id="cm-menu">
    <nav class="cm-navbar cm-navbar-primary">
        <div class="cm-flex">
            <a href="#" class="cm-logo"></a>
        </div>
        <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
    </nav>
    
    <div id="cm-menu-content">
        <div id="cm-menu-items-wrapper">
            <div id="cm-menu-scroller">
                <ul class="cm-menu-items">
                    <li class="active"><a href="#" class="sf-house">Главная</a></li>
                    <li class="cm-submenu">
                        <a class="sf-window-layout">Заявки<span class="caret"></span></a>
                        <ul>
                            <li><a href="#">Физические лица</a></li>
                            <li><a href="#">Юридические лица</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="sf-notepad">Новости</a></li>
                    <li><a href="#" class="sf-notepad">Перейти на сайт</a></li>
                    <li><a href="#" class="sf-lock-open">Выйти</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>-->

<!--<header id="cm-header">
    <nav class="cm-navbar cm-navbar-primary">
        <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
        <div class="cm-flex">
            <h1>Главная</h1>
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
</header>-->

<!--<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top: 50px;">Добро пожаловать в панель управления!</h2>
        <p>Сегодня <strong><?= date('D M j, Y') ?></strong></p>
    </div>-->
    <!--<div class="container-fluid">-->
        <div class="row cm-fix-height">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Юридические лица</div>
                    <div class="panel-body">

                        <table class="table table-hover" style="margin-bottom:0">
                            <thead>
                                <tr>
                                    <th>Н/п</th>
                                    <th>Дата / Время</th>
                                    <th>Контакты</th>
                                    <th>btn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($records_ind as $record) : ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $record->records_id ?>
                                        </th>
                                        <td>
                                            <?= $record->records_date ?> / 
                                            <?= $record->records_time ?>
                                        </td>
                                        <td><?= $record->records_fullName ?></td>
                                        <td> >> </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Физические лица</div>
                    <div class="panel-body">
                        table
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>Text</p>
                    </div>
                </div>
            </div>             
        </div>
    <!--</div>-->
    
<!--    <footer class="cm-footer">
        <span class="pull-left">Личный кабинет</span><span class="pull-right">truck-motors.su</span>
    </footer>-->
<!--</div>-->

