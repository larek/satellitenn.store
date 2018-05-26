<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row">

    <div class="col-md-6 text-center">    
        <h1><?= $this->title?></h1>
    </div>
    <div class="col-md-6 text-center">    
        <div class="header_contact">
            <span><i class="fa fa-phone" aria-hidden="true"></i> <?= $model->phone1?></span>
            <br>
            <span><i class="fa fa-mobile-phone" aria-hidden="true"></i> <?= $model->phone2?></span>
            <br>
            <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $model->city?> <br><?= $model->address?></span>
        </div>
    </div>
</div>
<br>
<div class="row">
<div class="alert alert-info alert-info-empty"></div>

    <div class="col-md-6">
        <div class="fotorama"
             data-width="100%"
             data-ratio="600/400"
             data-transition='crossfade'
             data-autoplay='7000'
             data-nav='false'
             data-arrows='false'>
             <?
             foreach($slides as $item){
                echo Html::img("/uploads/600x400/".$item->image);
             }
             ?>
         
         
        </div>
    </div>
<div class="col-md-6">
    <div class='alert alert-warning alert-warning-satellite'> 
        <?= $model->maintext?>
    </div>
</div>


</div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Условия аренды</h4>
                </div>
                <div class="modal-body">

                    <?= $model->rules?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class='alert alert-info alert-info-satellite'>1. Выберите автобокс</div>
    <div class="row">

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="thumbnail">
                <div class="color-img-wrapper">
                    <img class='color-img-400 color-img img-responsive' src="/images/prokat400.jpg" alt="...">
                </div>
                <div class="caption">
                    <h3>Автобокс "Satellite 400"</h3>
                    <table class="table table-striped">

                        <tr>
                            <td>Объем</td>
                            <td>400 литров</td>
                        </tr>
                        <tr>
                            <td>Габариты</td>
                            <td>139x90x38</td>
                        </tr>
                        <tr>
                            <td>Масса</td>
                            <td>12 кг</td>
                        </tr>
                        <tr>
                            <td>Грузоподъемность</td>
                            <td>до 60 кг.</td>
                        </tr>
                    </table>

                    <p><span class="btn btn-default btn-color" id='400' role="button">Выбрать</span></p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="thumbnail">
                <div class="color-img-wrapper">
                    <img class='color-img-460 color-img img-responsive' src="/images/prokat460.jpg" alt="...">
                </div>
                <div class="caption">
                    <h3>Автобокс "Satellite 460"</h3>
                    <table class="table table-striped">

                        <tr>
                            <td>Объем</td>
                            <td>460 литров</td>
                        </tr>
                        <tr>
                            <td>Габариты</td>
                            <td>175x82x45</td>
                        </tr>
                        <tr>
                            <td>Масса</td>
                            <td>13 кг</td>
                        </tr>
                        <tr>
                            <td>Грузоподъемность</td>
                            <td>до 60 кг.</td>
                        </tr>
                    </table>

                    <p><span class="btn btn-default btn-color" id='460' role="button">Выбрать</span></p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="thumbnail">
                <div class="color-img-wrapper">
                    <img class='color-img-520 color-img img-responsive' src="/images/prokat520.jpg" alt="...">
                </div>
                <div class="caption">
                    <h3>Автобокс "Satellite 520"</h3>
                    <table class="table table-striped">

                        <tr>
                            <td>Объем</td>
                            <td>520 литров</td>
                        </tr>
                        <tr>
                            <td>Габариты</td>
                            <td>195x78x43</td>
                        </tr>
                        <tr>
                            <td>Масса</td>
                            <td>15 кг</td>
                        </tr>
                        <tr>
                            <td>Грузоподъемность</td>
                            <td>до 60 кг.</td>
                        </tr>
                    </table>

                    <p><span class="btn btn-default btn-color" id='520' role="button">Выбрать</span></p>
                </div>
            </div>
        </div>

         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="thumbnail">
                <div class="color-img-wrapper">
                    <img class='color-img-900 color-img img-responsive' src="/images/prokat900.jpg" alt="...">
                </div>
                <div class="caption">
                    <h3>Автобокс "Thule Atlantis 900"</h3>
                    <table class="table table-striped">

                        <tr>
                            <td>Объем</td>
                            <td>650 литров</td>
                        </tr>
                        <tr>
                            <td>Габариты</td>
                            <td>235x90x46</td>
                        </tr>
                        <tr>
                            <td>Масса</td>
                            <td>26 кг</td>
                        </tr>
                        <tr>
                            <td>Грузоподъемность</td>
                            <td>до 60 кг.</td>
                        </tr>
                    </table>

                    <p><span class="btn btn-default btn-color" id='900' role="button">Выбрать</span></p>
                </div>
            </div>
        </div>

    </div>


    <div class="panel panel-default">
      <div class="panel-heading">Дополнительные аксессуары. Для уточнения наличия и стоимости аренды дополнительных аксессуаров, пожалуйста, свяжитесь с нашим специалистом по телефону.</div>
      <div class="panel-body">
        <? foreach($product as $item){

        ?>
        <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="thumbnail">
                <div class="color-img-wrapper">
                    <img class='color-img-900 color-img img-responsive' src="/uploads/300x200/<?= $item->image?>" alt="...">
                </div>
                <div class="caption">
                    <h5><?= $item->title?></h5>
                </div>
            </div>
        </div>

        <?
        } ?>
      </div>
    </div>

    

    <div class="alert alert-info alert-info-satellite">
        2. Необходимость аренды поперечин?
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <img src="/images/bez_pop.jpg" class='img-responsive' alt="">
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <h4>Да, мне нужны поперечины</h4>
                <span class='btn btn-default btn-sm btn-place' id='1'>Выбрать</span>
            </div>
        </div>
           <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <img src="/images/pop.jpg" class='img-responsive' alt="">
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <h4>Нет, мне не нужны поперечины</h4>
                <span class='btn btn-default btn-sm btn-place' id='2'>Выбрать</span>
            </div>
        </div>

    </div>
    <br><br>

    <div class="alert alert-info alert-info-satellite">
        3. Даты аренды    
    </div>
    <div class="row">
        

                
                <div class="input-daterange" id="datepicker">
                    <div class="col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i> От</span>
                            <input type="text" class="input-sm form-control date-to" name="start" placeholder='Начало аренды' />
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i> До</span>
                            <input type="text" class="input-sm form-control date-from" name="end" placeholder="Конец аренды" />
                        </div>
                    </div>
               </div>
                
        

    </div>
    
    <br><br>

        <div class="row">
        
        <div class="col-xs-12 col-ms-12 col-sm-12 text-center controls">
            <div class="checkbox">
                <label>
                  <input type="checkbox" class='checkRules'> C <span class='btn-rules'>условиями аренды</span> оборудования ознакомлен
                </label>
              </div>
        </div>
        <div class="col-xs-12 col-ms-12 col-sm-12 text-center controls">
            
            <a id="btn-fblogin" class="btn btn-primary btn-lg btn-calc"><i class="fa fa-check" aria-hidden="true"></i> Расчитать стоимость</a>
        </div>
        </div>

