<?php

    use yii\widgets\Breadcrumbs;

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Новости';
$this->params['breadcrumbs'][] = ['label' => 'Заявки на сервис - Юридические лица', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->records_nameCompany, 'url' => ['view', 'id' => $model->records_id]];
$this->params['breadcrumbs'][] = 'Редактирование заявки - ' . $model->records_nameCompany;
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

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
        
            </div>
        </div>
    </div>
</div>
