<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<h1><?= $this->title?></h1>
</div>
<div class="row">
<?= ListView::widget([
	'dataProvider' => $dataProvider,
	'itemView' => '_itemProduct'
]);?>
</div>