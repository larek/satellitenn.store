<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\rent\models\Calcdata $model
 */

$this->title = 'Калькулятор';
$this->params['breadcrumbs'][] = 'Калькулятор';
?>
<div class="calcdata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
