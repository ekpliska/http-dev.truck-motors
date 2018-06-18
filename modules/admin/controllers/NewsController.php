<?php

    namespace app\modules\admin\controllers;
    use Yii;    
    use yii\data\ActiveDataProvider;
    use yii\web\Controller;
    use yii\web\NotFoundHttpException;
    use yii\filters\VerbFilter;
    use yii\web\UploadedFile;
    use app\modules\admin\models\News;
    use app\modules\admin\models\NewsForm;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    /**
     * {@inheritdoc}
     */
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
            'query' => News::find(),
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

        $model = new NewsForm();

        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'news_image');
            $model->news_image = $file;
            
            $dir = Yii::getAlias('images/news/');
            $file_name = md5(strtotime('now')). '_' . $model->news_image->baseName . '.' . $model->news_image->extension;
            $model->news_image->saveAs($dir . $file_name);
            
            $data_model = new News();
            $data_model->news_image = '/' . $dir . $file_name;
            $data_model->news_name = $model->news_name;
            $data_model->news_text = $model->news_text;
            $data_model->news_author = $model->news_author;
            $data_model->news_date = $model->news_date;
            $data_model->news_show = $model->news_show;
            $data_model->news_title = $model->news_title;
            $data_model->news_keywords = $model->news_keywords;
            $data_model->news_descriptions = $model->news_descriptions;
            
            if ($data_model->validate() && $data_model->save()) {
                return $this->redirect(['view', 'id' => $data_model->news_id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);

    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $current_image = $model->news_image;
        
        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'news_image');
            if ($file) {
                $model->news_image = $file;
                $dir = Yii::getAlias('images/news/');
                $file_name = $model->news_image->baseName . '.' . $model->news_image->extension;
                $model->news_image->saveAs($dir . $file_name);

                $model->news_image = '/' . $dir . $file_name;
            } else {
                $model->news_image = $current_image;
            }
            
                   
            if ($model->validate() && $model->save()) {
                return $this->redirect(['view', 'id' => $model->news_id]);                
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
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
