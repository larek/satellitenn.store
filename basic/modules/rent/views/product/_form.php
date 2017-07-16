<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\modules\rent\models\Slider $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="slider-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 250]) ?>

    <?//= $form->field($model, 'content')->textInput() ?>

    <?//= $form->field($model, 'guid')->textInput(['maxlength' => 250]) ?>

    <?//= $form->field($model, 'order_id')->textInput() ?>
    <?
        echo $model->image && $model->image!=="" ? Html::img("/uploads/300x200/".$model->image) : "";
        ?>
    <?= $form->field($model, 'image')->fileInput(['maxlength' => 250]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
