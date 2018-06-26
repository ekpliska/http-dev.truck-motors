<?php
    namespace app\controllers;
    use yii\web\Controller;
    use Yii;
    use yii\web\HttpException;
    use app\models\News;

class NewsController extends Controller
{
    public function actionView($slug) {
        
        $post = News::findSlug($slug)->one();
        
        if ($slug == null || $post === null) {
            throw new HttpException(404, 'Искомая новость не найдена');
        }
        
        return $this->render('view', ['post' => $post]);
    }
}
