<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Комплект ресурсов для Админ-панели
 */
class AppAdminAsset extends AssetBundle
{
    public $sourcePath  = '@app/modules/admin/web';
    
    public $css = [
        'css/bootstrap-clearmin.css',
//        'css/c3.min.css',
        '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
        'css/material-design.css',
//        'css/roboto.css',
        'css/small-n-flat.css',
        'css/summernote.css'
    ];
    public $js = [
        'js/jquery.mousewheel.min.js',
        'js/jquery.cookie.min.js',
        'js/fastclick.min.js',
        'js/bootstrap.min.js',
        'js/clearmin.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
