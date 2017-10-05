<?php 
use yii\helpers\Url;
$this->title = 'Защита Авто 22 - Напишите нам';

?>
        <!--s3_require-->
        
        
      <script type="text/javascript" src="js/jquery.maskedinput.js"></script>  
        
<link rel="stylesheet" href="g\basestyle\1.0.0\anketa\anketa.blue.css" type="text/css">
<script type="text/javascript" src="g\basestyle\1.0.0\anketa\anketa.js"></script>
<!--/s3_require-->

        <div class="layout layout_center not-columned layout_center_2_id_11_1">
            <div class="editorElement layer-type-block ui-droppable block-25">
                <?php
                        include('include/sidebar.php');
                    ?>
                <div class="layout layout_59_id_61">
                    <h1 class="h1 widget-48 widget-type-h1 editorElement layer-type-widget">
                        Напишите нам
                    </h1>
                    <article class="content-62 content widget-49 widget-type-content editorElement layer-type-widget">
                        <div class="g-page g-page-anketa">
                            <form data-s3-anketa-id="85723641" method="post"  action="<?php echo Url::toRoute('site/mail');?>" id="form_g-anketa">
                                <div class="g-form-field  g-form-field--title-pos-1 g-form-field--required">
                                    <div class="g-form-field__title ">
                                        <label for="name">Ваше имя<span class="g-form-field__required-mark">*</span></label>
                                    </div>
                                    <div class="g-form-field__value">
                                        <input required class="g-form-control-text g-form-control-value g-form-control--required" type="text" size="40" maxlength="100" value="" name="name" id="d[0]">
                                    </div>
                                </div>                                  
                                <div class="g-form-field  g-form-field--title-pos-1">
                                    <div class="g-form-field__title ">
                                        <label for="phone">Телефон</label>
                                    </div>
                                    <div class="g-form-field__value">
                                        <input required class="g-form-control-text g-form-control-value" type="tel" size="40" maxlength="100" value="" name="phone" id="phoneId" data-validator="phone">
                                     <script>$("#phoneId").mask("+9(999) 999-9999");</script>
                                    </div>
                                </div>
                                <div class="g-form-field  g-form-field--title-pos-1 g-form-field--required">
                                    <div class="g-form-field__title ">
                                        <label for="message">Сообщение<span class="g-form-field__required-mark">*</span></label>
                                    </div>
                                    <div class="g-form-field__value">
                                        <textarea required class="g-form-control-textarea g-form-control-value g-form-control--required" cols="42" rows="7" name="message" id="d[2]"></textarea>
                                    </div>
                                </div>                                  
                                <div class="g-form-row g-form-row--submit">
                                    <input type="submit" class="g-button" value="Отправить">
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </div>
