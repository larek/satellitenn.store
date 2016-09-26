<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\Calcdata $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="calcdata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'a')->textInput() ?>

    <?= $form->field($model, 'b')->textInput() ?>

    <?= $form->field($model, 'c')->textInput() ?>

    <?= $form->field($model, 'd')->textInput() ?>

    <?= $form->field($model, 'e')->textInput() ?>

    <?= $form->field($model, 'f')->textInput() ?>

    <?= $form->field($model, 'g')->textInput() ?>

    <?= $form->field($model, 'h')->textInput() ?>

    <?= $form->field($model, 'i')->textInput() ?>

    <?= $form->field($model, 'j')->textInput() ?>

    <?= $form->field($model, 'k')->textInput() ?>

    <?= $form->field($model, 'l')->textInput() ?>

    <?= $form->field($model, 'm')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
