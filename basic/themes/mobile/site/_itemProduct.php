<?
use yii\helpers\Html;
?>

<div class="media-top-object animated fadeinright z-depth-1 delay-1">
           
            <div class="media-body">
             <?= Html::a(Html::img("/uploads/300x200/".$model->photo), ['site/product', 'id' => $model->url]);?>
            <br>
              <h4 class="news-title">
                 <?= Html::a($model->title,['site/product','id' => $model->url]);?>
              </h4>
              <p class="small"><?= $model->vendor->title;?></p>
              <span class='price'><?= number_format($model->price,0," "," ");?> руб.</span>
              <div class="card-feedback">
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

<div class="col-sm-3 col-md-3 item-grid hide">
  <div class="thumbnail">
    <?= Html::a(Html::img("/uploads/300x200/".$model->photo), ['site/product', 'id' => $model->url]);?>
    <div class="item-content">
      <div class="item-title">
        <?= Html::a($model->title,['site/product','id' => $model->url]);?>
      </div>
    <div class="item-description text-center">
    <p><?= $model->vendor->title;?></p>
    <p><span class='price'><?= number_format($model->price,0," "," ");?> руб.</span></p>
    </div>
    <div class="text-center">
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
</div>