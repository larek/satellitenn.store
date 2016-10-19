<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use app\assets\SatelliteStyle;
use app\modules\admin\models\Category;

SatelliteStyle::register($this);
$route = Yii::$app->urlManager->parseRequest(Yii::$app->request)[0];

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=1200px, initial-scale=0.6">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    


    <!-- <form method="post" action="./ru" id="mainform"> -->


<div class="container">
<div id="header-firstpage" class="header-carousel">
    <div class="headersection">

<div class="row hidden-xs">
    <div class="nav-utility-background col-xs-12">
        <ul class="nav nav-utility nav-pills pull-right">
           
            
                    <li class='hide'>
                        <a href="/ru-ru/ru/about-thule/contact-us">Обратная связь</a>
                    </li>
                
                    <li class='hide'>
                        <a href="/ru-ru/ru/extranet">Экстранет</a>
                    </li>
                
            
           
     
            <li>

            <?= Html::a('<i class="fa fa-envelope"></i>',['site/callback'],['class'=>'callback-header-link','title'=>'Обратная связь']);?>
            
                
            </li>
            <li>
                <?= Html::a('<i class="fa fa-vk"></i>','https://vk.com/satellitenn',['class'=>'callback-header-link','title'=>'Вконтакте','target' => '_blank']);?>
            </li>
            
            <!-- facebook -->
            <li id="header_0_ctl00_facebookLink" class="social-media-link hide">
                <a href="https://vk.com/satellitenn" target="_blank" title='Вконтакте'>
                    <img src="https://cdn2.iconfinder.com/data/icons/windows-8-metro-style/128/vk.com.png" style='height:20px'>
                </a>
            </li>
            
        </ul>
    </div>

</div>

        



<div class="navbar navbar-top navbar-inverse">

        <!-- Desktop/tablet menu --><div class="navbar-header">
        <div class="container hidden-xs">
        
            
                    <ul class="nav navbar-nav">
                        
                
                    <li class='logoItem'>
                        <?= Html::a(Html::img('/images/logo2.png'),['site/index'],['class' => 'navbar-logo']);?>
                    </li>

                    <li>
                        <?= Html::a('Главная',['site/index'])?>
                    </li>

                    <li>
                        <?= Html::a('Каталог',['site/catalog'])?>
                    </li>

                    <li>
                        <?= Html::a('Контакты',['site/contacts'])?>
                    </li>

                    
                
                    </ul>
                

            <div id="" class="navbar-form navbar-right" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'searchButton')">
                <div class='cartMenuItem'>
                        <?= Html::a('<i class="fa fa-shopping-cart"></i>',['site/cart'], ['class' => 'cartMenuItem'])?>
                    </div>
                <div class="form-group">
                    <input name="" type="text" maxlength="1024" id="" class="search-input" value='<? if(isset($this->params['search-query'][0])){ echo $this->params['search-query'][0];}?>'>
                </div>
                <input type="submit" name="header_0$ctl01$searchButton" value="Поиск" id="searchButton" class="btn btn-search">
            
            </div>

        </div>
        </div>

        <!-- Phone menu -->
        <div class="visible-xs">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed hamburger-btn" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/ru-ru/ru?ls=true" id="header_0_ctl01_aMarket" role="button" data-toggle="modal" data-target="#marketselector" class="navbar-brand marketselectorlink" rel="nofollow">
                    <img id="header_0_ctl01_imgMarketFlag" title="Россия" src="https://cdn1.static-tgdp.com/~/media/images/common/flags/flag_russia.png" alt="Россия" style="height: 16px; width: 16px;">
                    Россия
                </a>
            </div>
            
            

            <div class="navbar-collapse collapse navbar-responsive-collapse">

                
                        <ul class="nav navbar-nav">
                    
                        <li>
                            <a href="/ru-ru/ru/buyers-guide">
                                Каталог подбора
                            </a>
                        </li>
                    
                        <li>
                            <a href="/ru-ru/ru/dealer-locator">
                                Найти дилера
                            </a>
                        </li>
                    
                        <li>
                            <a href="/ru-ru/ru/shopping/shopping-list">
                                Список покупок
                            </a>
                        </li>
                    
                        <li>
                            <a href="/ru-ru/ru/thule-crew">
                                Thule Crew
                            </a>
                        </li>
                    
                        <li>
                            <a href="/ru-ru/ru/about-thule/about-the-thule-brand">
                                О компании Thule
                            </a>
                        </li>
                    
                        </ul>
                    
            </div>

        </div>


</div>


        
<div class="navbar navbar-main nocollapse-desktop">

    <div class="navbar-header">
       

        <div class="nav-container" id="accordion1">
            
                    
                        <a href="#main-nav-collapse" class="btn navbar-btn navbar-toggle collapsed" data-toggle="collapse" data-parent="#accordion1">
                            <span>Продукты<i class="thuleicon-arrow-circle-alt-down thuleicon-2x"></i></span>
                        </a>
                    
                    
                
                    
                        <a href="#search-nav-collapse" class="btn navbar-btn navbar-toggle collapsed" data-toggle="collapse" data-parent="#accordion1">
                            <span>Поиск<i class="thuleicon-search thuleicon-2x"></i></span>
                        </a>
                    
                    
                
            <div class="nav-background"></div>
            <div class="panel visible-xs-block">
                <div class="search-nav-collapse navbar-collapse collapse" id="search-nav-collapse">
                    <div id="header_0__ctrl_0_Panel1" class="navbar-search" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'searchButtonMobile')">
    
                        <input name="header_0$_ctrl_0$searchQueryMobile" type="text" id="searchQueryMobile" class="search-query">
                        <input type="submit" name="header_0$_ctrl_0$searchButtonMobile" value="Поиск" id="searchButtonMobile" class="btn btn-search">
                    
