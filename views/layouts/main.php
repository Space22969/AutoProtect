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
<html lang="ru">
<head>


    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
       <?php 
       $this->head() 
       ?>
        <meta charset="utf-8">
         
        <meta name="robots" content="all">
        <meta name="description" content="">
        <meta name="keywords" content=".">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="x-rim-auto-match" content="none">
         
         
         
        <!--  -->

                
        <link rel="stylesheet" href="d\1733101\t\v458\images\css\styles.css">
        <link rel="stylesheet" href="d\1733101\t\v458\images\css\designblock.scss.css">
        <link rel="stylesheet" href="d\1733101\t\v458\images\css\s3_styles.scss.css">
         
        <script src="g\libs\jquery\1.10.2\jquery.min.js"></script>
        <script src="g\s3\misc\adaptiveimage\1.0.0\adaptiveimage.js"></script>
        <link rel='stylesheet' type='text/css' href='shared\highslide-4.1.13\highslide.min.css'>
        <script type='text/javascript' src='shared\highslide-4.1.13\highslide-full.packed.js'></script>
<script type='text/javascript'>
hs.graphicsDir = '/shared/highslide-4.1.13/graphics/';
hs.outlineType = null;
hs.showCredits = false;
hs.lang={cssDirection:'ltr',loadingText:'Загрузка...',loadingTitle:'Кликните чтобы отменить',focusTitle:'Нажмите чтобы перенести вперёд',fullExpandTitle:'Увеличить',fullExpandText:'Полноэкранный',previousText:'Предыдущий',previousTitle:'Назад (стрелка влево)',nextText:'Далее',nextTitle:'Далее (стрелка вправо)',moveTitle:'Передвинуть',moveText:'Передвинуть',closeText:'Закрыть',closeTitle:'Закрыть (Esc)',resizeTitle:'Восстановить размер',playText:'Слайд-шоу',playTitle:'Слайд-шоу (пробел)',pauseText:'Пауза',pauseTitle:'Приостановить слайд-шоу (пробел)',number:'Изображение %1/%2',restoreTitle:'Нажмите чтобы посмотреть картинку, используйте мышь для перетаскивания. Используйте клавиши вперёд и назад'};</script>
<script type='text/javascript' src='shared\flowplayer\flowplayer-3.2.9.min.js'></script>
<!-- 46b9544ffa2e5e73c3c971fe2ede35a5 -->
<link rel='stylesheet' type='text/css' href='shared\s3\css\calendar.css'>
<script type='text/javascript' src='shared\s3\js\lang\ru.js'></script>
<script type='text/javascript' src='shared\s3\js\cookie.js'></script>
<script type='text/javascript' src='shared\s3\js\widgets.js?v=8'></script>
<script type='text/javascript' src='shared\s3\js\calendar.packed.js'></script>

<script type='text/javascript'>/*<![CDATA[*/
widgets.addOnloadEvent(function() {
    if (typeof jQuery == 'undefined') {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.src = '/shared/s3/js/jquery-1.7.2.min.js';
        document.body.appendChild(s);
    }
});
/*]]>*/
</script>
        <link rel="stylesheet" href="g\libs\jquery-popover\0.0.3\jquery.popover.css">
         
        <script src="g\libs\jquery-popover\0.0.3\jquery.popover.min.js" type="text/javascript"></script>
         
        <script src="g\s3\misc\form\1.0.0\s3.form.js" type="text/javascript"></script>
         
        <script src="g\libs\jquery-bxslider\4.1.2\jquery.bxslider.min.js" type="text/javascript"></script>
         
        <link rel="stylesheet" href="g\libs\photoswipe\4.1.0\photoswipe.css">
         
        <link rel="stylesheet" href="g\libs\photoswipe\4.1.0\default-skin\default-skin.css">
         
        <script type="text/javascript" src="g\libs\photoswipe\4.1.0\photoswipe.min.js"></script>
         
        <script type="text/javascript" src="g\libs\photoswipe\4.1.0\photoswipe-ui-default.min.js"></script>
          
       <script type="text/javascript" src="d\1733101\t\v458\images\js\title.js"></script>
        
        <script type="text/javascript" src="d\1733101\t\v458\images\js\animations.js"></script>
          
        <!--[if lt IE 10]> <script src="/g/libs/ie9-svg-gradient/0.0.1/ie9-svg-gradient.min.js"></script> <script src="/g/libs/jquery-placeholder/2.0.7/jquery.placeholder.min.js"></script> <script src="/g/libs/jquery-textshadow/0.0.1/jquery.textshadow.min.js"></script> <script src="/g/s3/misc/ie/0.0.1/ie.js"></script> <![endif]-->
        <!--[if lt IE 9]> <script src="/g/libs/html5shiv/html5.js"></script> <![endif]-->
          
        <script>
            document.write('\u003clink rel="stylesheet" href="/d/1733101/t/v458/images/__csspatch/' + (parseInt(localStorage.getItem('s3-themeswitcher-index')) + 1 || 1) + '/title.patch.css" id="s3-csspatchswitcher-link" data-root="/d/1733101/t/v458/images/" \u003e');
        </script>
            
   


