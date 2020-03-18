<?
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => $category->title,'url' => ['site/category','id' => $category->url]];
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Hero Header -->
<div class="hero-header animated fadein __web-inspector-hide-shortcut__">
  
  <!-- Slider -->         
  <div class="swiper-container swiper-slider">
    <div class="swiper-wrapper">
      <div class="swiper-sliced">
        <div class='product_photo_slide'><?= Html::img('/uploads/'.$model->photo, ['class' => 'img img-responsive'])?></div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  <!-- End of Slider -->

  <!-- Floating Action Button -->
  <div class="floating-button animated bouncein delay-3 hide">
    <a href="checkout.html" class="btn-floating btn-large waves-effect waves-light accent-color btn z-depth-1">
      <i class="ion-ios-cart"></i>
    </a>
  </div>
</div>

<!-- Product Title -->
<div class="center-align p-20">
  <span class="small grey-text"><? if(isset($model->vendor->title)){ $model->vendor->title; }?></span>
  <h3 class="m-0"><strong><?= $model->title?></strong></h3>
  <span class='product-price'><?= $model->price !== 0 && $model->price !== NULL ? number_format($model->price,0," "," ") . 'руб.' : 'По запросу'?> </span>
  <div class='available'>
      <?if($model->available == 1):?>
      <span class='product-cart-label-success'><i class="fa fa-check-square-o"></i> В наличии</span>
      <?else:?>
      <span class="product-cart-label-delivery"><i class='fa fa-truck'></i> Доставка за 3 дня</span>
      <?endif;?>
    </div>
</div>

<div class="product-variation">
  <?= $model->description?>
</div>


<div class="product-variation text-center">
  <? 
  if (isset($cart[$model->id])){
  echo Html::tag('span','Товар в корзине',['class' => 'btn btn-black disable', 'disabled' => 'disabled']);
  }
  else{
  echo Html::tag('span','В корзину',['class' => 'btn btn-black btn-add', 'id' => $model->id]);
  }
  ?>
</div>
