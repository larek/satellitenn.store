<?php
/**
 * @var yii\web\View $this
 */
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
$this->title = 'Галерея';
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
		<div class="">
				<div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (1).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (1).jpg"></a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (2).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (2).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (3).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (3).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (4).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (4).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (5).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (5).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (6).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (6).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (7).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (7).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (8).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (8).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (9).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (9).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (10).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (10).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (11).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (11).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (12).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (12).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (13).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (13).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (14).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (14).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (15).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (15).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (16).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (16).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (17).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (17).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (18).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (18).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (19).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (19).jpg"> </a></div>
	            <div class='col-xs-6'><a href="/images/images/phocagallery/08_01_17 (20).jpg" class="fancybox" data-fancybox="gallery"><img src="/images/images/phocagallery/thumbs/phoca_thumb_m_08_01_17 (20).jpg"> </a></div>
		</div>
	</div>

</div>
</div>
</div>
