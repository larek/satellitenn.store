<?
use yii\helpers\Html;
?>

<div class="col-sm-3 col-md-3 item-grid">
  <div class="thumbnail">
    <?= Html::img("/uploads/300x200/".$model->photo);?>
    <div class="item-content">
      <div class="item-title">
        <?= $model->title;?>
      </div>
    <div class="item-description text-center">
    <p><?= $model->vendor->title;?></p>
    <p><span class='price'><?= number_format($model->price,0," "," ");?> руб.</span></p>
    </div>
   
    </div>
  </div>
</div>