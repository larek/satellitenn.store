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
			<?= Yii::$app->controller->renderPartial('_sideMenu');?>
		</div>
		<div class="col-md-9">
			<?= $model->content?>
		</div>
	</div>

</div>
