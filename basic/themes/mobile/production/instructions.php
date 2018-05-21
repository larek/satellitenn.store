<?php
/**
 * @var yii\web\View $this
 */
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
$this->title = 'Инструкция по эксплуатации';
$this->params['breadcrumbs'][] = ['label' => 'Производство', 'url' => ['production/index']];
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css');
?>
<div class="animated fadeinup delay-1">
<div class="p-20">
<div class="content content-margin">
	<div class="row">
		<div class="col-md-12">
		    <h1><?= $this->title?></h1>

		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p>
		        <a data-fancybox href="/images/images/2016/insr1.jpg"><img src="/images/images/2016/insr1.jpg" class="img-responsive" /></a>
		    </p>
		    <p>
		        <a data-fancybox href="/images/images/2016/insrt2.jpg"><img src="/images/images/2016/insrt2.jpg" class="img-responsive" /></a>
		    </p>
		    <p>
		        <a data-fancybox href="/images/images/2016/instr3.jpg"><img src="/images/images/2016/instr3.jpg" class="img-responsive" /></a>
		    </p>
		    <p>&nbsp;</p>
		    <p>
		        <a data-fancybox href="/images/images/2016/instr4.jpg"><img src="/images/images/2016/instr4.jpg" class="img-responsive" /></a>
		    </p>
		    <p>
		        <a data-fancybox href="/images/images/2016/instr5.jpg"><img src="/images/images/2016/instr5.jpg" class="img-responsive" /></a>
		    </p>
		</div>
	</div>

</div>
</div>
</div>
