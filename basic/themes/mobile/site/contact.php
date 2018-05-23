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
              <i class='fa fa-mobile-alt'></i> <i class='fab fa-whatsapp'></i> <i class='fab fa-viber'></i> <i class='far fa-comment'></i>
            </td>
            <td>
              +7 (910) 385 21 44 (WhatsApp, Viber, SMS)
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
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A74698504bf6864905886c9f5c846faf5f31261f0dc7e20831b8e9d0183f3e566&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=false"></script>
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
            <td style='width:50%'>Москва,<br/> ул. Проспект Мира, 222</td>
            <td style='width:20%'>+7 (495) 984 04 35<br/> +7 (800) 775 03 89</td>
            <td style='width:30%'><a href='https://avtobagazniki.ru' target='_blank'>Магазин багажных систем "Автобагажники.рф"</a></td>
          </tr>
          <tr>
            <td>Москва,<br/> ул. Вагоноремонтная, д. 10</td>
            <td>+7 (495) 236 74 86<br/> +7 (800) 775 62 37</td>
            <td><a href='https://bagazniki-avtoboxy.ru/' target='_blank'>Магазин багажных систем "Багажники-автобоксы"</a></td>
          </tr>
          <tr>
            <td>Москва, 18-й км МКАД, г. Дзержинский,<br/> ул. Алексеевская, д. 2А,<br/> ТЦ "Спорт-Экстрим" (цокольный этаж), павильон Ц2</td>
            <td>+7 (495) 125 34 34<br/> +7 (800) 775 35 52</td>
            <td><a href='http://www.boxteam.ru/' target='_blank'>Магазин багажных систем "BOXTEAM"</a></td>
          </tr>
          <tr>
            <td>Москва,<br/> Рублевское ш. 68 А стр.2</td>
            <td>+7 (495) 162 88 66<br/> +7 (800) 775 82 01</td>
            <td><a href='https://boxnation.ru/' target='_blank'>Магазин багажных систем "BOXNATION"</a></td>
          </tr>
          <tr>
            <td>Санкт-Петербург,<br/>  ул. Дальневосточный пр., д.1</td>
            <td>+7 (921) 863 07 77</td>
            <td><a href='http://auto-boxs.ru/' target='_blank'>Компания "AUTOBOX"</a></td>
          </tr>
          <tr>
            <td>Воронеж,<br/> ул. Текстильщиков, д. 5 "Б" корп. 3<br/>(въезд с ул. Солнечная)</td>
            <td>+7 (473) 257 52 51<br/> +7 (920) 229 52 51</td>
            <td><a href='https://www.voronezhavto.ru/' target='_blank'>Интернет-магазин "ВоронежАвто.RU"</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- End Partners Block -->
</div>
