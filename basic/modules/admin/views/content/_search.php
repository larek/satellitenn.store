<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\ContentSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'phone1') ?>

    <?= $form->field($model, 'phone2') ?>

    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'maintext') ?>

    <?php // echo $form->field($model, 'rules') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
