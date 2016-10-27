<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Category;
use app\modules\admin\models\Vendor;
use yii\helpers\ArrayHelper;
use dosamigos\tinymce\TinyMce;


/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\Product $model
 * @var yii\widgets\ActiveForm $form
 */
?>


<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-md-4">
        
        <?
        $categoryItems = ArrayHelper::map(Category::find()->all(),'id','title');
        $categoryItems[0] = 'Выберете категорию';
        ksort($categoryItems);
        echo $form->field($model, 'category_id')->dropDownList($categoryItems) ?>
        
        <? 
        $vendorItems = ArrayHelper::map(Vendor::find()->all(),'id','title');
        array_unshift($vendorItems, 'Выберите производителя');
        echo $form->field($model, 'vendor_id')->dropDownList($vendorItems); ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => 250]) ?>

        <?= $form->field($model, 'skuVendor')->textInput(['maxlength' => 250]) ?>

        <?//= $form->field($model, 'sku')->textInput(['maxlength' => 250]) ?>
        <?= $form->field($model, 'priceVendor')->textInput() ?>

        <?= $form->field($model, 'price')->textInput() ?>

        <?= $form->field($model, 'available')->checkbox() ?>

        <?= $form->field($model, 'active')->checkbox() ?>
</div>
<div class="col-md-8">
        <?
        echo $model->photo && $model->photo!=="" ? Html::img("/uploads/300x200/".$model->photo) : "";
        ?>
        <?= $form->field($model, 'photo')->fileInput() ?>

        <?= $form->field($model, 'description')->widget(TinyMce::className(), [
                'options' => ['rows' => 6],
                'language' => 'ru',
                'clientOptions' => [
                    'plugins' => [
                        "advlist autolink lists link charmap print preview anchor",
                        "searchreplace visualblocks code fullscreen",
                        "insertdatetime media table contextmenu paste"
                    ],
                    'toolbar' => "fontsizeselect | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                ]
            ]);
        ?>

        

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
