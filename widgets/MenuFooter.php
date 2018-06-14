<?php
    namespace app\widgets;
    use yii\bootstrap\Widget;
    use app\models\Menu;

/*
 * Формирование меню для хедера и футера
 */
?>
<?php
class MenuFooter extends Widget {
    
    public $data;
    public $tree;
    
//    public $tpl;
//    public $menuHtml; // хранится html код, либо ul либо select

    public function init() {
        parent::init();
    }
    
    public function run() {
        $this->data = Menu::find()->indexBy('menu_id')->asArray()->all();
        $this->getTree();
        return $this->render('menufooter\menufooter', ['menu' => $this->getTree()]);
    }
    
    public function getTree() {
        $tree = [];
        foreach ($this->data as $id => &$node) {
            if (!$node['menu_parent']) {
                $tree[$id] = &$node;
            } else {
                $this->data[$node['menu_parent']]['childs'][$node['id']] = &$node;
            }
        }
        return $tree;
    } 
}
?>
