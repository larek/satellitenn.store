<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\modules\rent\models\Calc $model
 */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Калькулятор', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'value',
        ],
    ]) ?>

</div>
