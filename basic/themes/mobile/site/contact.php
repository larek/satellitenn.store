<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content content-margin">
  <div class='row'>
    <div class='col-md-12'>
      <h1><?= $this->title?></h1>
      <?= Breadcrumbs::widget([
          'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
      ]) ?>
    </div>
  </div>

  <!-- Contact Block-->
  <div class="row">
    <div class="col-md-12">
      <table class='table'>
        <tbody>
          <tr>
            <td>
              <i class='far fa-user'></i>
            </td>
            <td>
              ИП Нещеретов В.А., ОГРНИП 312526124200041, ИНН 522203936733
            </td>
          </tr>
          <tr>
            <td>
              <i class='fa fa-phone-volume'></i>
            </td>
            <td>
              +7 (831) 424 50 24
            </td>
          </tr>
          <tr>
            <td>
              <i class='fa fa-mobile-alt'></i>
            </td>
            <td>
              +7 (910) 385 21 44 (<i class='fab fa-whatsapp'></i> WhatsApp, <i class='fab fa-viber'></i> Viber, <i class='far fa-comment'></i> SMS)
            </td>
          </tr>
          <tr>
            <td>
              <i class='far fa-envelope'></i>
            </td>
            <td>
              satellitenn@yandex.ru
            </td>
          </tr>
          <tr>
            <td>
              <i class='fab fa-vk'></i>
            </td>
            <td>
              <a href='http://vk.com/satellitenn' target='_blank'>http://vk.com/satellitenn</a>
            </td>
          </tr>
          <tr>
            <td>
              <i class='fas fa-map-marker-alt'></i> 
            </td>
            <td>
              г. Нижний Новгород, ул. Надежды Сусловой 17а
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- End Contact Block -->

  <!-- Map Container -->
  <div class='row'>
    <div class='col-md-12'>
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A74698504bf6864905886c9f5c846faf5f31261f0dc7e20831b8e9d0183f3e566&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
  </div>
  <!-- End Map Container -->

  <!-- Partners Block-->
  <div class="row">
    <div class="col-md-12 text-center">
    </div>
    <div class="col-md-12">
      <table class='table table-striped'>
        <tbody>
          <tr>
            <td colspan='3' class='active text-center'>
              <h5>Так же приобрести нашу продукцию вы можете в следующих торговых точках:</h5>
            </td>
          </tr>
          <tr>
            <td>
              <div class='row'>
                <div class='col-md-4'>Санкт-Петербург,<br/>  ул. Дальневосточный пр., д.1</div>
                <div class='col-md-4'>+7 (921) 863 07 77</div>
                <div class='col-md-4'><a href='http://auto-boxs.ru/' target='_blank'>Компания "AUTOBOX"</a></div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class='row'>
                <div class='col-md-4'>Воронеж,<br/> ул. Текстильщиков, д. 5 "Б" корп. 3<br/>(въезд с ул. Солнечная)</div>
                <div class='col-md-4'>+7 (473) 257 52 51<br/> +7 (920) 229 52 51</div>
                <div class='col-md-4'><a href='https://www.voronezhavto.ru/' target='_blank'>Интернет-магазин "ВоронежАвто.RU"</a></div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- End Partners Block -->
</div>
