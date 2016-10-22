<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use app\assets\SatelliteStyleMobile;
use app\modules\admin\models\Category;

SatelliteStyleMobile::register($this);
$route = Yii::$app->urlManager->parseRequest(Yii::$app->request)[0];

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width,initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no; target-densityDpi=device-dpi"" />
    
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    

 <!-- Main Container -->
    <div id="main" class="main">

      <!-- Toolbar -->
      <div id="toolbar" class="primary-color z-depth-1">
        <div class="open-left" id="open-left" data-activates="slide-out-left">
          <i class="fa fa-navicon"></i>
        </div>
        <h1 class='title'>
            <a href='/'>
                <img src="/images/logo2.png" alt="" style='width: 150px;margin: 13px auto;'>
            </a>
        </h1>
        <div class="open-right" >
          <div class="cartMenuItem">
                        <a class="cartMenuItem" href="/cart"><i class="fa fa-shopping-cart"></i></a>                    </div>
          
        </div>
      </div>
      <!-- End of Toolbar -->

      <!-- Page Contents -->
      <div class="page animated fadein">
        
        <?= $content?>

        <!-- Footer -->
        <footer class="page-footer primary-color">
          <div class="section center">
            <h2 class="heading white-text">Satellite</h2>
            
            <div class="footer-icons">
              <a class="callback-header-link" href="https://vk.com/satellitenn" title="Вконтакте" target="_blank"><i class="fa fa-vk"></i></a>
            
            </div>
          </div>
          
        </footer>
      
      </div> 
      <!-- End of Page Contents -->

      <!-- Sidebars -->
      <!-- Left Sidebar -->
      <ul id="slide-out-left" class="side-nav collapsible">
        <li class="sidenav-avatar bg-material">
          <div class="opacity-overlay-gradient"></div>
          <div class="bottom">
            <div id="" class="header-search-wrapper" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'searchButton')">
              
              <div class="input-group">
                <input type="text" class="form-control search-input" placeholder="Поиск по сайту">
                <span class="input-group-btn">
                  <button class="btn btn-red btn-search" type="button"><i class='fa fa-search'></i></button>
                </span>
              </div><!-- /input-group -->
            </div>  
          </div>
        </li>
        

        <li><?= Html::a('<i class="fa fa-home"></i> Главная',['site/index'])?></li>
        <li><?= Html::a('<i class="fa fa-th"></i> Каталог',['site/catalog'])?></li>
        <li><?= Html::a('<i class="fa fa-shopping-cart"></i> Корзина',['site/cart'])?></li>
        <li><?= Html::a('<i class="fa fa-book"></i> Контакты',['site/pages','id' => 'kontakty'])?></li>
        <li><?= Html::a('<i class="fa fa-credit-card"></i> Оплата',['site/pages' , 'id' => 'oplata'])?></li>
        <li><?= Html::a('<i class="fa fa-truck"></i> Доставка',['site/pages', 'id' => 'dostavka'])?></li>
        <li><?= Html::a('<i class="fa fa-clock-o"></i> Прокат','http://rentbox.satellitenn.ru')?></li>

        
      </ul>

     
      <!-- End of Sidebars -->
        
    </div>
    <!-- End of Main Container -->

        <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
