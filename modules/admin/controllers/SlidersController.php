<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\modules\admin\models\Sliders;

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
        $model = new Sliders();

//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->sliders_id]);
//        }

        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'file');
            $model->file = $file;
            $dir = Yii::getAlias('images/slider/');
            $fileName = md5(strtotime('now')). '_' . $model->file->baseName . '.' . $model->file->extension;
            $model->file->saveAs($dir . $fileName);
            $model->file = $fileName;
            $model->sliders_image = '/' . $dir . $fileName;            
        }
        
        if ($model->save()) {
            return $this->redirect(['view', 'id' => $model->sliders_id]);
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->sliders_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
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
