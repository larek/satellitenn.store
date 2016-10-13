<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;


/**
 * @var yii\web\View $this
 * @var app\modules\admin\models\Order $model
 */

$this->title = "Заказ №".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'contact',
            'date',
            //'secret_key',
            //'city',
            //'ip',
        ],
    ]) ?>
    
    <div class="row">

        <div class="col-md-12">
        <h3>Товары в заказе</h3>
             <?= ListView::widget([
                'dataProvider' => $model->getProductsDataProvider($model->id),
                'itemView' => '_itemProduct',
            ]);?>
         </div>
    </div>
</div>
