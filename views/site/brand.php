	    <?php
$this->title = 'Защита Авто 22 - '.$nameBrand;
    ?>


      <div class="layout layout_center not-columned layout_center_2_id_11_1" id="catalog">
        <div class="editorElement layer-type-block ui-droppable block-25">
            <div class="layout column layout_60">
                <div class="widget-47 popup menu-60 wm-widget-menu vertical widget-type-menu_vertical editorElement layer-type-widget" data-child-icons="0">
                    <div class="menu-button">
                        Меню
                    </div>
                    <div class="menu-scroll">
                        <ul>
                        <li class="menu-item"><a href="catalog#cat"><span class="menu-item-text"><b>Назад</b></span></a></li>

                        <?php
                        foreach ($subcategory as $subItem) {
                           
                        ?>
                            <li class="menu-item"><a href="catalog?brand=<?php echo $nameBrand;?>&subbrand=<?php echo $subItem['s_name'];?>#catalog"><span class="menu-item-text"><?php echo $subItem['s_name'];?></span></a></li>
                        <?php
                    }
                        ?>
                        </ul> 
                    </div>
                </div>
            </div>
            
            <style type="text/css">
                .n-thumb {
                float: left;
                margin: 5px;
                }
                
                .nameSpan{
                font-size: 20px;
                font-weight: bold;
                }
            </style>
            <div class="layout layout_59_id_61" >
                
                </a><h1 class="h1 widget-48 widget-type-h1 editorElement layer-type-widget">
                    
                    <?php echo $nameBrand; if($nameSubBrand != '') echo ' - '.$nameSubBrand; ?>
                
                </h1>
                
                <article class="content-62 content widget-49 widget-type-content editorElement layer-type-widget">
            
            <?php 

            foreach ($brand as $item) {
                # code...
            ?>
            <div style="border-bottom: 3px dashed #cacaca;">
                <img src="/images/catalog/<?php echo $item["image"];?>" width="30%">
                <div style="float: right; width: 68%;">
                    <b><a style="color: #ad4683;" href="product?id=<?php echo $item["id"];?>#prod"><?php echo $item["name"];?><br></a></b><br>
                    </a><br><b>Описание:</b><br>
                    <br>
                    <b>Диаметр:</b> <?php echo $item["diametr"];?> мм<br>
                    <b>Толщина стенки:</b>  <?php echo $item["tolshina"];?> мм<br>
                <br><br><br>
                    <table width="74%" cellpadding="5">
                       <tr>
                            <th><span><b>Цена: <?php echo $item["price"];?></b></span></th>
                            <th><div class="layout column layout_73"><a class="button-73 widget-54 widget-type-button editorElement layer-type-widget" onclick="addToCart(this)" data-id-cart="<?php echo $item["id"];?>" data-price-cart="<?php echo $item["price"];?>"><span>Заказать</span></a></div></th>
                        </tr>
                    </table>
                    <br clear="all">
                </div><div class="clear"></div>
            </div>
            
            <br>
            
            <?php }?>
                     </article>
                </div>
            </div>
        </div>
