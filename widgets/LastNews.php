<?php
    namespace app\widgets;
    use yii\bootstrap\Widget;
    use app\models\News as ModelNews;
/* 
 * Новости
 */
?>
<?php
class LastNews extends Widget {

    public function run() {
        
        $last_news = ModelNews::find()->orderBy('news_id desc')->limit(5)->all(); ;

        return $this->render('lastnews\lastnews', [
             'last_news' => $last_news,
        ]);
    }
}
