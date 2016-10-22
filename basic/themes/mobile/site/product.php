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
              <div class="swiper-slide">
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
          <span class="small grey-text"><?= $model->vendor->title;?></span>
          <h3 class="m-0"><strong><?= $model->title?></strong></h3>
          <span class='product-price'><?= number_format($model->price,0," "," ")?> руб. </span>
        </div>

      <div class="product-variation">
       <?= $model->description?>
        </div>

       

       
        <div class="product-variation text-center">
          <a class="waves-effect waves-light btn-large modal-trigger accent-color block m-20 hide" href="checkout.html">Add to Cart</a>
          <? 
                      if (isset($cart[$model->id])){
                        echo Html::tag('span','Товар в корзине',['class' => 'btn btn-default disable', 'disabled' => 'disabled']);
                      }
                      else{
                        echo Html::tag('span','В корзину',['class' => 'btn btn-default btn-add', 'id' => $model->id]);
                      }
                    ?>
        </div>

        
      
     
<div class="animated fadeinup delay-1 hide">
    <div class="p-20">

        <div class="content content-margin">
            <h1><?= $this->title?></h1>
            <?//= Breadcrumbs::widget([
                //'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            //]) ?>
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-striped">
						<tr>
							<td>Описание</td>
							<td><?= $model->description?></td>
						</tr>
                        <tr>
                            <td>Производитель</td>
                            <td><?= $model->vendor->title?></td>
                        </tr>
						<tr>
							<td>Цена</td>
							<td><span class='price'><?= number_format($model->price,0," "," ")?> руб. </span></td>
						</tr>
					</table>
                    <? 
                      if (isset($cart[$model->id])){
                        echo Html::tag('span','Товар в корзине',['class' => 'btn btn-default disable', 'disabled' => 'disabled']);
                      }
                      else{
                        echo Html::tag('span','В корзину',['class' => 'btn btn-default btn-add', 'id' => $model->id]);
                      }
                    ?>
                </div>
                <div class="col-md-6">
                    <?= Html::img('/uploads/'.$model->photo, ['class' => 'img img-responsive'])?>
                </div>
            </div>
        </div>
</div>
</div>
