<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Satellitenn Store';


?>



<div id="BackgroundImageCarousel" class="carousel carousel-header slide" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
       

        <div class="carousel-inner">
                    <? 
                    $n=0;
                    foreach($slides as $slide){

                    ?>
                    <div id="header_0_rptrImageSlider_divItem_<?= $n?>" class="item active">
                        <img id="header_0_rptrImageSlider_imgImage_<?= $n?>" src="/uploads/980x550/<?= $slide->image?>">
                        <div id="header_0_rptrImageSlider_divBlock_2" class="block left" style="bottom: 18%; left: 40px; width: 370px;">
                            <h2 class='slider_title'>
                                <?= $slide->title?>
                            </h2>
                            <h3>
                                
                            </h3>
                            <a href="<?= $slide->guid?>" class="btn btn-default">
                                Подробная информация
                            </a>
                        </div>
                    </div>

                    <?
                    $n++;
                    }?>
                
                    <div id="header_0_rptrImageSlider_divItem_1" class="item">
                        <img id="header_0_rptrImageSlider_imgImage_1" src="/images/sat_slide6.jpg">
                       <div id="header_0_rptrImageSlider_divBlock_2" class="block left" style="bottom: 18%; left: 40px; width: 370px;">
                            <h2 class='slider_title'>
                                Заголовок
                            </h2>
                            <h3 >
                                
                            </h3>
                            <a href="#" class="btn btn-default">
                                Подробная информация
                            </a>
                        </div>
                    </div>
                
                    <div id="header_0_rptrImageSlider_divItem_2" class="item ">
                        <img id="header_0_rptrImageSlider_imgImage_2" src="/images/sat_slide7.jpg">
                        <div id="header_0_rptrImageSlider_divBlock_2" class="block left" style="bottom: 18%; left: 40px; width: 370px;">
                            <h2 class='slider_title'>
                                Заголовок
                            </h2>
                            <h3 >
                                
                            </h3>
                            <a href="#" class="btn btn-default">
                                Подробная информация
                            </a>
                        </div>
                    </div>
                
                    
                
        </div>
         
                <ol class="carousel-indicators">
                <?
                $n=0;
                foreach($slides as $slide){

                ?>
                <li data-target="#BackgroundImageCarousel" data-slide-to="<?= $n?>"></li>
                <?
                $n++;
                }
                ?>
               <!--  <li data-target="#BackgroundImageCarousel" data-slide-to="1" class=""></li>
            
                <li data-target="#BackgroundImageCarousel" data-slide-to="2" class=""></li> -->
            
            
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

    
    