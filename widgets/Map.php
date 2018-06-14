<?php
    namespace app\widgets;
    use Yii;
    use yii\bootstrap\Widget;
?>
<?php
/*
 * Виджет вывод карты
 */
class Map extends Widget {
    
    // Координаты цента карты
    // http://dimik.github.io/ymaps/examples/location-tool/
    public $latitude = '57.59368054';
    public $longitude = '39.81308747';

    public function init() {
        parent::init();
        if (empty($this->latitude) || empty($this->longitude)) {
            return 'Не заданы координаты локации';
        }
    }
    
    public function run() {
        return $this->render('map\map', [
            'latitude' => $this->latitude, 
            'longitude' => $this->longitude]);
    }
}
?>
