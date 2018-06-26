<?php

    use yii\helpers\Html;
    use yii\widgets\DetailView;
    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Заявки на сервис';
$this->params['breadcrumbs'][] = ['label' => 'Заявки на сервис - Юридические лица', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Просмотр заявки - ' . $model->records_fullName;
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
                    <?= Html::a('Редактировать', ['update', 'id' => $model->records_id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->records_id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы действительно хотите удалить данный слайд?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
                
                <?php if (Yii::$app->session->hasFlash('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <strong>
                            <?= Yii::$app->session->getFlash('success', false); ?>
                        </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>                    
                    </div>                
                <?php endif; ?>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'records_fullName',
                        'records_date',
                        'records_time',
                        'records_phone',
                        'records_mark',
                        'records_model',
                        'records_year',
                        'records_number',
                        'records_comments',
                    ],
                ]) ?>
                
                
            </div>
        </div>
    </div>
</div>

