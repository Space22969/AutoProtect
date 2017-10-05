	<?php
$this->title = 'Защита Авто 22 - Каталог';
	?>
	<style>
	    .h1 {
	        margin-left:0;
	    }
	    .content-62 {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
	    }
	</style>
	
		<div class="layout layout_center not-columned layout_center_2_id_11_1" id="cat">
			<div class="editorElement layer-type-block ui-droppable block-25">
			
				<div class="layout layout_59_id_61" style="width: 100%;">
					<h1 class="h1 widget-48 widget-type-h1 editorElement layer-type-widget">
						Каталог
					</h1>
				
				
					<article style="width: 100%;" class="content-62 content widget-49 widget-type-content editorElement layer-type-widget">
                    
                      <div class="box-content">
    


<style>
.oneBrand
{
    padding: 25px;
}
.oneBrand p{
    margin-top: 10px;
    text-align: center;
    font-weight: 700;
}

.oneBrand img{
    text-align: center;
}
</style>
           <?php
          
          $count = 1;
          foreach ($categories as $value) {
              
        
              
           if($count == 1) 
            echo '<div class="row">';
           
             if($count < 7){
                     echo "<div class=\"col-md-2 oneBrand\" >"."<a href=\"catalog?brand=".$value['logo']."#catalog\" class=\"par\"><img width=112px height=64px src=\"images/brands/".$value['logo'].".png\" alt=\"".$value['logo']."\"></a>"."<p>".$value['logo']."</p></div>";
                    $count++;
                }
           
            if($count == 7)  {echo '</div>'; $count = 1; }
              
          }
           ?>
           
  </div>
                    </article>
				
			</div>
		</div>
        </div>
        