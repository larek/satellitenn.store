<?php
use yii\widgets\ListView;
use app\components\Filters;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="row">

        <div class="col-md-12">
            <div class="content">
                <h1><?= $this->title?></h1>
                <?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>

                    
			
                    <div class="table-header ">
                        <div class="row ">
                        <?= Filters::widget([
                        	'url' => $url
                        ]);?>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <?= ListView::widget([
			'dataProvider' => $dataProvider,
			'itemView' => '_itemProduct',
			'viewParams' => ['cart' => $cart]
		]);?>
                        </div>
                    </div>
            </div>
        </div>
    </div>