<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css"> 
     <script src="js/jquery.fancybox.min.js"></script>
     
      <div class="layout layout_center not-columned layout_center_2_id_11_1" id="catalog">
        <div class="editorElement layer-type-block ui-droppable block-25">
            <div class="layout column layout_60">
                <div class="widget-47 popup menu-60 wm-widget-menu vertical widget-type-menu_vertical editorElement layer-type-widget" data-child-icons="0">
                    <div class="menu-button">
                        Меню
                    </div>
                    <div class="menu-scroll">
                        <ul>
                        <li class="menu-item"><a href="catalog?brand=<?php echo $brand['logo'];?>#catalog"><span class="menu-item-text"><b>Назад</b></span></a></li>


                        </ul> 
                    </div>
                </div>
            </div>
            
            <style type="text/css">
                .n-thumb {
                float: left;
                margin: 5px;
                }
                
                .nameSpan1{
                font-size: 20px;
                font-weight: bold;
                }
                  .nameSpan2{
                font-size: 18px;
                font-weight: bold;
                }
            </style>
            <div class="layout layout_59_id_61" >
                
                </a><h1 class="h1 widget-48 widget-type-h1 editorElement layer-type-widget">
                    
            </h1>
                
                <article class="content-62 content widget-49 widget-type-content editorElement layer-type-widget">
            
    



<style>
    .name_prod{
        font-size: 18px;
        font-weight: bold;
    }
    p {
    text-indent: 20px; /* Отступ первой строки в пикселах */
   }
</style>
<?php
    $array_image = explode("@|@", $prod['array_images']);
?>
           <div style="">
               
               <div class="row">
                   <div class="col-md-5">
                        
				<a href="/images/catalog/<?php echo $prod["image"];?>" data-fancybox="group" data-caption="<?php echo $prod['name']." - ".$brand['logo'] ." - ". $prod['model'];?>">
	<img src="/images/catalog/<?php echo $prod["image"];?>" alt="" style="width:100%;"/>
    </a>
    <br>
    <div class="row" style="margin-top: 15px;">
     
	                      <?php 
              $i = 1;
              foreach($array_image as $item)
              {
                  if($i==1) { $i=2;continue;};
              echo "<div class=col-md-6><a href=\"/images/catalog/".$item."\" 
              data-fancybox=\"group\" data-caption=\"".$prod['name']." - ".$brand['logo'] ." - ". $prod['model']."\">
	<img style=\" width:100%;\" src=\"/images/catalog/".$item."\" alt=\"\" /></a></div>";
				
               } ?>
             
               </div>
        </div>
		  <div id="prod" class="col-md-7"><span class="name_prod"><?php echo $brand['logo'] .'  '. $prod['model'].'<br><span class=\"nameSpan2\">'.$prod['name'];?></span></span>
		  
		  
		  
		   <div>
           <div id="qwer"></div>
                    </a><br><b>Описание:</b><br>
                    <p><?php echo $prod['description'];?><br></p>
                    <b>Диаметр:</b> <?php echo $prod["diametr"];?> мм<br>
                    <b>Толщина стенки:</b>  <?php echo $prod["tolshina"];?> мм<br>
                <br><br><br>
                    <table width="100%" cellpadding="5">
                       <tr>
                            <th><span><b>Цена: <?php echo $prod["price"];?></b></span></th>


                  <th><div class="layout column layout_73"><button onclick="addToCart(this)" data-id-cart="<?php echo $prod["id"];?>" data-price-cart="<?php echo $prod["price"];?>" class="button-73 widget-54 widget-type-button editorElement layer-type-widget" ><span>Заказать</span></button></div></th>
                        </tr>
                    </table>
                    <br clear="all">
                </div>
		
		  </div>
		  
		  </div>
  
               <div class="clear"></div>
            </div>
            
            <br>
            
                     </article>
                </div>
            </div>
        </div>
        <script type="text/javascript">
	$("[data-fancybox]").fancybox({
		// Options will go here
	});
</script>


