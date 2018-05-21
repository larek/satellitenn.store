<?php
/**
 * @var yii\web\View $this
 */
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css');
?>
<div class="animated fadeinup delay-1">
<div class="p-20">
<div class="content content-margin">
    <div class="row">
    <div class="col-md-12">
    <h1><?= $this->title?></h1>

    </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
          <a data-fancybox='group' href='/images/about-1.jpg'>
            <img src='/images/about-1.jpg' class='img-responsive thumbnail' />
          </a>
        </div>
        <div class="col-xs-6">
          <a data-fancybox='group' href='/images/about-2.jpg'>
            <img src='/images/about-2.jpg' class='img-responsive thumbnail' />
          </a>
        </div>
        <div class="col-xs-6">
          <a data-fancybox='group' href='/images/about-3.jpg'>
            <img src='/images/about-3.jpg' class='img-responsive thumbnail' />
          </a>
        </div>
      </div>
      <div class='row'>
        <div class="col-md-12">
          <p>Очень часто автолюбители сталкиваются с&nbsp;проблемой недостатка места для <strong>перевозки груза</strong> в&nbsp;своем автомобиле. Особенно актуальна эта тема для владельцев небольших автомобилей, основной "средой обитания" которых являются городские улицы. К неоспоримыми преимуществам таких авто относятся высокая маневренность, низкий расход топлива, минимальные требования к&nbsp;размеру парковочного места.</p> <p>Однако, если возникает необходимость отправиться на&nbsp;таком<strong> автомобиле в&nbsp;дальнее путешествие</strong>, или просто перевезти достаточно большое количество груза, то&nbsp;штатного <strong>багажного отделения</strong> категорически не&nbsp;хватает.</p>
          <p>Решить эту проблему можно, поместив часть груза в&nbsp;салоне автомобиля. Но&nbsp;тогда любимая теща отправится на&nbsp;дачу рейсовым автобусом, что чревато серьезными неприятностями. Можно разместить груз непосредственно на&nbsp;крыше автомобиля, прикрепив его веревками, однако последствия такого способа перевозки могут &laquo;влететь&raquo; владельцу авто в&nbsp;копеечку. И устранение царапин на&nbsp;крыше собственного автомобиля тут не&nbsp;самое страшное, гораздо хуже, если при движении авто груз сорвется и&nbsp;угодит в&nbsp;автомобиль, едущий позади.</p>
          <p>Наиболее&nbsp;же цивилизованным способом <strong>увеличения багажного пространства</strong> является применение специального устройства, называемого <strong>автомобильным боксом</strong>. Корпус такого <strong>бокса</strong>, как правило, изготовлен из&nbsp;прочного АБС&nbsp;&mdash; пластика. Сам <strong>бокс</strong> имеет систему запирания, механизм поднятия верхней крышки и&nbsp;крепления самого бокса к&nbsp;поперечинам <strong>багажника автомобиля</strong>. Система запирания обеспечивает блокировку крышки в&nbsp;закрытом положении в&nbsp;нескольких точках и&nbsp;имеет замок для предотвращения несанкционированного доступа.</p>
          <p><strong>Бокс</strong> обладает аэродинамической формой, имеет несколько основных и безграничное множество дополнительных вариантов окраски.</p>
          <p><strong>Автомобильный бокс</strong> - это не просто полезное дополнение, это стильный атрибут, привлекающий внимание к Вашему автомобилю.</p>
        </div>
    </div>
</div>
</div>
</div>
