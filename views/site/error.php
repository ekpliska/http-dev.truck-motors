<?php

    use yii\helpers\Html;

$this->title = Yii::$app->params['site_title'] . ' ' . $name;
?>
<div class="wrapper row2">
    <div id="container" class="clear">
        <section id="fof" class="clear">
            <div class="hgroup">
                <h1><span><strong>4</strong></span><span><strong>0</strong></span><span><strong>4</strong></span></h1>
                <h2>Ошибка ! <span>Страница не найдена</span></h2>
            </div>
            <p>Запрашиваемая вами страница не может быть найдена на нашем сайте</p>
            <p>
                <a href="javascript:history.go(-1)">&laquo; Вернуться назад</a> / 
                <?= Html::a('На Главную &raquo;', ['site/index']) ?>
            </p>
        </section>
    </div>
</div>

<?php /*
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>
*/ ?>