<?php
/**
 * @var yii\web\View $this
 */
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
$this->title = 'Аксессуары';
$this->params['breadcrumbs'][] = ['label' => 'Производство', 'url' => ['production/index']];
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
		<div class="col-md-3">
			<?= Yii::$app->controller->renderPartial('_sideMenu');?>
		</div>
		<div class="col-md-9">
					<p style="text-align: justify;">&nbsp;<strong><strong>Приобрести нашу продукцию вы можете в следующих торговых точках: </strong></strong>
			</p>
			<p style="text-align: justify;"><span style="font-size: 14pt;"><strong><strong><strong><strong>Нижний Новгород (от производителя)<br></strong></strong></strong></strong></span></p>
			<ul>
			    <li style="text-align: justify;"><strong><strong><strong>ул. Касьянова, д.6 "В"</strong>,&nbsp;<strong>ИП Нещеретов В. А.&nbsp; тел.: &nbsp;<span style="font-size: 12pt;">424 - 50 - 24</span> моб.: <span style="font-size: 10pt;">+7-910-385-21-44</span></strong></strong>
			        </strong>
			    </li>
			</ul>
			<p style="text-align: center;"><span style="color: #ff0000;"><strong>Необходима предварительная запись по телефону.</strong></span></p>
			<p><span style="font-size: 14pt;"><strong><strong class="tel"><strong><strong><strong><strong><strong><strong><strong><strong><strong>Москва</strong></strong></strong></strong></strong></strong></strong></strong></strong></strong></strong></span></p>
			<ul>
			    <li><strong>Магазин багажных систем "Автобагажники.рф", сайт <a href="http://xn--80aaaceiwqat5ag5c.xn--p1ai/">Автобагажники.рф</a></strong>
			        <br><strong> Адрес:&nbsp;<span data-address="Москва, ул. Проспект Мира 222" data-ids="161848111608634935">Москва, ул. Проспект Мира&nbsp;222</span>, тел. 8-495-984-04-35,&nbsp;8-800-775-03-89</strong></li>
			    <li><strong>Магазин багажных систем "Багажники-автобоксы", сайт&nbsp;<a href="http://www.bagazniki-avtoboxy.ru/" target="_blank" data-vdir-href="https://mail.yandex.ru/re.jsx?uid=185961098&amp;c=LIZA&amp;cv=12.12.6&amp;mid=161848111608634935&amp;h=a,Tai9pXtrBuJmk7rXEFvOQQ&amp;l=aHR0cDovL3d3dy5iYWdhem5pa2ktYXZ0b2JveHkucnUv" data-orig-href="http://www.bagazniki-avtoboxy.ru/">www.bagazniki-avtoboxy.ru</a></strong>
			        <br><strong> Адрес: Москва, ул. Вагоноремонтная д.&nbsp;10, тел. 8-495-236-74-86, 8-800-775-62-37</strong></li>
			    <li><strong>Магазин багажных систем "BOXTEAM", сайт&nbsp;<a href="http://www.boxteam.ru/" target="_blank" data-vdir-href="https://mail.yandex.ru/re.jsx?uid=185961098&amp;c=LIZA&amp;cv=12.12.6&amp;mid=161848111608634935&amp;h=a,l-Xlf-ZBeXXHRoKGRlvh7g&amp;l=aHR0cDovL3d3dy5ib3h0ZWFtLnJ1Lw" data-orig-href="http://www.boxteam.ru/">www.boxteam.ru</a></strong>
			        <br><strong> Адрес: Москва, проезд Добролюбова д. 3 стр.&nbsp;1, тел. 8-495-125-34-34, 8-800-775-35-52</strong></li>
			    <li><strong>Магазин багажных систем "BOXNATION", сайт&nbsp;<a href="http://www.boxnation.ru/" target="_blank" data-vdir-href="https://mail.yandex.ru/re.jsx?uid=185961098&amp;c=LIZA&amp;cv=12.12.6&amp;mid=161848111608634935&amp;h=a,GyhQ7-516kJh8onYZHJ8vA&amp;l=aHR0cDovL3d3dy5ib3huYXRpb24ucnUv" data-orig-href="http://www.boxnation.ru/">www.boxnation.ru</a></strong>
			        <br><strong> Адрес: Москва, Рублевское ш. 68 А&nbsp;стр.2, тел. 8-495-162-88-66, 8-800-775-82-01</strong><em></em></li>
			</ul>
			<p><strong><span class="shop-phone"><strong><span style="font-size: 14pt;"><strong><strong class="tel"><strong><strong><strong><strong><strong><strong><strong><strong><strong>Санкт - Петербург</strong></strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </span>
			    </strong>
			    </span>
			    </strong>
			</p>
			<p>&nbsp;<strong><span class="shop-phone"><strong><strong><strong class="tel"><strong><strong><strong><strong><strong><strong><strong><strong><strong>ул. Дальневосточный пр., д. 1, компания <a href="http://auto-boxs.ru/">"AUTOBOX</a>" ,</strong></strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </span>
			    </strong><span style="font-size: 14pt;"><strong><strong class="tel"><strong><strong><strong><strong><strong><strong><strong><strong><strong>&nbsp;</strong></strong></strong></strong></strong></strong></strong></strong></strong></strong></strong></span><strong><strong class="tel"><strong><strong><strong><strong><strong><strong><strong><strong><strong>+7 (921) 863-07-77</strong></strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			    </strong>
			</p>
			
		</div>
	</div>

</div>
</div>
</div>
