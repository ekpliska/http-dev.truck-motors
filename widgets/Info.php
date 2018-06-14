<?php
    namespace app\widgets;
    use Yii;
    use yii\bootstrap\Widget;
/* 
 * Виджет вывода информации о правилах записи на СТО
 */
?>
<?php
class Info extends Widget {
    
    public function run() {
        return $this->render('info\info');
    }
}