</div>
                </div>
            </div>
            <div class="panel">
                <div class="main-nav-collapse navbar-collapse collapse" id="main-nav-collapse">
                    
                    
                        <div class='link-header'>
                                    <?
                                    $model = Category::find()->where(['header'=>1])->andWhere(['active' => 1])->orderBy(['order_id' => SORT_ASC])->all();
                                    foreach($model as $item){
                                        
                                        echo Html::a($item->title,['site/category','id' => $item->url]);
                                        echo "<br>";
                                    }
                                    ?>
                        </div>
                                
                    
                </div>
            </div>
        </div>
    </div>
</div>


    </div>
   <?= $content?>

</div>


            


    


    
            







    


    
            




        </div>


        

        

<div id="footer" class=''>
    <div class="footer-top">
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    
 


<section id="Sub106C">
    <header>
        <h5 class="footer-section-headline text-small-grey">
            
        </h5>
    </header>

    
            <ul class="list-inline centered">
            
             <li>
            <?= Html::a('Оплата',['site/catalog'],['class' => 'btn btn-secondary-footer'])?>
            </li>

             <li>
            <?= Html::a('Доставка',['site/catalog'],['class' => 'btn btn-secondary-footer'])?>
            </li>

            <li>
            <?= Html::a('Каталог',['site/catalog'],['class' => 'btn btn-secondary-footer'])?>
            </li>

            <li>
            <?= Html::a('Контакты',['site/contacts'],['class' => 'btn btn-secondary-footer'])?>
            </li>

             <li>
            <?= Html::a('Прокат','http://rentbox.satellitenn.ru',['class' => 'btn btn-secondary-footer'])?>
            </li>
        
            
        
        </ul>
        

</section>
<div>
    <hr>
    
            <ul class="list-inline">
        
            <li><a href="/catalog" class="footer-category-utility-nav">Каталог</a></li>
            <li><a href="/cart" class="footer-category-utility-nav">Корзина</a></li>
            <li><a href="/contacts" class="footer-category-utility-nav">Контакты</a></li>
            <li><a href="http://rentbox.satellitenn.ru" target='_blank' class="footer-category-utility-nav">Прокат</a></li>
            <li><a href="http://satellitenn.ru" target='_blank' class="footer-category-utility-nav">Оптовикам</a></li>
            <li><a href="" class="footer-category-utility-nav">Оплата</a></li>
            <li><a href="" class="footer-category-utility-nav">Доставка</a></li>
        
        
        </ul>
        
</div>
                </div>
            </div>
        </div>
    </div>
</div>


        


<!-- Modal -->
<!-- <div id="marketselector" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="marketselectorlabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="headline2" id="marketselectorlabel">Select country</div>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->
        
<!-- <div id="familymodal" class="modal" tabindex="-1"><div class="modal-dialog"><div class="modal-content"></div></div></div> -->
        

 <!--    
<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['mainform'];
if (!theForm) {
    theForm = document.mainform;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script> -->

<!-- 
<script src="/WebResource.axd?d=u1iAAwFrj7BQPmYKT_00Aa8HsNOlBtoUIoJEs_p9r1VY8diGWGsJF_fQWWYjiDOXJ-SuT7oph1BvhnBZRIc6q57DoPc1&amp;t=635875545181218729" type="text/javascript"></script>
</form>

    
<script>var host = 'www.thule.com'; </script>
<script src="https://cdn1.static-tgdp.com/ui/trede/release/rel-jquery-8FC25E27D42774AEAE6EDBC0A18B72AA.js"></script>

<script> $.noConflict();</script>

<script src="https://cdn1.static-tgdp.com/ui/trede/release/rel-main-FBD3C11B3E0527D21C27E8F556A73D43.js"></script>
 -->

<!--[if lte IE 9]>
    <script src="https://cdn1.static-tgdp.com/ui/trede/release/rel-lte-ie9-603E63BA48D0D29F68E7C185325F117A.js"></script>
<![endif]-->
    
    
    <!-- SC6-PRO-THU -->


<!-- 
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","//connect.facebook.net/en_US/fbevents.js");fbq("init","917790871640714");fbq("track","PageView");</script>
<noscript>&lt;img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=917790871640714&amp;amp;ev=PageView&amp;amp;noscript=1"&gt;</noscript><script type="text/javascript" id="">var ezt=ezt||[];(function(){var a=document.createElement("script");a.src=("https:"==document.location.protocol?"https://secure":"http://pixel")+".quantserve.com/aquant.js?a\x3dp-Aba75g5na8CRd";a.async=!0;a.type="text/javascript";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();ezt.push({qacct:"p-Aba75g5na8CRd",orderid:"",revenue:""});</script>
<noscript>
  &lt;img src="//pixel.quantserve.com/pixel/p-Aba75g5na8CRd.gif?labels=_fp.event.Default" style="display: none;" border="0" height="1" width="1" alt="Quantcast"&gt;
</noscript> -->
        

        <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
