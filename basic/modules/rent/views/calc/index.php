<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\modules\rent\models\CalcSearch $searchModel
 */

$this->title = 'Калькулятор';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calc-index">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            [
                'format' => 'raw',
                'value' => function($data){
                    return Html::a($data->title,['update','id' => $data->id]);
                }
            ],
            'value'

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
