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
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    
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
        <div class="open-right" id="open-right" data-activates="slide-out">
          <i class="fa fa-shopping-cart"></i>
        </div>
      </div>
      <!-- End of Toolbar -->

      <!-- Page Contents -->
      <div class="page animated fadein">
        
        <?= $content?>

        <!-- Footer -->
        <footer class="page-footer primary-color">
          <div class="section center">
            <h2 class="heading white-text">Shuttle</h2>
            <p class="center-align grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            <div class="footer-icons">
              <i class="ion-social-facebook m-10 white-text"></i>
              <i class="ion-social-twitter m-10 white-text"></i>
              <i class="ion-social-pinterest m-10 white-text"></i>
              <i class="ion-social-instagram m-10 white-text"></i>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container center">
              <span>Made with <i class="ion-ios-heart"></i> by Codnauts</span>
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
            <img src="img/user.jpg" alt="" class="avatar">
            <!-- Dropdown Trigger -->
            <span class="dropdown-button waves-effect waves-light" data-activates="dropdown1">heyfromjhon@email.com<i class="ion-android-arrow-dropdown right"></i></span>
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">hellojhon@email.com</a></li>
              <li><a href="#!">heyfromjhon@email.com</a></li>
              <li class="divider"></li>
              <li><a href="#!">Settings <i class="ion-ios-gear"></i></a></li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-home"></i>Home<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="index.html">Classic</a>
                <a href="index-sliced.html">Sliced</a>
                <a href="index-slider.html">Slider</a>
                <a href="index-drawer.html">Drawer</a>
                <a href="index-walkthrough.html">Walkthrough</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-exit"></i>Layout<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="material.html">Material</a>
                <a href="left-sidebar.html">Left</a>
                <a href="right-sidebar.html">Right</a>
                <a href="dual-sidebar.html">Dual</a>
                <a href="blank.html">Blank</a>
              </li>
            </ul>
          </div>  
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-document"></i>Pages<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="article.html">Article</a>
                <a href="about.html">About</a>
                <a href="event.html">Event</a>
                <a href="project.html">Project</a>
                <a href="player.html">Music Player</a>
                <a href="todo.html">ToDo</a>
                <a href="category.html">Category</a>
                <a href="product.html">Product</a>
                <a href="checkout.html">Checkout</a>
                <a href="search.html">Search</a>
                <a href="faq.html">Faq</a>
                <a href="coming-soon.html">Coming Soon</a>
                <a href="404.html">404</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-apps"></i>App<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="calendar.html">Calendar</a>
                <a href="profile.html">Profile</a>
                <a href="timeline.html">Timeline</a>
                <a href="chat.html">Chat</a>
                <a href="login.html">Login</a>
                <a href="signup.html">Sign Up</a>
                <a href="forgot.html">Password</a>
                <a href="lockscreen.html">Lockscreen</a>
                <a href="chart.html">Chart</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-list"></i>Blog<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="blog.html">Classic</a>
                <a href="blog-masonry.html">Masonry</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-image"></i>Gallery<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="gallery-filter.html">Filter</a>
                <a href="gallery-masonry.html">Masonry</a>
                <a href="gallery-card.html">Card</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="collapsible-header waves-effect">
            <i class="ion-android-camera"></i>Portfolio<span class="more"><i class="ion-ios-arrow-right"></i></span>
          </div>
          <div class="collapsible-body">
            <ul class="collapsible">
              <li>
                <a href="portfolio-filter.html">Filter</a>
                <a href="portfolio-masonry.html">Masonry</a>
                <a href="portfolio-card.html">Card</a>
              </li>
            </ul>
          </div>
        </li>
        <li><a href="shop.html" class="waves-effect"><i class="ion-android-playstore"></i> Shop</a></li>
        <li><a href="news.html" class="waves-effect"><i class="ion-social-rss"></i> News</a></li>
        <li><a href="#!" class="waves-effect"><i class="ion-wand"></i>UI Kit (Coming Soon)</a></li>
        <li><a href="contact.html" class="waves-effect"><i class="ion-android-map"></i> Contact</a></li>
      </ul>

      <!-- Right Sidebar -->
      <ul id="slide-out" class="side-nav">
        <li class="sidenav-header">
          <!-- Srearch bar -->
          <nav>
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input id="search" type="search" required>
                  <label for="search"><i class="ion-android-search"></i></label>
                  <i class="ion-android-close"></i>
                </div>
              </form>
            </div>
          </nav>
        </li>
        <!-- Tabs -->
        <li>
          <ul class="tabs">
            <li class="tab col s3"><a href="#sidebar1">Social</a></li>
            <li class="tab col s3"><a href="#sidebar2" class="active">Chat</a></li>
          </ul>
        </li>
        <li id="sidebar1" class="p-20">
          <!-- Twitter -->
          <div class="twitter">
            <h6 class="follow-us"><i class="ion-social-twitter"></i> Follow us on Twitter</h6>
            <div class="tweet">
              <h3>@Codnauts</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <a href="#">#tempor</a>.</p>
            </div>
            <div class="tweet">
              <h3>@Codnauts</h3>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in <a href="#">#voluptate</a> culpa qui officia deserunt mollit anim.</p>
            </div>
            <div class="tweet">
              <h3>@Codnauts</h3>
              <p>At vero eos et accusamus et iusto odio <a href="#">#dignissimos</a> <a href="#">#ducimus</a> qui blanditiis praesentium.</p>
            </div>
          </div>
          <!-- Facebook -->
          <div class="facebook">
            <h6 class="follow-us">Notifications</h6>
            <div class="face-notification">
              <img src="img/user2.jpg" alt="" class="cricle">
              <div>
                <p>Mike Green</p>
                <span>Sent you a message</span>
                <span class="small">Today at 16:48</span>
              </div>
            </div>
            <div class="face-notification">
              <img src="img/user.jpg" alt="" class="cricle">
              <div>
                <p>Lara Connors</p>
                <span>Post a photo with you</span>
                <span class="small">Today at 14:26</span>
              </div>
            </div>
            <div class="face-notification">
              <img src="img/user3.jpg" alt="" class="cricle">
              <div>
                <p>Mike Green</p>
                <span>Post something...</span>
                <span class="small">Yesterday at 03:19</span>
              </div>
            </div>
          </div>

        </li>
        <li id="sidebar2" class="p-20">
          <!-- Chat -->
          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user.jpg" alt="" class="cricle">
              <span class="dot green"></span>
            </div>
            <div class="chat-message">
              <p>Mike Green</p>
              <span>Sent you a message</span>
              <span class="small">online</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user2.jpg" alt="" class="cricle">
              <span class="dot green"></span>
            </div>
            <div class="chat-message">
              <p>Lora Bell</p>
              <span>6 New messages</span>
              <span class="small">online</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user3.jpg" alt="" class="cricle">
              <span class="dot orange"></span>
            </div>
            <div class="chat-message">
              <p>Tony Lee</p>
              <span>Away from keyboard.</span>
              <span class="small">Away</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user4.jpg" alt="" class="cricle">
              <span class="dot grey"></span>
            </div>
            <div class="chat-message">
              <p>Jim Connor</p>
              <span>Is offline.</span>
              <span class="small">offline</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user5.jpg" alt="" class="cricle">
              <span class="dot green"></span>
            </div>
            <div class="chat-message">
              <p>Sara Lower</p>
              <span>Sent you a message</span>
              <span class="small">online</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user.jpg" alt="" class="cricle">
              <span class="dot grey"></span>
            </div>
            <div class="chat-message">
              <p>Mick Pole</p>
              <span>Is offline.</span>
              <span class="small">offline</span>
            </div>
          </div>

          <div class="chat-sidebar">
            <div class="chat-img">
              <img src="img/user3.jpg" alt="" class="cricle">
              <span class="dot green"></span>
            </div>
            <div class="chat-message">
              <p>James Tree</p>
              <span>Awaiting your reply.</span>
              <span class="small">online</span>
            </div>
          </div>
        </li>
      </ul>
      <!-- End of Sidebars -->
        
    </div>
    <!-- End of Main Container -->

        <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
