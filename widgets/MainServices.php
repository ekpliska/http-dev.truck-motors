<?php
    namespace app\widgets;
    use Yii;
    use yii\bootstrap\Widget;
/*
 * Виджет вывода "Основные услуги" на главной странице
 */
?>
<?php
class MainServices extends Widget
{
    public $services = [
        'item_1' => [
            'title' => 'Ремонт тормозной системы',
            'image_path' => 'images/basic_service/basic_service_1.png',
            'url' => '',
        ],
        'item_2' => [
            'title' => 'Ремонт двигателя, КПП, Редуктора',
            'image_path' => 'images\basic_service\basic_service_2.png',
            'url' => '',
        ],
        'item_3' => [
            'title' => 'Диагностика',
            'image_path' => 'images/basic_service/basic_service_3.png',
            'url' => '',
        ],
        'item_4' => [
            'title' => 'Электромеханические работы',
            'image_path' => 'images/basic_service/basic_service_4.png',
            'url' => '',
        ],
        'item_5' => [
            'title' => 'Ремонт подвески',
            'image_path' => 'images/basic_service/basic_service_5.png',
            'url' => '',
        ],
        'item_6' => [
            'title' => 'Сварочные работы',
            'image_path' => 'images/basic_service/basic_service_6.png',
            'url' => '',
        ],
    ];

    public function init() {
        parent::init();
    }

    public function run() {
        return $this->render('mainservices\mainservices', ['services' => $this->services]);
    }
}
?>
