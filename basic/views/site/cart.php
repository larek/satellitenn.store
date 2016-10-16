<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->title = 'Корзина товаров';
$this->params['breadcrumbs'][] = $this->title;

?>


        <div class="content content-margin">
            <h1><?= $this->title?></h1>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <div class="row">
                <div class="col-md-7">
                    <?
                    foreach($model as $item){
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
								<span class='btn btn-default btn-remove' id='<?= $item->id?>'><i class='fa fa-trash'></i></span>
							</div>
						</div>
                       <?
                   }
                    ?>
                </div>
                <div class="col-md-4 col-xs-4">
                    <p>Чтобы купить выбранные товары, уточнить наличие или получить консультацию, укажите Ваше имя, номер телефона или адрес электронной почты. Мы скоро свяжемся с Вами!</p>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon3">Имя</span>
                        <input type="text" class="form-control cart-name cart-require" aria-describedby="sizing-addon3">
                    </div>
                    <br>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon" id="sizing-addon3">Email или телефон</span>
                        <input type="text" class="form-control cart-contact cart-require" aria-describedby="sizing-addon3">
                        <input type="hidden" id="city" value="Нижний Новгород">
                    </div>
                    <br>
                    <span class="btn btn-default btn-order">Оформить заказ</span>
                </div>
            </div>
        </div>


