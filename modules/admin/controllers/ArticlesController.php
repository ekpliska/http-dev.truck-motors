<?php

    namespace app\modules\admin\controllers;
    use Yii;    
    use yii\data\ActiveDataProvider;
    use yii\web\Controller;
    use yii\web\NotFoundHttpException;
    use yii\filters\VerbFilter;
    use yii\web\UploadedFile;
    use app\modules\admin\models\Articles;
    use app\modules\admin\models\ArticlesForm;

/**
 * Статьи (СЕО)
 */
class ArticlesController extends Controller
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
            'query' => Articles::find(),
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

        $model = new ArticlesForm();

        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'articles_image');
            $model->articles_image = $file;
            
            $dir = Yii::getAlias('images/articles/');
            $file_name = md5(strtotime('now')). '_' . $model->articles_image->baseName . '.' . $model->articles_image->extension;
            $model->articles_image->saveAs($dir . $file_name);
            
            $data_model = new Articles();
            $data_model->articles_image = '/' . $dir . $file_name;
            $data_model->articles_name = $model->articles_name;
            $data_model->articles_text = $model->articles_text;
            $data_model->articles_author = $model->articles_author;
            $data_model->articles_date = $model->articles_date;
            $data_model->articles_show = $model->articles_show;
            $data_model->articles_title = $model->articles_title;
            $data_model->articles_keywords = $model->articles_keywords;
            $data_model->articles_descriptions = $model->articles_descriptions;
            
            if ($data_model->validate() && $data_model->save()) {
                return $this->redirect(['view', 'id' => $data_model->articles_id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);

    }

    public function actionUpdate($id)
    {
        
        $model = $this->findModel($id);
        $current_image = $model->articles_image;
        
        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'articles_image');
            if ($file) {
                $model->articles_image = $file;
                $dir = Yii::getAlias('images/news/');
                $file_name = $model->articles_image->baseName . '.' . $model->articles_image->extension;
                $model->articles_image->saveAs($dir . $file_name);
                $model->articles_image = '/' . $dir . $file_name;
                @unlink(Yii::getAlias('@webroot' . $current_image));
            } else {
                $model->articles_image = $current_image;
            }
            
                   
            if ($model->validate() && $model->save()) {
                return $this->redirect(['view', 'id' => $model->articles_id]);                
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
        if (($model = Articles::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
