<?php
    namespace app\widgets;
    use yii\bootstrap\Widget;
    use app\models\Menu;
?>
<?php
/**
 * Меню сайта
 */
class SiteMenu extends Widget
{
	public $view_name;
	// Страницы для хедера
	public $pages;

	// Страницы для футера
	public $pages_footer;

	
    public function init() {
    	
    	$this->pages = Menu::find()
    		->andWhere(['menu_parent' => 1])
    		->with(['children'])
    		->all();           
    }

    
    
    public function run() {
        return $this->render('sitemenu\\' . $this->view_name, ['pages' => $this->pages]);
    }
}

?>