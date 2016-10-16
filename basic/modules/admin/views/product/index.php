<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use app\modules\admin\models\Vendor;
use app\modules\admin\models\Category;

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
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            [
                'attribute' => 'category_id',
                'format' => 'raw',
                'value' => function($data){
                    return $data->category_id == 0 ? 'Без категории' : $data->category->title;
                     
                },
                'filter' => Html::activeDropDownList($searchModel, 'category_id', ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'title'),['class'=>'form-control','prompt' => 'Категория']),

            ],
            [
                'attribute' => 'vendor_id',
                'format' => 'raw',
                'value' => function($data){
                    return $data->vendor_id == 0 ? 'Производитель не выбран' : $data->vendor->title;
                },
                'filter' => Html::activeDropDownList($searchModel, 'vendor_id', ArrayHelper::map(Vendor::find()->asArray()->all(), 'id', 'title'),['class'=>'form-control','prompt' => 'Производитель']),

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
