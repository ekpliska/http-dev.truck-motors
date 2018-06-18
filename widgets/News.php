<?php
    namespace app\widgets;
    use Yii;
    use yii\bootstrap\Widget;
    use yii\data\Pagination;
    use app\models\News as ModelNews;
/* 
 * Новости
 */
?>
<?php
class News extends Widget {

    public function run() {
        
        $query = ModelNews::find()->where(['news_show' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination([
            'totalCount' => $query->count(), 
            'pageSize' => 10, 
            'forcePageParam' => false, 
            'pageSizeParam' => false
        ]);
        $news = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('news\news', [
             'news' => $news,
             'pages' => $pages,
        ]);
    }
}
