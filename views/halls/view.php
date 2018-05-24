<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Halls: $model->title";
$this->params['breadcrumbs'][] = ['label'=>'halls', 'url'=>['/halls/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
<span class="pull-right">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this halls?',
                'method' => 'post',
            ],
        ]) ?>
        </span>
    </p>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'title',
        'seats_no'
    ]
]);