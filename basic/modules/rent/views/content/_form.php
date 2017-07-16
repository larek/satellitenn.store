<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;


/**
 * @var yii\web\View $this
 * @var app\modules\rent\models\Content $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'phone1')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'phone2')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 250]) ?>


    <?= $form->field($model, 'maintext')->widget(TinyMce::className(), [
        'options' => ['rows' => 10],
        'language' => 'ru',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste",
                "textcolor colorpicker"
            ],
            'toolbar' => "fontsizeselect | forecolor backcolor | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

    <?= $form->field($model, 'rules')->widget(TinyMce::className(), [
        'options' => ['rows' => 10],
        'language' => 'ru',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste",
                "textcolor colorpicker"
            ],
            'toolbar' => "fontsizeselect | forecolor backcolor | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
