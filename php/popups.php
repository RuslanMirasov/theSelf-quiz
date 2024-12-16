<!--Thank you-->
<div class="popup blurBg" id="thx">
   <div class="popup__body">
      <div class="close_area" onclick="popup_close()"></div>
      <div class="popup__content">
         <div class="popup__close" onclick="popup_close()"></div>
         <div class="titleBox ta--c">
            <div class="ok"></div>
            <h4 class="title__bold"><span class="color">Спасибо!</span></h4>
            <p class="subtitle">
               Ваша заявка успешно отправлена и <br>
               наш менеджер свяжется с вами в <br>
               ближайшее время
            </p>
         </div>
      </div>
   </div>
</div>

<!--ERROR-->
<div class="popup blurBg" id="error">
   <div class="popup__body">
      <div class="close_area" onclick="popup_close()"></div>
      <div class="popup__content">
         <div class="popup__close" onclick="popup_close()"></div>
         <div class="titleBox ta--c">
            <div class="ok ok--error">
               <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/error.svg" class="lazy" alt="" />
            </div>
            <h4 class="title__bold"><span class="error_color"> Отмена:(( </span></h4>
            <p class="subtitle popup_error">
               При выполнении заброса произошла <br class="del_in_mobil">
               ошибка, попробуйте повторить попытку <br class="del_in_mobil">
               через несколько минут.
            </p>
         </div>
      </div>
   </div>
</div>

<!--loading-->
<div class="popup blurBg" id="loading">
   <div class="popup__body">
      <div class="popup__content">
         <div class="loader">
            <img src="<?php echo $assets; ?>img/img.png" data-src="<?php echo $assets; ?>svg/clock.svg" class="lazy" alt="" />
         </div>
      </div>
   </div>
</div>

<!--preloader-->
<div class="popup open" id="preloader">
   <div class="popup__body">
      <div class="popup__content open">
         <div class="loader">
            <img src="<?php echo $assets; ?>svg/logo.svg" alt="" />
         </div>
      </div>
   </div>
</div>