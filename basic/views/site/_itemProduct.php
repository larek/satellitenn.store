<?
use yii\helpers\Html;
?>

  <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <?= Html::img('/uploads/300x200/'.$model->photo, ['class' => 'img img-responsive']);?>
      <div class="caption">
        <h5><?= Html::a($model->title,['site/product', 'id' => $model->url])?></h5>
      </div>
    </div>
  </div>
