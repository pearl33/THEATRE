<?php

use yii\helpers\Html;


$this->title = 'Create Movie';
$this->params['breadcrumbs'][] = ['label' => 'movie', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
