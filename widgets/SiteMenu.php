<?php
    namespace app\widgets;
    use yii\bootstrap\Widget;
    use app\models\Menu;
?>
<?php
/**
 * ������ ������������ ���� ��� ������ � ������
 */
class SiteMenu extends Widget
{
	public $viewName;
	// ������, ����������, ������ � ���� ��� ������
	public $pages;

	// ������, ����������, ������ � ���� ��� ������
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