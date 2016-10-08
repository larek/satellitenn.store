<?
use yii\helpers\Html;
?>

<div class="col-sm-3 col-md-3 item-grid">
  <div class="thumbnail">
    <?= Html::a(Html::img("/uploads/300x200/".$model->photo), ['site/product', 'id' => $model->url]);?>
    <div class="item-content">
      <div class="item-title">
        <?= Html::a($model->title,['site/product','id' => $model->url]);?>
      </div>
    <div class="item-description">
    </div>
    <? 
      if (isset($cart[$model->id])){
        echo Html::tag('span','Товар в корзине',['class' => 'btn btn-default disable', 'disabled' => 'disabled']);
      }
      else{
        echo Html::tag('span','В корзину',['class' => 'btn btn-default btn-add', 'id' => $model->id]);
      }
    ?>
    </div>
  </div>
</div>