<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\ProductSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'vendor_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'skuVendor') ?>

    <?php // echo $form->field($model, 'sku') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'priceVendor') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'available') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
