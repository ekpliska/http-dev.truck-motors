<?php
	
	use yii\helpers\Url;
	use yii\helpers\Html;
	use yii\bootstrap\Nav;
	
?>
<?php
$items = [];
foreach ($pages as $page) {
    if ($page['menu_show'] == true) {
        $item = [
            'label' => Html::encode($page->menu_name),
            'url' => ($page->children) ? '#' : Url::to(['site/' . $page->menu_alias])
        ];
        if ($page->children) {
            $item['items'] = [];
            foreach ($page->children as $child) {
                $item['items'][] = [
                    'label' => Html::encode($child->menu_name),
                    'url' => Url::to(['site/' . $child->menu_alias])
                ];
            }
        }
        $items[] = $item;
    }
}
?>

<?=Nav::widget([
    'options' => [
        'class' => 'navbar-nav'
    ],
    'items' => $items
]);?>