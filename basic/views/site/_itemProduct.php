<?
use yii\helpers\Html;
?>

  <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <?= Html::a(Html::img('/uploads/300x200/'.$model->photo, ['class' => 'img img-responsive']),['site/product','id' => $model->url]);?>
      <div class="caption">
      	<div class="item_title">
        	<h5><?= Html::a($model->title,['site/product', 'id' => $model->url])?></h5>
        </div>
        <p><?= $model->price?></p>
        <span class="btn btn-default btn-add" id='<?= $model->id?>'>В корзину</span>
      </div>
    </div>
  </div>
