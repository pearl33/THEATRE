<?php 

use yii\helpers\Html;


$this->title = "HALLS";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-right">Please <?= Html::a('login',['/site/login'])?> to create a halls.</span>
<?php else: ?>
<span class="pull-right">
        <?= Html::a('Create Halls', ['create'], ['class' => 'btn btn-success']) ?>
        </span>
        <?php endif; ?>
<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Seats Number</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->title, ['/halls/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->seats_no ?></td>
    </tr>
    <?php endforeach; ?>
</table>
