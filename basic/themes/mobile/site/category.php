<?php
use yii\widgets\ListView;
use app\components\Filters;
use yii\widgets\Breadcrumbs;
use yii\web\View;
/* @var $this yii\web\View */

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('/bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('/js/price-range.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css');
?>

<div class="animated fadeinup delay-1">
    <div class="p-20">

   <div class="news">
   <h1><?= $this->title?></h1>
                <?//= Breadcrumbs::widget([
            //'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            //]) ?>
            
    <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_itemProduct',
            'viewParams' => ['cart' => $cart]
        ]);?>
   </div>
          

          

          

          

          
            <div class="content content-margin hide">
                <h1><?= $this->title?></h1>
                <?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>

                    
			 
                    <div class="table-header ">
                        <div class="row ">
                        <?= Filters::widget([
                        	'url' => $url,
                            'dataProvider' => $dataProvider
                        ]);?>
                        </div>
                    </div>

                    <div class="row">
                        
                            
                        
                    </div>
            </div>
</div>
</div>
       