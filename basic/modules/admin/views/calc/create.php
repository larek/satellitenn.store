<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\Calc $model
 */

$this->title = 'Create Calc';
$this->params['breadcrumbs'][] = ['label' => 'Calcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
