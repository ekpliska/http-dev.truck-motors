<?php
    namespace app\widgets;
    use yii\bootstrap\Widget;
?>
<?php
/**
 * Виджет вывода блока с рекламой
 */
class AdvertBlock extends Widget
{

    public function init() {
        parent::init();
    }

    public function run() {
        return $this->render('advertblock\advertblock');
    }
}

?>
