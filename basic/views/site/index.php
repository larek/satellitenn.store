<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Satellitenn Store';
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyCIf2g1PGQQN0J1aiuf-Z3Lj8DCE5qf2uc&callback=initMap');

?>



<div id="BackgroundImageCarousel" class="carousel carousel-header slide" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
       

        <div class="carousel-inner">
            
                    <div id="header_0_rptrImageSlider_divItem_0" class="item active">
                        <img id="header_0_rptrImageSlider_imgImage_0" src="/images/sat_slide1.jpg">
                        <div id="header_0_rptrImageSlider_divBlock_2" class="block left" style="bottom: 18%; left: 40px; width: 370px;">
                            <h2 id="header_0_rptrImageSlider_headerText_2" class="headline headline-overlay startpage-headline1 headline-dark" style="color:#262626;text-shadow:0 0 3px rgba(255,255,255,0.8);">
                                Заголовок
                            </h2>
                            <h3 id="header_0_rptrImageSlider_headerText2_2" class="headline headline-overlay startpage-headline3 headline-dark" style="color:#262626;text-shadow:0 0 3px rgba(255,255,255,0.8);">
                                
                            </h3>
                            <a href="#" style="background-color: #78abcf;border: 1px solid #73a4c7;text-shadow: 0px 1px 1px #3b6f94;-webkit-box-shadow: inset 0px -1px 0px #6c9aba;-moz-box-shadow: inset 0px -1px 0px #6c9aba;box-shadow: inset 0px -1px 0px #6c9aba;background-image: none;" class="btn btn-primary btn-overlay tag-manager-homepage-button">
                                Подробная информация
                            </a>
                        </div>
                    </div>
                
                    <div id="header_0_rptrImageSlider_divItem_1" class="item">
                        <img id="header_0_rptrImageSlider_imgImage_1" src="/images/sat_slide2.jpg">
                       <div id="header_0_rptrImageSlider_divBlock_2" class="block left" style="bottom: 18%; left: 40px; width: 370px;">
                            <h2 id="header_0_rptrImageSlider_headerText_2" class="headline headline-overlay startpage-headline1 headline-dark" style="color:#262626;text-shadow:0 0 3px rgba(255,255,255,0.8);">
                                Заголовок
                            </h2>
                            <h3 id="header_0_rptrImageSlider_headerText2_2" class="headline headline-overlay startpage-headline3 headline-dark" style="color:#262626;text-shadow:0 0 3px rgba(255,255,255,0.8);">
                                
                            </h3>
                            <a href="#" style="background-color: #78abcf;border: 1px solid #73a4c7;text-shadow: 0px 1px 1px #3b6f94;-webkit-box-shadow: inset 0px -1px 0px #6c9aba;-moz-box-shadow: inset 0px -1px 0px #6c9aba;box-shadow: inset 0px -1px 0px #6c9aba;background-image: none;" class="btn btn-primary btn-overlay tag-manager-homepage-button">
                                Подробная информация
                            </a>
                        </div>
                    </div>
                
                    <div id="header_0_rptrImageSlider_divItem_2" class="item ">
                        <img id="header_0_rptrImageSlider_imgImage_2" src="/images/sat_slide3.jpg">
                        <div id="header_0_rptrImageSlider_divBlock_2" class="block left" style="bottom: 18%; left: 40px; width: 370px;">
                            <h2 id="header_0_rptrImageSlider_headerText_2" class="headline headline-overlay startpage-headline1 headline-dark" style="color:#262626;text-shadow:0 0 3px rgba(255,255,255,0.8);">
                                Заголовок
                            </h2>
                            <h3 id="header_0_rptrImageSlider_headerText2_2" class="headline headline-overlay startpage-headline3 headline-dark" style="color:#262626;text-shadow:0 0 3px rgba(255,255,255,0.8);">
                                
                            </h3>
                            <a href="#" style="background-color: #78abcf;border: 1px solid #73a4c7;text-shadow: 0px 1px 1px #3b6f94;-webkit-box-shadow: inset 0px -1px 0px #6c9aba;-moz-box-shadow: inset 0px -1px 0px #6c9aba;box-shadow: inset 0px -1px 0px #6c9aba;background-image: none;" class="btn btn-primary btn-overlay tag-manager-homepage-button">
                                Подробная информация
                            </a>
                        </div>
                    </div>
                
                    
                
        </div>
         
                <ol class="carousel-indicators">
            
                <li data-target="#BackgroundImageCarousel" data-slide-to="0" class="active"></li>
            
                <li data-target="#BackgroundImageCarousel" data-slide-to="1" class=""></li>
            
                <li data-target="#BackgroundImageCarousel" data-slide-to="2" class=""></li>
            
            
                </ol>
            
    </div>
        <div class="content">

       

        <div class="row hide">
            <div class="col-md-12">
                <h2>Группы товаров</h2>
                <div class="title-divider"></div>
            </div>
        </div>
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

    
    