<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\CartSetting $model
 */

$this->title = 'Настройки корзины';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-setting-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="alert alert-info">
    	Введите значения через ;
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
