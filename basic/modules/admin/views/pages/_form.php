<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\Pages $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?//= $form->field($model, 'parent_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'content')->widget(TinyMce::className(), [
                'options' => ['rows' => 20],
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

    <?//= $form->field($model, 'url')->textInput(['maxlength' => 250]) ?>

    <?//= $form->field($model, 'seo_title')->textInput(['maxlength' => 250]) ?>

    <?//= $form->field($model, 'seo_description')->textarea(['rows' => 6]) ?>

    <?//= $form->field($model, 'seo_keywords')->textInput(['maxlength' => 250]) ?>

    <?//= $form->field($model, 'type')->textInput(['maxlength' => 250]) ?>

    <?//= $form->field($model, 'dateCreated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
