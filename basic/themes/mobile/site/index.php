<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Mobile Satellitenn Store';


?>



<!-- Slider -->         
        <div class="swiper-container swiper-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="/images/sat_slide5.jpg" alt="">
              <div class="top left-align">
                <h4 class="white-text m-0"><strong>Заголовок картинки!</strong></h4>
                <p class="text-flow white-text m-0"><a href="#">Подробнее</a></p>
                
              </div>
            </div>
            <div class="swiper-slide">
              <img src="/images/sat_slide6.jpg" alt="">
              <div class="top left-align">
                <h4 class="white-text m-0"><strong>Заголовок картинки!</strong></h4>
                <p class="text-flow white-text m-0"><a href="#">Подробнее</a></p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="/images/sat_slide7.jpg" alt="">
              <div class="top left-align">
                <h4 class="white-text m-0"><strong>Заголовок картинки!</strong></h4>
                <p class="text-flow white-text m-0"><a href="#">Подробнее</a></p>
              </div>
            </div>
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
        
        
        

      

    
    