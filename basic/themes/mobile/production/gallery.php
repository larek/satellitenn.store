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
			<div class="row">

				<? foreach($model as $item):?>
				<div class="col-xs-6">
					<a href="/uploads/<?= $item->image?>" class="fancybox" data-fancybox="gallery"><img src="/uploads/300x200/<?= $item->image?>" class='img-thumbnail'></a>
				</div>
				<? endforeach;?>
			
			</div>
		</div>
	</div>

</div>
</div>
</div>
