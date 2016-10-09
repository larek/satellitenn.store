<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use app\assets\AppAsset;

AppAsset::register($this);
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

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">
                    <img alt="Brand" src="/images/favicon.ico">
                </a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
            <ul class='nav navbar-nav'>
                <li class=''><a href="/">satellitenn.store</a></li>
            </ul>
            <?=  Menu::widget([
                'options' => [
                    'class' => 'nav navbar-nav',
                ],
                'items' => [
                    
                    ['label' => '<i class="fa fa-th"></i> Каталог', 'url' => ['site/index'], 'encode' => false],
                   // ['label' => '<i class="fa fa-th"></i> Каталог', 'url' => '#', 'encode' => false],
                    ['label' => '<i class="fa fa-book"></i> Контакты', 'url' => '#', 'encode' => false],
                   
                ],
            ]);?>
            
                <ul class="nav navbar-nav">
                    
                    <li class="dropdown hide">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class='fa fa-wrench'></i> Сервис <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/uslugi;tehnicheskoe-obsluzhivanie-i-remont-stomatologicheskogo-oborudovaniya">Техническое обслуживание и ремонт стоматологического оборудования</a></li>
                            <li><a href="/uslugi;remont-stomatologicheskih-nakonechnikov">Ремонт стоматологических наконечников</a></li>
                            <li><a href="uslugi;garantiynoe-obsluzhivanie">Гарантийное обслуживание</a></li>
                            
                        </ul>
                    </li>
                </ul>

                <div class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="header_search form-control " placeholder="Быстрый поиск ">
                    </div>
                    <button type="submit" class="btn btn-default"><i class='fa fa-search'></i> Найти</button>

                    <div class="list-group quicksearch_result">
                        
                    </div>
                </div>
                <?= Menu::widget([
                    'options' => [
                        'class' => 'nav navbar-nav navbar-right'
                    ],
                    'items' => [
                      //  ['label' => '<i class="fa fa-truck"></i> Доставка', 'url' => '#', 'encode' => false],
                        ['label' => '<i class="fa fa-shopping-cart"></i> Корзина', 'url' => ['site/cart'], 'encode' => false, 'options' => ['class' => 'cartMenuItem']]
                    ]
                ]);?>
                
                

            
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    
    <div class="container header_wrapper hide">
        <div class="header">
            <div class="row">
                <div class="col-md-2">
                    <a href="/"><img src="/images/stp_medium_logo.png" alt="" class='img-responsive'></a>           
                </div>
                <div class="col-md-10">
                    
                </div>
            </div>
        </div>
    </div>


    <div class="container content_wrapper">
        
            <?= $content ?>
    
    <div class="footer">
        <div class="row">
            <div class="col-md-12">
                    
            </div>
            <div class="col-md-12 text-center">
                <br>
                &copy; satellitenn.store
            </div>
        </div>
    </div>

    </div> <!-- /container -->

    
        

        <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
