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
        

      <div class="row">
            <!-- Card -->
            <div class='col-sm-3 col-md-3 main-page-icon-box' onclick="window.location = '/catalog' ">
                <div class="card hovercard">
                    <div class="cardheader1">

                    </div>
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
                    <div class="cardheader2">

                    </div>
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
                    <div class="cardheader3">

                    </div>
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
                    <div class="cardheader4">

                    </div>
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
        
        
        

      

    
    