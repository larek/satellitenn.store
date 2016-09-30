<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Category;
use app\modules\admin\models\Vendor;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\Product $model
 * @var yii\widgets\ActiveForm $form
 */
?>


<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-md-6">
        
        <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(),'id','title')) ?>
    
        <?= $form->field($model, 'vendor_id')->dropDownList(ArrayHelper::map(Vendor::find()->all(),'id','title')) ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => 250]) ?>

        <?= $form->field($model, 'skuVendor')->textInput(['maxlength' => 250]) ?>

        <?= $form->field($model, 'sku')->textInput(['maxlength' => 250]) ?>
</div>
<div class="col-md-6">
        <?
        echo $model->photo && $model->photo!=="" ? Html::img("/uploads/300x200/".$model->photo) : "";
        ?>
        <?= $form->field($model, 'photo')->fileInput() ?>

        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'priceVendor')->textInput() ?>

        <?= $form->field($model, 'price')->textInput() ?>

        <?= $form->field($model, 'available')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