</head>
<body>
<?php $this->beginBody() ?>


        
        <div class="wrapper editorElement layer-type-wrapper">
    


       <div class="side-panel side-panel-57 widget-type-side_panel editorElement layer-type-widget widget-42" data-layers="['widget-43':['tablet-landscape':'inSide','tablet-portrait':'inSide','mobile-landscape':'inSide','mobile-portrait':'inSide'],'widget-64':['tablet-landscape':'inSide','tablet-portrait':'inSide','mobile-landscape':'inSide','mobile-portrait':'inSide'],'widget-63':['tablet-landscape':'inSide','tablet-portrait':'inSide','mobile-landscape':'inSide','mobile-portrait':'inSide'],'widget-47':['tablet-landscape':'inSide','tablet-portrait':'inSide','mobile-landscape':'inSide','mobile-portrait':'inSide']]" data-phantom="0" data-position="left">
        <div class="side-panel-top">
            <div class="side-panel-button">
                <span class="side-panel-button-icon">
                <span class="side-panel-button-icon-line"></span>
                <span class="side-panel-button-icon-line"></span>
                <span class="side-panel-button-icon-line"></span>
                </span>
            </div>
        <div class="side-panel-top-inner"></div>
        </div>
            <div class="side-panel-mask"></div>
        <div class="side-panel-content">
            <div class="side-panel-content-inner"></div>
        </div>
    </div>   
<!--Header-->
  <style>
    .site-description{
        width:100%;
    }
    </style>

  <div class="editorElement layer-type-block ui-droppable block-4">
        <div class="layout layout_center not-columned layout_10_id_7">
            <div class="editorElement layer-type-block ui-droppable block-2">
                <div class="layout column layout_56">
                    <div class="editorElement layer-type-block ui-droppable block-23">
                        <div class="site-name widget-2 widget-type-site_name editorElement layer-type-widget">
                            <a href="<?php echo Url::toRoute('/site/index');?>">                           
                                <div class="sn-wrap">   
                                    <div class="sn-text">
                                        <div class="align-elem">
                                            Защита Авто 22
                                        </div>
                                    </div>
                                </div>
                            </a> 
                        </div>
                        <div class="site-description widget-62 widget-type-site_description editorElement layer-type-widget">
                            <div class="align-elem">
                                защита авто из нержавеющей стали
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="layout column layout_8">
                    <div class="editorElement layer-type-block ui-droppable block-3">
                        <div class="phones-47 widget-33 phones-block contacts-block widget-type-contacts_phone editorElement layer-type-widget">
                            <div class="inner">
                                <label class="cell-icon" for="tg-phones-47"><div class="icon"></div></label>
                                <input id="tg-phones-47" class="tgl-but" type="checkbox">
                                    <div class="block-body-drop">
                                        <div class="cell-text">
                                        <div class="title"><div class="align-elem">Телефон:</div></div>
                                        <div class="text_body">
                                            <div class="align-elem">
                                                <div><a href="tel:+7 (961) 232-82-32">+7 (961) 232-82-32</a></div>                                                  
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layout column layout_46">
                    <div class="editorElement layer-type-block ui-droppable block-18">
                        <div class="address-45 widget-32 address-block contacts-block widget-type-contacts_address editorElement layer-type-widget">
                            <div class="inner">
                                <label class="cell-icon" for="tg45"><div class="icon"></div></label>
                                <input id="tg45" class="tgl-but" type="checkbox">
                                    <div class="block-body-drop">
                                        <div class="cell-text">
                                        <div class="title"><div class="align-elem">Адрес:</div></div>
                                            <div class="text_body">
                                                <div class="align-elem">Россия, г. Барнаул, ул. Власихинская 49 / 1</div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layout column layout_58">
                    <a class="button-58 widget-46 widget-type-button editorElement layer-type-widget" href="<?php echo Url::toRoute('/site/send');?>"><span>Заказать звонок</span></a>
                </div>
            </div>
        </div>
    </div>
