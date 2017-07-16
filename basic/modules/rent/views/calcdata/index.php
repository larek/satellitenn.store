<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\modules\rent\models\CalcdataSearch $searchModel
 */

$this->title = 'Calcdatas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calcdata-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Calcdata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'a',
            'b',
            'c',
            'd',
            // 'e',
            // 'f',
            // 'g',
            // 'h',
            // 'i',
            // 'j',
            // 'k',
            // 'l',
            // 'm',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
