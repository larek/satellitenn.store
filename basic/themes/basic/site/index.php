<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Satellitenn Store';
$this->registerJsFile('/bower_components/fotorama/fotorama.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/bower_components/fotorama/fotorama.css');
?>

<div class="fotorama">
    <? foreach($slides as $slide){?>
    <div data-img="/uploads/980x550/<?= $slide->image?>" ><div class='slide_caption'><span class='slide_title'><?= $slide->title?></span><br><a class='btn btn-default' href='<?= $slide->guid?>'>Подробнее</a></div></div>
    <?}?>
</div>
    
<div class="content">
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_itemCategory',
            'summary' => false
            ]);?>
        </div>
    </div>
</div>