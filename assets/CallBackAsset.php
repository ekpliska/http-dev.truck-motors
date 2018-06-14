<?php
    namespace app\assets;
    use yii\web\AssetBundle;
    
/* 
 *      Подключение виджета обратного звонка
 *      Сервис: https://callback-free.ru/
 */
?>
<?php
class CallBackAsset extends AssetBundle
{
    
    public $cbkJs = 'https://callback-free.ru/api/js/form-builder.js';

    public $jsOptions = [
        'charset' => 'UTF-8',
        'data-key' => '06SPjqdx',   // Ключ API
        'type' => 'text/javascript',
    ];    
    
    public function init() {
        parent::init();
        $this->js[] = $this->cbkJs;
    }
}
?>
