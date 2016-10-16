<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\CartSetting $model
 */

$this->title = 'Create Cart Setting';
$this->params['breadcrumbs'][] = ['label' => 'Cart Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-setting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
