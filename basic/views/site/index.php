<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'Satellitenn Store';
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyCIf2g1PGQQN0J1aiuf-Z3Lj8DCE5qf2uc&callback=initMap');

?>



<div class="row">
    <div class="col-md-12">
            <!-- <div class="main_background_block hide"></div> -->

        <div class="content">

        <div class="row main_banner_wrapper hide">
         <div class="main_banner_text">
                <h1>Здравствуйте!</h1>
    
                <p class="lead">Мы предлагаем вам около 10 000 запчастей для стоматологических установок</p>
                

        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Багажные системы</h1>  
                <p style='text-align:justify;'>Очень часто наши клиенты обращаются к нам с просьбой оказать помощь в выборе багажной системы, слышим от них много различных историй о недобросовестных продавцах, которые устанавливают на автомобили багажники, порой совершенно не подходящие для их автомобиля. Такая установка может повредить лакокрасочное покрытие автомобиля или даже оставить вмятины на металле. И главное: велика вероятность отрыва такой багажной системы при движении автомобиля, что создает непосредственную угрозу жизни и здоровью участников дорожного движения. Проведя определенный анализ рынка багажников, мы решили наладить продажу качественных систем известных производителей, отлично зарекомендовавших себя в данной сфере.

 				</p>
 				<p style='text-align:justify;'>
 					К решению данной задачи мы подошли со всей ответственностью, поэтому Вы не найдете в наших предложениях изделий, которые крепятся по принципу «а, и так сойдет…». На многие популярные модели автомобилей багажные системы есть в наличии на нашем складе. Зачастую, на довольно редкие автомобили, не удается быстро подобрать багажник. Если мы не сможем предложить Вам багажник сразу, то доставим его в течение 1-2 дней, что зачастую не под силу даже официальным представителям и различным дилерам, потому как они крайне инертны и не отличаются высокой мобильностью.
 				</p>  
            </div>
            <div class="col-md-6 hide">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Обратная связь</h3>
                  </div>
                  <div class="panel-body">
                    <div class="form-group">
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Ваше имя">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Ваш телефон или email">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Sign in</button>
                        </div>
                      </div>
                  </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Группы товаров</h2>
                <div class="title-divider"></div>
            </div>
        </div>
        <br>
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
    </div>
</div>
    
    <div id="map"></div>
    <script>


            var map;
            var myLatLng = {lat: 56.2912629, lng: 44.066847}
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 12,
        scrollwheel: false
      });

        var contentString = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<h4 id="firstHeading" class="firstHeading">Satellite</h4>'+
              '<div id="bodyContent">'+
              '<p><i class="fa fa-map-marker"></i> г. Нижний Новгород, ул. Касьянова, д. 6 "В"</p>' +
              '<p><i class="fa fa-envelope-o"></i> satellitenn@yandex.ru</p>' +
              '<p><i class="fa fa-phone"></i> +7 910 385 21 44</p>' +
              '</div>'+
              '</div>';

          var infowindow = new google.maps.InfoWindow({
            content: contentString
          });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
          });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
          });



  


    }
    </script>