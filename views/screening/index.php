<?php 

use yii\helpers\Html;


$this->title = "SCREENING";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create a post.</span>
<?php else: ?>
<span class="pull-right">
        <?= Html::a('Create Screening', ['create'], ['class' => 'btn btn-success']) ?>
        </span>
<?php endif; ?> 
<table class="table table-bordered">
    <tr>
        <th>Movie</th>
        <th>Halls</th>
        <th>Screening date</th>
        <th>Screening Start</th>
        <th>Screening End</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->movie_id, ['/screening/view', 'id'=>$model->id]); ?>
            <td><?= $model->halls_id ?></td>
            <td><?= $model->scr_date ?></td>
            <td><?= $model->scr_start ?></td>
            <td><?= $model->scr_end ?></td>
        </td> 
    </tr>
    <?php endforeach; ?>
</table>
