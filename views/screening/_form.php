<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Halls;
use app\models\Movie;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use dosamigos\datepicker\DatePicker;

?>

<div class="screening-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'movie_id')->dropDownList(ArrayHelper::map(
            Movie::find()->asArray()->all(), 'id','title'))?>

    <?= $form->field($model, 'halls_id')->dropDownList(ArrayHelper::map(
            Halls::find()->asArray()->all(), 'id','title'))?>

    <div class="form-group">
    <label for="scr_date">Screening Date</label>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'scr_date',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <?= $form->field($model, 'scr_start')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'scr_end')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
	