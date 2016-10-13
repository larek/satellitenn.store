<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\modules\admin\models\OrderSearch $searchModel
 */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'contact',
            'date',
            //'secret_key',
            // 'city',
            // 'ip',
            [
                'format' => 'raw',
                'value' => function($data){
                    return Html::a('Подробнее',['order/view', 'id' => $data->id], ['class' => 'btn btn-default btn-xs']);
                }
            ]

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
