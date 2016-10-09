<?php
use yii\widgets\ListView;
use app\components\Filters;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */

$this->title = "Поиск: ". $url;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    
    <div class="col-md-12">
	    <div class="content">
	    <h1><?= $this->title?></h1>
	    <?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			]) ?>


<div class="table-header hide">
	
	<div class="row ">


			<div class="btn-group pull-right" role="group" aria-label="...">
			  <button type="button" class="btn btn-default btn-list"><i class="fa fa-list"></i></button>
			  <button type="button" class="btn btn-default btn-grid"><i class="fa fa-th"></i></button>
			</div>	

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
    <div class="col-md-3 hide" >
	    <div class="panel panel-default mt0">
		  <div class="panel-heading">Категории</div>
		  <div class="panel-body">
		  	
		  	

		  </div>
		</div>

	    <div class="panel panel-default">
		  <div class="panel-heading">Panel heading without title</div>
		  <div class="panel-body">
		    Panel content
		  </div>
		</div>
    </div>
</div>