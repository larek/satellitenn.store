<?
use yii\helpers\Html;
?>

<div class="col-sm-6 col-md-6 item-grid">
  <div class="thumbnail">
    <?= Html::a(Html::img("/uploads/300x200/".$photo), ['site/product', 'id' => $url]);?>
    <div class="item-content">
      <div class="item-title">
        <?= Html::a($title,['site/product','id' => $url]);?>
      </div>
    <div class="item-description text-center">
    <p><?= $vendor->title;?></p>
    <p><span class='price'><?= number_format($price,0," "," ");?> руб.</span></p>
    </div>
    <div class="text-center">
      <span class='btn btn-default btn-remove' id='<?= $id?>'><i class='fa fa-trash'></i> Убрать из корзины</span>
    </div>
    </div>
  </div>
</div>