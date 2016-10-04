<?
use yii\helpers\Html;
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => $category->title,'url' => ['site/category','id' => $category->url]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<h1><?= $this->title?></h1>
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
		<span class="btn btn-default btn-add" id='<?= $model->id?>'>В корзину</span>
	</div>
	<div class="col-md-6">
		<?= Html::img('/uploads/'.$model->photo, ['class' => 'img img-responsive'])?>
	</div>
</div>