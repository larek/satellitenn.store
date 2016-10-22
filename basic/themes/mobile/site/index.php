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
              <div class="opacity-overlay"></div>
              <div class="bottom center">
                <h4 class="white-text m-0"><strong>Заголовок картинки!</strong></h4>
                <p class="text-flow white-text m-0"></p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="/images/sat_slide5.jpg" alt="">
              <div class="opacity-overlay"></div>
              <div class="bottom left-align">
                <h4 class="white-text m-0"><strong>Shuttle is There!</strong></h4>
                <p class="text-flow white-text m-0">A mobile focused template</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="/images/sat_slide5.jpg" alt="">
              <div class="opacity-overlay"></div>
              <div class="bottom right-align">
                <h4 class="white-text m-0"><strong>Shuttle is There!</strong></h4>
                <p class="text-flow white-text m-0">A mobile focused template</p>
              </div>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
        <!-- End of Slider -->
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

    
    