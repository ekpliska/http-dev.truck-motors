<?php
    namespace app\widgets;
    use Yii;
    use yii\bootstrap\Widget;
    use app\models\BasicServices;
/*
 * Виджет вывода "Основные услуги" на главной странице
 */
?>
<?php
class MainServices extends Widget
{
    public $view_name;

    public function init() {
        parent::init();
    }

    public function run() {
        $services = BasicServices::find()->asArray()->all();
        return $this->render('mainservices\\' . $this->view_name, ['services' => $services]);
    }
    
    public function getItems() {
    }
}
?>
