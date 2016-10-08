<?
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => $category->title,'url' => ['site/category','id' => $category->url]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="content">
            <h1><?= $this->title?></h1>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
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
                    <p><span class="btn btn-default btn-add" id='<?= $model->id?>'>В корзину</span></p>
                </div>
                <div class="col-md-6">
                    <?= Html::img('/uploads/'.$model->photo, ['class' => 'img img-responsive'])?>
                </div>
            </div>
        </div>
    </div>
</div>
