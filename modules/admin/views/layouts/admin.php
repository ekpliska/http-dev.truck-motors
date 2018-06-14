<?php
    use yii\helpers\Html;
    use app\assets\AppAdminAsset;

AppAdminAsset::register($this);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?php $this->head() ?>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
</head>
<body>
<?php $this->beginBody() ?>
    <?php $this->beginContent('@app/modules/admin/views/layouts/header.php') ?>
    <?php $this->endContent(); ?>
    
    <div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top: 50px;">Добро пожаловать в панель управления!</h2>
        <p>Сегодня <strong><?= date('D M j, Y') ?></strong></p>
    </div>
    <div class="container-fluid">
    
        <?= $content ?>
        
    </div>
    </div>
        
    
    <?php $this->beginContent('@app/modules/admin/views/layouts/footer.php') ?>
    <?php $this->endContent(); ?>
    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
