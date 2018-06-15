<?php
    namespace app\widgets;
    use Yii;
    use yii\bootstrap\Widget;
    use app\models\TextBlocks;
/* 
 * Виджет вывода информации о правилах записи на СТО
 */
?>
<?php
class Info extends Widget {
    public $alias_block;
    public function run() {
        $text_block = TextBlocks::find()->andWhere(['text_block_alias' => $this->alias_block])->one();
        return $this->render('info\info', ['text_block' => $text_block]);
    }
}
