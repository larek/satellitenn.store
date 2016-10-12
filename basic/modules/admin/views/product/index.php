<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\modules\admin\models\ProductSearch $searchModel
 */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            [
                'attribute' => 'category_id',
                'format' => 'raw',
                'value' => function($data){
                    return $data->category_id == 0 ? 'Без категории' : $data->category->title;
                     
                }
            ],
            [
                'attribute' => 'vendor_id',
                'format' => 'raw',
                'value' => function($data){
                    return $data->vendor_id == 0 ? 'Производитель не выбран' : $data->vendor->title;
                }
            ],
            'skuVendor',
            // 'sku',
            // 'photo',
            // 'description:ntext',
            // 'priceVendor',
            // 'price',
            // 'available',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