<!--/header-->
<!--menu-->
<div class="layout layout_center not-columned layout_center_2_id_10_1">
        <div class="layout columned columns-2 layout_2_id_85">
            <div class="layout column layout_85">
                <div class="widget-63 horizontal menu-85 wm-widget-menu widget-type-menu_horizontal editorElement layer-type-widget" data-screen-button="more" data-responsive-tl="button" data-responsive-tp="button" data-responsive-ml="columned" data-more-text="..." data-child-icons="0">
                     
                    <div class="menu-button">
                        Меню
                    </div>
                     
                    <div class="menu-scroll">
                             <ul>
                                 <li class="delimiter"></li><li class="menu-item"><a href="<?php echo Url::toRoute('/site/index');?>"><span class="menu-item-text">Главная</span></a></li>
                                 <li class="delimiter"></li><li class="menu-item"><a href="<?php echo Url::toRoute('/site/catalog');?>"><span class="menu-item-text">Каталог</span></a></li>
                                 <li class="delimiter"></li><li class="menu-item"><a href="<?php echo Url::toRoute('/site/price');?>"><span class="menu-item-text">Цены</span></a></li>
                                 <li class="delimiter"></li><li class="menu-item"><a href="<?php echo Url::toRoute('/site/send');?>"><span class="menu-item-text">Как заказать</span></a></li>
                                 <li class="delimiter"></li><li class="menu-item"><a href="<?php echo Url::toRoute('/site/reviews');?>"><span class="menu-item-text">Отзывы</span></a></li>
                                 <li class="delimiter"></li><li class="menu-item"><a href="<?php echo Url::toRoute('/site/contacts');?>"><span class="menu-item-text">Контакты</span></a></li>
                                 
                                 </ul> 
                    </div>
                     
                </div>
            </div>
       <!--     <div class="layout column layout_86">
                  <div class="widget-64 search-86 wm-search widget-type-search editorElement layer-type-widget" data-setting-type="slide" data-setting-animate="1" data-setting-animate_list="1,0,0,0,0">
    -->
    <style>

    #cart{
        
        padding:10px;
        margin: 5px;
    z-index: 1;
    font-family: Roboto, sans-serif;
    font-size: 20px;
    text-align: center;
    text-decoration: none;
    color: #616161;
    background: repeating-linear-gradient(220deg,#ffc514 0%,#ffe491 100%);
    -webkit-border-radius: 250px;
    -moz-border-radius: 250px;
    border-radius: 250px;
    -webkit-box-shadow: 0 0 0 transparent;
    -moz-box-shadow: 0 0 0 transparent;
    box-shadow: 0 0 0 transparent;
    }
    #cart:hover{
        background: repeating-linear-gradient(120deg,#ffc514 0%,#ffe491 100%);
   
    }
   
    .myBandge{

    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 15px;
    font-weight: bold;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;

    }

    .price{

        margin-left: 10px;
    }
    </style>

    <a href="<?=Url::toRoute('/site/login');?>">Вход на сайт</a>
    <a href="<?=Url::toRoute('/site/signup');?>">Регистрация</a>

    <a href="<?php echo Url::toRoute('/site/cart');?>" style="width:100%;text-decoration:none;">
    <div id="cart">

    <img src="images/cart.png" style="width:25px; margin-left: 5px;">
   
    <span class="price">

