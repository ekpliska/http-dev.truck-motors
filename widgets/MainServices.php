<?php
    namespace app\widgets;
    use Yii;
    use yii\bootstrap\Widget;
    use app\models\BasicServices;
    use app\models\Image;
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
        $images = Image::find()->andWhere(['modelName' => 'PhotoServices', 'itemId' => '13', 'isMain' => null])->all();
        return $this->render('mainservices\\' . $this->view_name, ['services' => $services, 'images' => $images]);
    }
    
    public function getItems() {
    }
}
?>
