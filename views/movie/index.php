<?php 

use yii\helpers\Html;


$this->title = "MOVIES";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create a movie.</span>
<?php else: ?>
<span class="pull-right">
        <?= Html::a('Create Movie', ['create'], ['class' => 'btn btn-success']) ?>
        <span>
        <?php endif; ?>
    
<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Genre</th>
        <th>Director</th>
        <th>Cast</th>
        <th>Description</th>
        <th>Duration</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->title, ['/movie/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->genre ?></td>
        <td><?= $model->director ?></td>
        <td><?= $model->cast ?></td>
        <td><?= $model->description ?></td>
        <td><?= $model->duration ?></td>
    </tr>
    <?php endforeach; ?>
</table>
