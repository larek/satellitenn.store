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
                
                <div class="col-md-6 col-xs-4">
                    <p>Чтобы купить выбранные товары, уточнить наличие или получить консультацию, укажите Ваше имя, номер телефона или адрес электронной почты. Мы скоро свяжемся с Вами!</p>
                    
                    <div class="input-group-cart">
                        
                        <select name="" id="" class="form-control">
                            <option value="">Выберете способ оплаты</option>
                            <?
                            foreach(explode(";",$cartSetting->method) as $item){
                                echo Html::tag('option',$item,['value' => $item]);
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="input-group-cart">
                       
                        <select name="" id="" class="form-control">
                            <option value="">Выберете метод доставки</option>
                            <?
                            foreach(explode(";",$cartSetting->delivery) as $item){
                                echo Html::tag('option',$item,['value' => $item]);
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="input-group-cart">
                       
                        <input type="text" class="form-control cart-name cart-require" aria-describedby="sizing-addon3" placeholder="Фамилия Имя Отчество">
                    </div>

                    <br>
                    <div class="input-group-cart">
                        
                        <input type="text" class="form-control cart-contact cart-require" aria-describedby="sizing-addon3" placeholder='Email'>
                        
                    </div>
                    <br>
                    <div class="input-group-cart">
                        
                        <input type="text" class="form-control cart-contact cart-require" aria-describedby="sizing-addon3" placeholder='Телефон'>
                        
                    </div>
                    <br>
                    <div class="input-group-cart">
                        
                        <textarea rows='3' type="text" class="form-control cart-comment" aria-describedby="sizing-addon3" placeholder='Комментарий к заказу'></textarea>
                        
                    </div>
                    <br>
                    <span class="btn btn-default btn-order">Оформить заказ</span>
                </div>

                <div class="col-md-6">
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
                                <span><?= number_format($item->price,0," "," ");?> руб.</span>
                            </div>
                            <div class="col-md-2">
                                <span class='btn btn-default btn-remove' id='<?= $item->id?>'><i class='fa fa-trash'></i></span>
                            </div>
                        </div>
                       <?
                   }
                    ?>
                </div>

            </div>
        </div>


