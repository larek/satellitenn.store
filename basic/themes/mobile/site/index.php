<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Mobile Satellitenn Store';


?>



<!-- Slider -->    
 
        <div class="swiper-container swiper-slider">
          <div class="swiper-wrapper">

          <? foreach($slides as $slide){?>
            <div class="swiper-slide" >
              <img src="/uploads/980x550/<?= $slide->image?>" alt="">
              <div class="top left-align">
                <h4 class="white-text m-0"><strong><?= $slide->title?></strong></h4>
                <p class="text-flow white-text m-0"><a href="<?= $slide->guid?>">Подробнее</a></p>
                
              </div>
            </div>
          <?}?>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
        <!-- End of Slider -->
        

      
        
        <br>
        <div class="animated fadeinup delay-1">
        <div class="p-20">
      		<?= ListView::widget([
      			'dataProvider' => $dataProvider,
      			'itemView' => '_itemCategory',
            'summary' => false
      		]);?>
        </div>
		</div>
        
        
        

      

    
    