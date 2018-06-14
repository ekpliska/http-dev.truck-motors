<?php
    namespace app\helpers;
    use app\models\Menu;
?>
<?php
class Helper
{
    public static $name = 'Корень';
    
    public static function getNameParent($name_id) {
        $pages = Menu::find()->asArray()->all();
        foreach ($pages as $page) {
            if ($page['menu_id'] == $name_id) {
                self::$name = $page['menu_name'];
            }
        }
        return self::$name;        
    }
}
?>
