<?php
    namespace app\widgets;
    use yii\bootstrap\Widget;
/* 
 * Виджет вывода логотипов (Слайдер бренды, главная станица)
 */
?>
<?php
class Brands extends Widget
{
    public function init() {
        parent::init();
    }
    
    public function run() {
        return $this->render('brands\brands');
    }
}
?>
