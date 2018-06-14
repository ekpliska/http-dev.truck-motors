<?php
    namespace app\widgets;
    use yii\bootstrap\Widget;
    use app\models\Menu;
?>
<?php
/**
 * Виджет формирования меню для хедера и футера
 */
class SiteMenu extends Widget
{
	public $viewName;
	// Массив, сорежданий, пункты в меню для хедера
	public $pages;

	// Массив, сорежданий, пункты в меню для футера
	public $pagesFooter;

	
    public function init() {
    	
    	$this->pages = Menu::find()
    		->andWhere(['menu_parent' => 1, 'menu_show' => 1])
    		->with(['children'])
    		->all();
    }

    public function run() {
        return $this->render('sitemenu\sitemenu', ['pages' => $this->pages]);
    }
}

?>