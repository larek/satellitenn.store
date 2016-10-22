<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->title = 'Обратная связь';
$this->params['breadcrumbs'][] = $this->title;

?>


        <div class="content content-margin">
            <h1><?= $this->title?></h1>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <div class="row">
                
                <div class="col-md-6 col-xs-4">
                   
                    
                    
                    
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
                        
                        <textarea rows='3' type="text" class="form-control cart-comment" aria-describedby="sizing-addon3" placeholder='Сообщение'></textarea>
                        
                    </div>
                    <br>
                    <span class="btn btn-default btn-order">Отправить</span>
                </div>

                <div class="col-md-6">
                    
                </div>

            </div>
        </div>


