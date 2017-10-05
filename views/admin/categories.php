<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Админ панель - Категории';
?>
<style>
    
    .btn-info{
        color:white;
    }
    
    .btn-info:hover{
        color:white;
    }
    
</style>
<div class="site-about">
  <h1>Категории</h1>
  
  <br>
  <button class="btn btn-info" >Добавить</button>
  <br>
  <?php
  
  foreach($categories as $item){
            ?>
            <div class="row">
               <div class="col-md-6">
                    <h1><?php echo $item["id"];?>. <b><?php echo $item["logo"];?></b></h1>
                <img style="width: 150px;" src="/images/brands/<?php echo $item["logo"];?>.png" width="30%">
                </div>
                 <div class="col-md-6" style="padding:30px;">
                    <button class="btn btn-info">Изменить</button>
                    <br><br>
                    <button class="btn btn-info">Удалить</button>
                </div>
            

            </div>
           <br><br><br>
            
            <?php }?>
  
</div>
