<?php
    namespace app\widgets;
    use yii\bootstrap\Widget;
    use app\models\Sliders;
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
        $sliders_advert = Sliders::find()->andWhere(['sliders_show' => false, 'sliders_adverts' => true])->all();        
        return $this->render('advertblock\advertblock', ['sliders_advert' => $sliders_advert]);
    }
}

?>
