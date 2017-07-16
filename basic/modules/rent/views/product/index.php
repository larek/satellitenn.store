<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\modules\rent\models\SliderSearch $searchModel
 */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">

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

            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img('/uploads/300x200/'.$data->image, ['style' => 'width:100px']);
                }
            ],
            [
                'attribute' => 'title',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a($data->title,['update','id'=>$data->id]);
                }
            ],
            // 'content:ntext',
            // 'guid',
            // 'order_id',
            // 'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
