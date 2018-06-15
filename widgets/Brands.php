<?php
    namespace app\widgets;
    use yii\bootstrap\Widget;
    use app\models\Brands as ModelBrands;
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
        $brands = ModelBrands::find()->asArray()->all();        
        return $this->render('brands\brands', ['brands' => $brands]);
    }
}
?>
