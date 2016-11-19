<?php
use yii\widgets\ListView;
use app\components\FiltersMobile;
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
            <h1><?= $this->title?></h1>
                <?//= Breadcrumbs::widget([
            //'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            //]) ?>
  
            <div class="table-header">
                    <?= FiltersMobile::widget([
                        'url' => $url,
                        'productCount' => $productCount
                    ]);?>
            </div>

        <div class="news">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_itemProduct',
                'viewParams' => ['cart' => $cart]
            ]);?>
        </div>
    </div>
</div>
       