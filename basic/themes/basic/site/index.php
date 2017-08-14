<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Satellitenn Store';
$this->registerJsFile('/bower_components/fotorama/fotorama.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('/bower_components/fotorama/fotorama.css');
?>

<div class="fotorama" data-autoplay="5000">
    <? foreach($slides as $slide){?>
    <div data-img="/uploads/980x550/<?= $slide->image?>" >
        <div class='slide_caption'>
            <span class='slide_title'><?= $slide->title?></span>
            <br>
            <a class='btn btn-default' href='<?= $slide->guid?>'>Подробнее</a>
        </div>
    </div>
    <?}?>
</div>
    
<div class="content">
    <br><br>
    <div class="row">
            <!-- Card -->
            <div class='col-sm-3 col-md-3 main-page-icon-box' onclick="window.location = '/catalog' ">
                <div class="card hovercard">
                    
                    <div class="avatar">
                        <img alt="" src="/images/store-icon.svg">
                    </div>
                    <div class="info">
                        <div class="title">
                            <a href="/catalog">Магазин</a>
                        </div>
                        <div class="desc">Большой выбор автобоксов и аксессуаров</div>
                    </div>
                    
                </div>
            </div>
            <!-- End Card -->

             <!-- Card -->
            <div class='col-sm-3 col-md-3 main-page-icon-box' onclick="window.location = '/rentbox' ">
                <div class="card hovercard">
                    
                    <div class="avatar">
                        <img alt="" src="/images/renta-icon.svg">
                    </div>
                    <div class="info">
                        <div class="title">
                            <a href="/rentbox">Прокат</a>
                        </div>
                        <div class="desc">Аренда автобоксов. Рассчет стоимости</div>
                    </div>
                    
                </div>
            </div>
            <!-- End Card -->

             <!-- Card -->
            <div class='col-sm-3 col-md-3 main-page-icon-box' onclick="window.location = '/production' ">
                <div class="card hovercard">
                    
                    <div class="avatar">
                        <img alt="" src="/images/production-icon.svg">
                    </div>
                    <div class="info">
                        <div class="title">
                            <a href="/production">Производство</a>
                        </div>
                        <div class="desc">Инормация о производстве автобоксов</div>
                    </div>
                    
                </div>
            </div>
            <!-- End Card -->

             <!-- Card -->
            <div class='col-sm-3 col-md-3 main-page-icon-box' onclick="window.location = '/production/gallery' ">
                <div class="card hovercard">
                    
                    <div class="avatar">
                        <img alt="" src="/images/gallery-icon.svg">
                    </div>
                    <div class="info">
                        <div class="title">
                            <a href="/production/gallery">Галерея</a>
                        </div>
                        <div class="desc">Фотографии нашей продукции</div>
                    </div>
                    
                </div>
            </div>
            <!-- End Card -->


    </div>
    
</div>