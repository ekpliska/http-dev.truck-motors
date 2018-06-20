<?php
    namespace app\widgets;
    use Yii;
    use yii\bootstrap\Widget;

/*
 * Виджет вывода "Сквозное меню"
 */
?>
<?php
class SubMenu extends Widget
{

    public function init() {
        parent::init();
    }

    public function run() {
        return $this->render('submenu\submenu');
    }
    
}
?>