<br><br>

<!-- Modal -->
<div class="modal fade resultCalculator" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
      <!-- modal body -->
    <div class="row">
        <div class="col-md-12">
        <table class='table table-striped table-bordered'>
            <tbody>
                <tr>
                    <th colspan='2' class='text-center'>
                        Ваш выбор
                    </th>
                </tr>
                <tr>
                    <td>Автобокс</td>
                    <td><span class="activeBox"></span></td>
                </tr>
                <tr>
                    <td>Прокат поперечин</td>
                    <td><span class="activePlace"></span></td>
                </tr>
                <tr>
                    <td style='width:50%'>Срок аренды</td>
                    <td><span class="rangeDay"></span></td>
                </tr>
                
                <tr>
                    <td colspan='2' class='text-center'>
                        <span class="priceRent"></span>
                    </td>
                </tr>
               
            </tbody>
        </table>
    </div>
        
        
        
        
    
    <br><br>
    <div class="col-md-12">
        <div class="alert alert-info alert-info-satellite">Заполните данные о себе и о вашем автомобиле</div>
    </div>
    <form id="loginform" class="form-horizontal" role="form">

        <div class="col-md-6">
            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                <input id="login-username" type="text" class="form-control userName" name="username" value="" placeholder="ФИО*">
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                <input id="login-username" type="tel" class="form-control userPhone" name="username" value="" placeholder="Телефон*">
            </div>

        </div>

        <div class="col-md-6">

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
                <input id="login-username" type="text" class="form-control userMarka" name="username" value="" placeholder="Марка автомобиля">
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
                <input id="login-username" type="text" class="form-control userModel" name="username" value="" placeholder="Модель автомобиля">
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
                <input id="login-username" type="text" class="form-control userYear" name="username" value="" placeholder="Год выпуска автомобиля">
            </div>

            

            <div style="margin-bottom: 25px" class="input-group">
                
            </div>

        </div>



            <div class="col-xs-12 col-ms-12 col-sm-12 text-center controls">
                <a id="btn-fblogin" class="btn btn-primary btn-lg btn-rent"><i class="fa fa-check" aria-hidden="true"></i> Забронировать</a>
            </div>

    </form>

    </div>
    <!-- end modal body -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
    

    <!-- Alert Modal -->
<div class="modal fade modalAlert" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body alertContent">
                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<!-- Rules Modal -->
<div class="modal fade modalRules" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Правила аренды автобоксов</h4>
      </div>
      <div class="modal-body ">
                    <?= $model->rules?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
<div class="col-md-12">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A19ad4064194d7b02b67b8db622c555228de9a7b9f58179528626dc04047096c4&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
</div>
</div>
<br><br>
   <div class='row text-center'>
       <a href='http://satellitenn.store' class="btn btn-default">Хочу купить</a>
   </div>

    
