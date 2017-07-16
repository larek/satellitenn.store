<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\rent\models\Slider $model
 */

$this->title = 'Создать слайд';
$this->params['breadcrumbs'][] = ['label' => 'Слайдер', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
