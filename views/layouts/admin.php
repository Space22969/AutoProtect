<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    
            <!-- Vendors -->

        <!-- Animate CSS -->
        <link href="/web/adminpanel/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">

        <!-- Material Design Icons -->
        <link href="/web/adminpanel/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- Malihu Scrollbar -->
        <link href="/web/adminpanel/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">

        <!-- Full Calendar -->
        <link href="/web/adminpanel/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">

        <!-- Site CSS -->
        <link href="/web/adminpanel/css/app.css" rel="stylesheet">

        <!-- Page loader -->
        <script src="/web/adminpanel/js/page-loader.min.js"></script>
    </head>
<body>
<?php $this->beginBody() ?>
<?php
            if(Yii::$app->user->isGuest) echo "Авторизован"; else echo "Не авторизован";
            
           
            
?>
        <!-- Page Loader -->
        <div id="page-loader">
            <div class="preloader preloader--xl preloader--light">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" />
                </svg>
            </div>
        </div>

        <!-- Header -->
        <header id="header">
            <div class="logo">
                <a href="<?php echo Url::toRoute('/admin/index');?>" class="hidden-xs">
                    ЗащитаАвто22.рф
                    <small>Админ-панель</small>
                </a>
                <i class="logo__trigger zmdi zmdi-menu" data-mae-action="block-open" data-mae-target="#navigation"></i>
            </div>
        </header>

        <section id="main">
            <aside id="navigation">
                <div class="navigation__header">
                    <i class="zmdi zmdi-long-arrow-left" data-mae-action="block-close"></i>
                </div>

                <div class="navigation__menu c-overflow">
                    <ul>
                        
                        <?php
                     $page =  Yii::$app->controller->action->id;
                     
                     //Yii::$app->user->isGuest
                       if($page == "index") $main = 'class="navigation__active"';
                       if($page == "categories") $cat = 'class="navigation__active"';
                       if($page == "subcategories") $subcat = 'class="navigation__active"';
                       if($page == "products") $prods = 'class="navigation__active"';
                       
                      ?>
                        <li <?php echo $main;?>><a href="<?php echo Url::toRoute('/admin/index');?>"><i class="zmdi zmdi-home"></i> Главная</a></li>
                        <li <?php echo $cat;?>><a href="<?php echo Url::toRoute('/admin/categories');?>"><i class="zmdi zmdi-circle"></i> Категории</a></li>
                        <li <?php echo $subcat;?>><a href="<?php echo Url::toRoute('/admin/subcategories');?>"><i class="zmdi zmdi-circle-o"></i> Подкатегории</a></li>
                        <li <?php echo $prods;?>><a href="<?php echo Url::toRoute('/admin/products');?>"><i class="zmdi zmdi-case"></i> Товары</a></li>
                        <li><?= Html::a('<i class="zmdi zmdi-power-off-setting"></i> Выход из Админ панели', Url::toRoute('/admin/logout'), ['data-method' => 'post']) ?></li>
                        
                        
    
                    </ul>
                </div>
            </aside>

            <section id="content">
                <div class="card" style="padding:50px;">
                 <?= $content ?>

                </div>
            </section>


        </section>

        <!-- Older IE Warning -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="ie-warning__container">
                    <ul class="ie-warning__download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->


        <!-- Javascript Libraries -->

        <!-- jQuery -->
        <script src="/web/adminpanel/vendors/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="/web/adminpanel/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Malihu ScrollBar -->
        <script src="/web/adminpanel/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- Bootstrap Notify -->
      <!--  <script src="/web/adminpanel/vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>-->

        <!-- Moment -->
        <script src="/web/adminpanel/vendors/bower_components/moment/min/moment.min.js"></script>

        <!-- FullCalendar -->
        <script src="/web/adminpanel/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

        <!-- Simple Weather -->
        <script src="/web/adminpanel/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>

        <!-- Salvattore -->
        <script src="/web/adminpanel/vendors/bower_components/salvattore/dist/salvattore.min.js"></script>

        <!-- Flot Charts -->
        <script src="/web/adminpanel/vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="/web/adminpanel/vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="/web/adminpanel/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>

        <!-- Sparkline Charts -->
        <script src="/web/adminpanel/vendors/jquery.sparkline/jquery.sparkline.min.js"></script>

        <!-- EasyPie Charts -->
        <script src="/web/adminpanel/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Demo Only -->
        <script src="/web/adminpanel/demo/js/flot-charts/curved-line.js"></script>
        <script src="/web/adminpanel/demo/js/flot-charts/line.js"></script>
        <script src="/web/adminpanel/demo/js/easy-pie-charts.js"></script>
     <!--   <script src="/web/adminpanel/demo/js/misc.js"></script>-->
        <script src="/web/adminpanel/demo/js/sparkline-charts.js"></script>
        <script src="/web/adminpanel/demo/js/calendar.js"></script>

        <!-- Site Functions & Actions -->
        <script src="/web/adminpanel/js/app.min.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
