<?
use yii\helpers\Html;
?>
<div class="row">
	<h1><?= $model->title?></h1>
</div>
<div class="row">
	<div class="col-md-6">
		<table class="table table-striped">
			<tr>
				<td>Описание</td>
				<td><?= $model->description?></td>
			</tr>
			<tr>
				<td>Цена</td>
				<td><?= $model->price?></td>
			</tr>
		</table>
		<span class="btn btn-default">Купить</span>
	</div>
	<div class="col-md-6">
		<?= Html::img('/uploads/'.$model->photo, ['class' => 'img img-responsive'])?>
	</div>
</div>