<!--
    <span data-of="totalPrice" >45 990</span>
    <span class="rub-icon" data-toggle="visible" style="">p</span>
  
    <span class="myBandge" data-toggle="visible" data-of="totalCount" style="">1</span>
-->

    <span id="totalPrice" >Корзина</span>
    <span class="rub-icon" style="display:none;">p</span>
  
    <span class="myBandge" id="totalCount" style="display:none;">1</span>
</span>
    </div>
    </a>

    <!--<a href="<?php echo Url::toRoute('/site/cart');?>" style="width:100%;">
    <div id="cart">
    <div class="row">
    <div class="col-md-2">
    <img src="images/cart.png" style="width:25px; margin-left: 5px;">
    </div>
    <div class="col-md-10">
    <span class="price"><span data-of="totalPrice">45 990</span>
    <span class="rub-icon" data-toggle="visible" style="">p</span>
    </span>
    <span class="badge" data-toggle="visible" data-of="totalCount" style="">1</span>
    </div>
    </div>
    </div>
    </a>
    -->
   <!-- </div>  
            </div>-->
        </div>
    </div>

<!--/menu-->
    <div class="layout layout_2_id_11">
        <div class="editorElement layer-type-block ui-droppable block-5">
            <div class="editorElement layer-type-block ui-droppable block-6">
                <div class="layout layout_center not-columned layout_13_id_14">
                        
    
    
<!--baner-->
    <div class="blocklist blocklist-14 widget-8 horizontal_mode widget-type-block_list editorElement layer-type-widget" data-slider="0,0,0,0,0" data-swipe="0,0,0,0,0" data-setting-mode="horizontal" data-setting-pause="4000" data-setting-auto="1" data-setting-controls="1,1,1,1,1" data-setting-pager="1,1,1,1,1" data-setting-pager_selector=".blocklist-14 .pager-wrap" data-setting-prev_selector=".blocklist-14 .prev" data-setting-next_selector=".blocklist-14 .next" data-setting-count="3,3,3,3,3" data-setting-columns="1,1,1,1,1" data-setting-move="" data-setting-prev_text="" data-setting-next_text="" data-setting-auto_controls_selector=".blocklist-14 .auto_controls" data-setting-auto_controls="0,0,0,0,0" data-setting-autocontrolscombine="0">

                <div class="header">
            <div class="header_text"><div class="align-elem"><p  style="font-size: 48px">Защита Авто 22</p></div></div>
                    </div>
                        <div class="description"><div class="align-elem"><div class="align-elem"><p  style="font-size: 25px">Защита бамперов и порогов из нержавеющей стали</p></div></div></div>
                <div class="body-outer">
            <div class="body">
                <div class="swipe-shadow-left"></div>
                <div class="swipe-shadow-right"></div>
                <div class="list"><div class="item-outer"><div class="item"><div class="more"><a href="<?php echo Url::toRoute('/site/send');?>"><span class="align-elem">Заказать</span></a></div></div></div></div>
            </div>
        </div>
                                    <div class="controls">
                <span class="prev"></span>
                <span class="next"></span>
            </div>
            
        <div class="bx-pager-wrap">
            <div class="bx-auto_controls">
                                    <div class="auto_controls"></div>
            
                                    <div class="pager-wrap"></div>
            
            </div>
        </div>

    </div>
    
<!--/banner-->

                </div>
            </div>
        </div>
    <style>
        .h1 {
         /*   margin-left:0;*/
        }
        .content-62 {
            /*margin-left:0;
            width:100%;*/
        }
    </style>
