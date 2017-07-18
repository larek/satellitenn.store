<?php
/**
 * @var yii\web\View $this
 */
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
$this->title = 'Производство';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css');
?>
<div class="content content-margin">
    <div class="row">
    <div class="col-md-12">
    <h1><?= $this->title?></h1>
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?= Yii::$app->controller->renderPartial('_sideMenu'); ?>
        </div>

        <div class="col-md-9">
            <p>Очень часто автолюбители сталкиваются с<span class="symbols">&nbsp;</span>проблемой недостатка места для <strong>перевозки груза</strong> в<span class="symbols">&nbsp;</span>своем автомобиле. Особенно актуальна эта тема для владельцев небольших
                <a data-fancybox href="/images/images/11.jpg"><img style="margin-left: 10px; margin-bottom: 10px; float: right;" alt="11" src="/images/images/11.jpg" height="223" width="350"></a>автомобилей, основной "средой <span class="symbols"></span>обитания"<span class="symbols"></span> которых являются городские улицы. К неоспоримыми преимуществам таких авто относятся высокая маневренность, низкий расход топлива, минимальные требования к<span class="symbols">&nbsp;</span>размеру парковочного места.</p>
            <p>Однако, если возникает необходимость отправиться на<span class="symbols">&nbsp;</span>таком<strong> автомобиле в<span class="symbols">&nbsp;</span>дальнее путешествие</strong>, или просто перевезти достаточно большое количество груза, то<span class="symbols">&nbsp;</span>штатного <strong>багажного отделения</strong> категорически не<span class="symbols">&nbsp;</span>хватает.</p>
            <p>Решить эту проблему можно, поместив часть груза в<span class="symbols">&nbsp;</span>салоне автомобиля. Но<span class="symbols">&nbsp;</span>тогда любимая теща отправится на<span class="symbols">&nbsp;</span>дачу рейсовым автобусом, что чревато серьезными неприятностями. Можно разместить груз непосредственно на<span class="symbols">&nbsp;</span>крыше автомобиля, прикрепив его веревками, однако последствия такого способа перевозки могут <span class="symbols">«</span>влететь<span class="symbols">»</span> владельцу авто в<span class="symbols">&nbsp;</span>копеечку. И<span class="symbols"> </span>устранение царапин на<span class="symbols">&nbsp;</span>крыше собственного автомобиля тут не<span class="symbols">&nbsp;</span>самое страшное, гораздо хуже, если при движении авто груз сорвется и<span class="symbols">&nbsp;</span>угодит в<span class="symbols">&nbsp;</span>автомобиль, едущий позади.</p>
            <p>
                <a data-fancybox href="/images/images/12.jpg"><img style="margin-left: 0px; margin-bottom: 10px; margin-right: 10px; float: left;" alt="white460_2" src="/images/images/12.jpg" height="263" width="350"></a>Наиболее<span class="symbols">&nbsp;</span>же цивилизованным способом <strong>увеличения багажного пространства</strong> является применение специального устройства, называемого <strong>автомобильным боксом</strong>. Корпус такого <strong>бокса</strong>, как правило, изготовлен из<span class="symbols">&nbsp;</span>прочного АБС<span class="symbols">&nbsp;</span><span class="symbols">—</span> пластика. Сам <strong>бокс</strong> имеет систему запирания, механизм поднятия верхней крышки и<span class="symbols">&nbsp;</span>крепления самого бокса к<span class="symbols">&nbsp;</span>поперечинам <strong>багажника автомобиля</strong>. Система запирания обеспечивает блокировку крышки в<span class="symbols">&nbsp;</span>закрытом положении в<span class="symbols">&nbsp;</span>нескольких точках и<span class="symbols">&nbsp;</span>имеет замок для предотвращения несанкционированного доступа.</p>
            <p><strong>Бокс</strong> обладает аэродинамической формой, имеет несколько основных и безграничное множество дополнительных вариантов окраски.</p>
            <p><strong>Автомобильный бокс</strong> - это не просто полезное дополнение, это стильный атрибут, привлекающий внимание к Вашему автомобилю.</p>
        </div>
    </div>
</div>
