<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\CartSetting $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="cart-setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'method')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'delivery')->textInput(['maxlength' => 250]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
