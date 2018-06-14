<?php

    use yii\helpers\Html;
    use yii\widgets\DetailView;
    use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TextBlocks */

$this->title = Yii::$app->params['admin_panel_name'] . ' ' . 'Текстовые блоки';
$this->params['breadcrumbs'][] = ['label' => 'Текстовые блоки', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Просмотр блока - ' . $model->text_blocks_name;

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
                    <?= Html::a('Редактировать', ['update', 'id' => $model->text_blocks_id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->text_blocks_id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы действительно хотите удалить данный блок?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'text_blocks_name',
                        [
                            'attribute' => 'text_blocks_text',
                            'value' => $model->text_blocks_text,
                            'format' => 'raw',
			],
                        'text_block_alias',
                    ],
                ]) ?>
            
            </div>
        </div>
    </div>
</div>
