<?php
    namespace app\modules\admin\controllers;
    use yii\web\Controller;
    use app\modules\admin\models\RecordsInd;

class AdminController extends Controller
{
    
    public function actionIndex()
    {
        $records_ind = RecordsInd::find()->all();
        return $this->render('index', ['records_ind' => $records_ind]);
    }
    
    public function actionMenuSettings() {
        return $this->render('menu-settings');
    }
    
}
