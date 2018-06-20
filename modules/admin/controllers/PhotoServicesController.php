<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\PhotoServices;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PhotoServicesController implements the CRUD actions for PhotoServices model.
 */
class PhotoServicesController extends Controller
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
            'query' => PhotoServices::find(),
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
        $model = new PhotoServices();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->gallery = UploadedFile::getInstances($model, 'gallery');
            $model->uploadGallery();
            return $this->redirect(['view', 'id' => $model->photo_services_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->gallery = \yii\web\UploadedFile::getInstances($model, 'gallery');

            if ($model->gallery) {
                $model->uploadGallery();
            }
            return $this->redirect(['view', 'id' => $model->photo_services_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = PhotoServices::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
