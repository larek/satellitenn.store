<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->title = 'Корзина товаров';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">
    <div class="col-md-12">
        <div class="content">
            <h1><?= $this->title?></h1>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <div class="row">
                <div class="col-md-7">

                    <?
                    foreach($model->products as $item){
                       ?>
						<div class="row cart_item">
							<div class="col-md-2">
								<img src="/uploads/300x200/<?= $item->photo?>" style='width:50px;'>
							</div>
							<div class="col-md-8">
								<?= Html::a($item->title,['site/product', 'id' => $item->url])?>
								<br>
								<span><?= $item->price?></span>
							</div>
							<div class="col-md-2">
								
							</div>
						</div>
                       <?
                   }
                    ?>
                </div>
                <div class="col-md-4 col-xs-4">
                    <h3>Заказ №<?= $model->id?></h3>
                    <p>Мы получили ваш заказ. В ближайшее время мы свяжемся с вами для уточнения деталей.</p> 
                </div>
            </div>
        </div>
    </div>
</div>

