<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Satellitenn Store';
?>

<div class="row">
<?= ListView::widget([
	'dataProvider' => $dataProvider,
	'itemView' => '_itemProduct'
]);?>
</div>