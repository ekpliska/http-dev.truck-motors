<?php
    namespace app\controllers;
    use yii\web\Controller;
    use Yii;
    use yii\web\HttpException;
    use app\models\BasicServices;

class MainServicesController extends Controller
{
    public function actionView($slug) {
        
        $service = BasicServices::findService($slug)->one();
        
        if ($slug == null || $service === null) {
            throw new HttpException(404, 'User not found');
        }
        
        return $this->render('view', ['service' => $service]);
    }
}
