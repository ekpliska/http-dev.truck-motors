<?php

    use yii\helpers\Html;
    use yii\widgets\DetailView;
    use app\helpers\Helper;
    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Фото галерея';
$this->params['breadcrumbs'][] = ['label' => 'Фото галерея', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row cm-fix-height">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?= Breadcrumbs::widget([
                    'homeLink' => ['label' => 'Главная', 'url' => '/admin'],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])
                ?>
                <p>
                    <?= Html::a('Редактировать', ['update', 'id' => $model->photo_services_id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->photo_services_id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы действительно хотите удалить данный пункт меню?',
                            'method' => 'post',
                        ],]) 
                    ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        [
                            'attribute' => 'photo_services_id_name',
                            'value' => $model->basicServices->basic_services_name,
                        ],
                    ],
                ]) ?>

                <?php $images = $model->getImages(); ?>  
                <?php if (isset($images)) : ?>
                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                            <div class="alert alert-info alert-dismissible fade in shadowed" role="alert">
                                <i class="fa fa-fw fa-info-circle"></i> Прикрепленные фотографии к услуге <strong></strong>
                            </div>
                            <div class="row">
                                <?php foreach ($images as $image) : ?>
                                    <div class="col-md-3">
                                        <?= Html::img('@web/images/upload/store/' . $image->filePath, ['alt' => '', 'width' => '100']) ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>                        
                        </div>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>