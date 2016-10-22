<?
use yii\helpers\Html;
?>

  <div class="col-sm-3 col-md-3 item-grid">
    <div class="thumbnail">
      <?= Html::a(Html::img('/uploads/300x200/'.$model->image, ['class' => 'img img-responsive']),['site/category','id' => $model->url]);?>
      <div class="caption">
      	<div class="item_title">
        	<?= Html::a($model->title,['site/category', 'id' => $model->url],['class' => 'category-item-title'])?>
        </div>
      </div>
    </div>
  </div>
