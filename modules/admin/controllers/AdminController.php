<?php
    namespace app\modules\admin\controllers;
    use yii\web\Controller;
    use app\models\RecordsInd;
    use app\models\RecordsLeg;

class AdminController extends Controller
{
    
    public function actionIndex()
    {
        $records_ind = RecordsInd::find()->orderBy('records_id desc')->limit(10)->all();
        $records_leg = RecordsLeg::find()->orderBy('records_id desc')->limit(10)->all();
        return $this->render('index', ['records_ind' => $records_ind, 'records_leg' => $records_leg]);
    }
    
    public function actionMenuSettings() {
        return $this->render('menu-settings');
    }
    
    public function actionError() {
        return $this->redirect('error');
    }
    
}
