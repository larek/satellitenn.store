<?php
use yii\widgets\ListView;
use app\components\Filters;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */

$this->title = "Поиск: ". $url;
$this->params['breadcrumbs'][] = $this->title;
$this->params['search-query'][] = $url;
?>
<div class="animated fadeinup delay-1">
	<div class="p-20">
		<div class="news">
			<div class="content content-margin">
				<h1><?= $this->title?></h1>
				<?//= Breadcrumbs::widget([
				//'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
				//]) ?>
				
						<?= ListView::widget([
						'dataProvider' => $dataProvider,
						'itemView' => '_itemProduct',
						'viewParams' => ['cart' => $cart]
						]);?>
					
			</div>
		</div>
	</div>
</div>