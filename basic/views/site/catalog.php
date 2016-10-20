<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\ListView;


$this->title = 'Каталог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content content-margin">
            <h1><?= $this->title?></h1>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <div class="row">
              <?= ListView::widget([
              'dataProvider' => $dataProvider,
              'itemView' => '_itemCategory',
                  'summary' => false
              ]);?>
            </div>
</div>