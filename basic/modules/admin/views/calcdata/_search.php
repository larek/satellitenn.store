<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\CalcdataSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="calcdata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'a') ?>

    <?= $form->field($model, 'b') ?>

    <?= $form->field($model, 'c') ?>

    <?= $form->field($model, 'd') ?>

    <?php // echo $form->field($model, 'e') ?>

    <?php // echo $form->field($model, 'f') ?>

    <?php // echo $form->field($model, 'g') ?>

    <?php // echo $form->field($model, 'h') ?>

    <?php // echo $form->field($model, 'i') ?>

    <?php // echo $form->field($model, 'j') ?>

    <?php // echo $form->field($model, 'k') ?>

    <?php // echo $form->field($model, 'l') ?>

    <?php // echo $form->field($model, 'm') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
