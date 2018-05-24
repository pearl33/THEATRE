<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Screening: $model->movie_id";
$this->params['breadcrumbs'][] = ['label'=>'screening', 'url'=>['/screening/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
<span class="pull-right">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this post?',
                'method' => 'post',
            ],
        ]) ?>
        </span>
    </p>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'movie_id',
        'halls_id',
        'scr_date',
        'scr_start',
        'scr_end'
    ]
]);