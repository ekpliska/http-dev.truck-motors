<?php
    namespace app\widgets;
    use Yii;
    use yii\bootstrap\Widget;
    use yii\data\Pagination;
    use app\models\Articles as ModelArticles;
/* 
 * Новости
 */
?>
<?php
class Articles extends Widget {

    public function run() {
        
        $query = ModelArticles::find()->where(['articles_show' => 1])->orderBy('articles_id desc');
        $countQuery = clone $query;
        $pages = new Pagination([
            'totalCount' => $query->count(), 
            'pageSize' => 10, 
            'forcePageParam' => false, 
            'pageSizeParam' => false
        ]);
        $articles = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('articles\articles', [
             'articles' => $articles,
             'pages' => $pages,
        ]);
    }
}
