<?
use yii\helpers\Html;
?>

<div class="media-top-object animated fadeinright z-depth-1 delay-1">
  <div class="media-body">
    <?= Html::a(Html::img("/uploads/300x200/".$model->photo), ['site/product', 'id' => $model->url]);?>
    <br>
    <div class="item-description text-center">
      <h4 class="news-title">
      <?= Html::a($model->title,['site/product','id' => $model->url]);?>
      </h4>
      <p class="small"><? if(isset($model->vendor->title)){ $model->vendor->title;} ?></p>
      <span class='price'><?= $model->price !== 0 && $model->price !== NULL ? number_format($model->price,0," "," ") . 'руб.' : 'По запросу';?></span>
      <div class='available'>
      <?if($model->available == 1):?>
      <span class='product-cart-label-success'><i class="fa fa-check-square-o"></i> В наличии</span>
      <?else:?>
      <span class="product-cart-label-delivery"><i class='fa fa-truck'></i> Доставка за 3 дня</span>
      <?endif;?>
    </div>
      <div class="">
        <? 
        if (isset($cart[$model->id])){
          echo Html::tag('span','Товар в корзине',['class' => 'btn btn-black disable', 'disabled' => 'disabled']);
        }
        else{
          echo Html::tag('span','В корзину',['class' => 'btn btn-black btn-add', 'id' => $model->id]);
        }
        ?>
      </div>
    </div>
  </div>
</div>
