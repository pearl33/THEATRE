<?php

use yii\helpers\Html;


$this->title = 'Create Screening';
$this->params['breadcrumbs'][] = ['label' => 'screening', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="screening-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
