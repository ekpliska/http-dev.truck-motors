<?php

    namespace app\modules\admin\controllers;
    use Yii;
    use yii\data\ActiveDataProvider;
    use yii\web\Controller;
    use yii\web\NotFoundHttpException;
    use yii\filters\VerbFilter;
    use yii\web\UploadedFile;
    use app\modules\admin\models\BasicServices;
    use app\modules\admin\models\BasicServicesForm;

/**
 * Основные услуги
 */
class BasicServicesController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => BasicServices::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        

        $model = new BasicServicesForm();

        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'basic_services_preview');
            $file_h = UploadedFile::getInstance($model, 'basic_services_preview_h');
            $model->basic_services_preview = $file;
            $model->basic_services_preview_h = $file_h;
            
            $dir = Yii::getAlias('images/basic_service/new/');
            $file_name = $model->basic_services_preview->baseName . '.' . $model->basic_services_preview->extension;
            $model->basic_services_preview->saveAs($dir . $file_name);
            
            $file_name_h = $model->basic_services_preview_h->baseName . '.' . $model->basic_services_preview_h->extension;
            $model->basic_services_preview_h->saveAs($dir . $file_name_h);
            
            $data_model = new BasicServices();
            $data_model->basic_services_preview = '/' . $dir . $file_name;
            $data_model->basic_services_preview_h = '/' . $dir . $file_name_h;
            
            $data_model->basic_services_name = $model->basic_services_name;
            $data_model->basic_services_text = $model->basic_services_text;
            
            if ($data_model->validate() && $data_model->save()) {
                return $this->redirect(['view', 'id' => $data_model->basic_services_id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);

     }

    public function actionUpdate($id)
    {
        
        $model = $this->findModel($id);
        $current_image = $model->basic_services_preview;
        $current_image_h = $model->basic_services_preview_h;
        
        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'basic_services_preview');
            $file_h = UploadedFile::getInstance($model, 'basic_services_preview_h');
            
            if ($file && $file_h) {
                $model->basic_services_preview = $file;
                $model->basic_services_preview_h = $file_h;
                $dir = Yii::getAlias('images/basic_service/new/');
                
                $file_name = $model->basic_services_preview->baseName . '.' . $model->basic_services_preview->extension;
                $model->basic_services_preview->saveAs($dir . $file_name);
                
                $file_name_h = $model->basic_services_preview_h->baseName . '.' . $model->basic_services_preview_h->extension;
                $model->basic_services_preview_h->saveAs($dir . $file_name_h);

                $model->basic_services_preview = '/' . $dir . $file_name;
                $model->basic_services_preview_h = '/' . $dir . $file_name_h;
                @unlink(Yii::getAlias('@webroot' . $current_image));
                @unlink(Yii::getAlias('@webroot' . $current_image_h));
            } else {
                $model->basic_services_preview = $current_image;
                $model->basic_services_preview_h = $current_image_h;
            }
            
                   
            if ($model->validate() && $model->save()) {
                return $this->redirect(['view', 'id' => $model->basic_services_id]);                
            }
        }
        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = BasicServices::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
