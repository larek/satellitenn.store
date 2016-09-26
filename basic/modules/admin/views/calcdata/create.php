<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\Calcdata $model
 */

$this->title = 'Create Calcdata';
$this->params['breadcrumbs'][] = ['label' => 'Calcdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calcdata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
