<?php

    namespace app\modules\admin\controllers;

    use Yii;
    use yii\data\ActiveDataProvider;
    use yii\web\Controller;
    use yii\web\NotFoundHttpException;
    use yii\filters\VerbFilter;
    use yii\web\UploadedFile;
    use app\modules\admin\models\Brands;
    use app\modules\admin\models\BrandsForm;
    
/**
 * BrandsController implements the CRUD actions for Brands model.
 */
class BrandsController extends Controller
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

    // Формирование главной страницы "Поставшики"
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Brands::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    // Просмотр записи
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    // Создание записи    
    public function actionCreate()
    {
        $model = new BrandsForm();

        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'brands_image');
            $model->brands_image = $file;
            
            $dir = Yii::getAlias('images/brands_logo/');
            $file_name = md5(strtotime('now')). '_' . $model->brands_image->baseName . '.' . $model->brands_image->extension;
            $model->brands_image->saveAs($dir . $file_name);
            
            $data_model = new Brands();
            $data_model->brands_name = $model->brands_name;
            $data_model->brands_image = '/' . $dir . $file_name;
            $data_model->brands_descriptions = $model->brands_descriptions;
            
            if ($data_model->validate() && $data_model->save()) {
                return $this->redirect(['view', 'id' => $data_model->brands_id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    // Редактирование записи
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        $current_image = $model->brands_image;
        
        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'brands_image');
            if ($file) {
                $model->brands_image = $file;
                $dir = Yii::getAlias('images/brands_logo/');
                $file_name = $model->brands_image->baseName . '.' . $model->brands_image->extension;
                $model->brands_image->saveAs($dir . $file_name);
                $model->brands_image = '/' . $dir . $file_name;
            } else {
                $model->brands_image = $current_image;
            }
                   
            if ($model->validate() && $model->save()) {
                return $this->redirect(['view', 'id' => $model->brands_id]);                
            }
        }
        return $this->render('update', ['model' => $model]);
    }

    // Удаление записи
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Brands::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Ошика, искомая запись не найдена.');
    }
}
