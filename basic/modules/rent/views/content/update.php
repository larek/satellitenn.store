<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\rent\models\Content $model
 */

$this->title = 'Update Content: ' . $model->title;
$this->params['breadcrumbs'][] = 'Контент';
?>
<div class="content-update">

    <h1>Обновление контента</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
