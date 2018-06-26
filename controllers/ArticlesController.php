<?php
    namespace app\controllers;
    use yii\web\Controller;
    use Yii;
    use yii\web\HttpException;
    use app\models\Articles;
    use app\models\Sliders;

class ArticlesController extends Controller
{
    public function actionView($slug) {
        
        $sliders = Sliders::find()->andWhere(['sliders_show' => true, 'sliders_adverts' => false])->all();
        
        $post = Articles::findSlug($slug)->one();
        
        if ($slug == null || $post === null) {
            throw new HttpException(404, 'Искомая статья не найдена');
        }
        
        return $this->render('view', ['post' => $post, 'sliders' => $sliders]);
    }
}
