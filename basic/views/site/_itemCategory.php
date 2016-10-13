<?
use yii\helpers\Html;
?>

  <div class="col-sm-3 col-md-3 item-grid">
    <div class="thumbnail">
      <?= Html::a(Html::img('/uploads/300x200/'.$model->image, ['class' => 'img img-responsive']),['site/category','id' => $model->url]);?>
      <div class="caption">
      	<div class="item_title">
        	<h5><?= Html::a($model->title,['site/category', 'id' => $model->url])?></h5>
        </div>
      </div>
    </div>
  </div>