<!--main-->
<?= $content ?>
<!--/main-->
<!--footer-->
<style>
.site-copyright{
    width:120%;
}
</style>
<div class="editorElement layer-type-block ui-droppable block-29">
        <div class="editorElement layer-type-block ui-droppable block-30">
            <div class="layout layout_center not-columned layout_72_id_82">
                <div class="editorElement layer-type-block ui-droppable block-33">
                    
                    <div class="layout column layout_75">
                        <div class="address-75 widget-56 address-block contacts-block widget-type-contacts_address editorElement layer-type-widget">
                            <div class="inner">
                                <label class="cell-icon" for="tg75"><div class="icon"></div></label>
                                <input id="tg75" class="tgl-but" type="checkbox">
                                    <div class="block-body-drop">
                                        <div class="cell-text">
                                            <div class="title"><div class="align-elem">Адрес:</div></div>
                                            <div class="text_body">
                                                <div class="align-elem">Россия, г. Барнаул,<br> ул. Власихинская 49 / 1</div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="layout column layout_79">
                        <div class="widget-59 widgetsocial-79 widget-type-social_links editorElement layer-type-widget">
                            <div class="soc-content">  
                                <div class="soc-item vk"><a href="https://vk.com/car_protection" class="soc" target="_blank"><span class="wg-soc-icon"></span></a></div>
                                <div class="soc-item fb"><a href="https://www.facebook.com/zashchita.avto" class="soc" target="_blank"><span class="wg-soc-icon"></span></a></div>
                                <div class="soc-item ins"><a href="https://www.instagram.com/zashchita_avto22/" class="soc" target="_blank"><span class="wg-soc-icon"></span></a></div></div>
                        </div>
                    </div>
        <div class="layout column layout_74">
                <div class="phones-74 widget-55 phones-block contacts-block widget-type-contacts_phone editorElement layer-type-widget">
        <div class="inner">
            <label class="cell-icon" for="tg-phones-74">
                <div class="icon"></div>
            </label>
            <input id="tg-phones-74" class="tgl-but" type="checkbox">
            <div class="block-body-drop">
                <div class="cell-text">
                    <div class="title"><div class="align-elem"></div></div>
                    <div class="text_body">
                        <div class="align-elem">
                                                            <a href="tel:+7 (961) 232-82-32">+7 (961) 232-82-32</a>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
        </div>
        <div class="layout column layout_73">
                <a href="<?php echo Url::toRoute('/site/send');?>" class="button-73 widget-54 widget-type-button editorElement layer-type-widget" data-wr-class="popover-wrap-73"><span>Заказать звонок</span></a>
  
        </div>
    </div>
</div>
</div>
</div>
<style>
    .align-elem1 {
        width: 320px;
    }
</style>

<div class="editorElement layer-type-block ui-droppable block-31">
    <div class="layout layout_center not-columned layout_76_id_81">
        <div class="editorElement layer-type-block ui-droppable block-32">
            <div class="layout columned columns-3 layout_center layout_81_id_77">
                <div class="layout column layout_77">
                    <div class="site-copyright widget-57 widget-type-site_copyright editorElement layer-type-widget">
                         
                        <div class="align-elem1">
                               Защита Авто 22 -  защита авто из нержавеющей стали<br>
                               Copyright &copy; <?php echo date('Y'); ?>                            <br>
                            
                        </div>
                         
                    </div>
                </div>
                <div class="layout column layout_80">
                    <div class="site-counters widget-60 widget-type-site_counters editorElement layer-type-widget">
                    <!--Для метрики-->
 
                    </div>
                </div>
                <div class="layout column layout_78">
                    <div class="mega-copyright widget-58 [param.main_params.logo_type.css_class] widget-type-mega_copyright editorElement layer-type-widget">
                        <span style='font-size:13px;' class='copyright'><!--noindex-->Разработано <a href="http://webofficial.ru/" target="_blank" rel="nofollow">Graphit agency</a><!--/noindex--></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
<!--/footer-->



<!-- assets.bottom -->
<script src="js\cartapi.js" type="text/javascript"></script>
<script src="my\s3\js\site.min.js?1501057006" type="text/javascript"></script>
<script type="text/javascript">/*<![CDATA[*/
$ite.start({"sid":1723171,"vid":1733101,"aid":2043012,"domain":"wm-630002.oml.ru","lang":"ru","trusted":false,"debug":0});
/*]]>*/</script>
<!-- /assets.bottom -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
