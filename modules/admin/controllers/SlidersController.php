<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\modules\admin\models\Sliders;
use app\modules\admin\models\SlidersForm;

/**
 * SlidersController implements the CRUD actions for Sliders model.
 */
class SlidersController extends Controller
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

    /**
     * Вывод главной страницы раздела "Слайдер"
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Sliders::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Просмотр записи
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Создание нового слайдера
     */
    public function actionCreate()
    {
        $model = new SlidersForm();

        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'sliders_image');
            $model->sliders_image = $file;
            
            $dir = Yii::getAlias('images/slider/');
            $file_name = md5(strtotime('now')). '_' . $model->sliders_image->baseName . '.' . $model->sliders_image->extension;
            $model->sliders_image->saveAs($dir . $file_name);
            
            $data_model = new Sliders();
            $data_model->sliders_name = $model->sliders_name;
            $data_model->sliders_title = $model->sliders_title;
            $data_model->sliders_text = $model->sliders_text;
            $data_model->sliders_image = '/' . $dir . $file_name;
            $data_model->sliders_show = $model->sliders_show;
            
            if ($data_model->validate() && $data_model->save()) {
                return $this->redirect(['view', 'id' => $data_model->sliders_id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);

    }

    /**
     * Редактирование записи
     */
    public function actionUpdate($id)
    {
        
        $model = $this->findModel($id);
        $current_image = $model->sliders_image;
        
        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'sliders_image');
            if ($file) {                
                $model->sliders_image = $file;
                $dir = Yii::getAlias('images/slider/');
                $file_name = $model->sliders_image->baseName . '.' . $model->sliders_image->extension;
                $model->sliders_image->saveAs($dir . $file_name);
                $model->sliders_image = '/' . $dir . $file_name;
                @unlink(Yii::getAlias('@webroot' . $current_image));
            } else {
                $model->sliders_image = $current_image;
            }
            
            if ($model->validate() && $model->save()) {
                return $this->redirect(['view', 'id' => $model->sliders_id]);                
            }
        }
        return $this->render('update', ['model' => $model]);
        
    }

    /**
     * Удаление записи
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Поиск записи
     */
    protected function findModel($id)
    {
        if (($model = Sliders::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Ошика, искомая запись не найдена.');
    }
    
}
