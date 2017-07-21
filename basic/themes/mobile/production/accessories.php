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
			<p><span><a data-fancybox href="/images/images/3.jpg"><img style="margin-right: 10px; float: left;" title="Сумки для автобоксов" alt="сумки" src="/images/images/3.jpg" height="188" width="350"></a>Сумки "Satellite" – созданы для удобной перевозки вещей в автомобильном боксе. Наши сумки максимально облегчат загрузку вещей и значительно упростят Ваши сборы в путешествие. Сумка, по своим габаритам, совпадает с размерами, как боксов нашего производства, так и с габаритами боксов других производителей. Изделия выполнены из высококачественных тканей, обладают водоотталкивающими свойствами и повышенной износоустойчивостью.</span></p>
			<p><span>Сумки "Satellite" имеют два варианта исполнения: основная (прямоугольной формы) и носовая (имеет оптимальную форму для размещения в носовой части бокса). Качество, плотность и структура используемых тканей и материалов превосходят по своим свойствам аналогичные изделия других производителей.</span></p>
			<p><span>Стильный дизайн, надежная фурнитура, высочайшее качество материалов позволяют использовать сумки "Satellite" не только для комфортного размещения груза в автомобильном боксе, но и в качестве самостоятельного атрибута для путешествий и занятий спортом.</span></p>
		</div>
	</div>

</div>

</div>
</div>