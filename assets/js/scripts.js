"use strict"
var headerCenter = window.pageYOffset + document.querySelector("header").offsetHeight / 2;
var lazyBackgrounds = document.querySelectorAll(".background");
var lazyImages = document.querySelectorAll("img.lazy");
var window_height = document.documentElement.clientHeight;
var window_width = document.documentElement.offsetWidth;
var windowScrollTop = window.pageYOffset;
var windowScrollBottom = windowScrollTop + window_height;
$('input[name="phone"]').mask('+7 (999) 999-99-99');
lazyLoadingBg();
lazyLoadingImg();

setTimeout(function () { popup_close(); }, 300);
setTimeout(function () { animations(); }, 600);

jQuery(document).ready(function ($) {

   //RESIZE EVENTS
   jQuery(window).on("orientationchange resize", function () {
      window_height = document.documentElement.clientHeight;
      window_width = document.documentElement.offsetWidth;
   });

   //SCROLL EVENTS
   jQuery(window).on("scroll", function () {
      windowScrollTop = window.pageYOffset;
      windowScrollBottom = window.pageYOffset + window_height;
      headerCenter = window.pageYOffset + document.querySelector("header").offsetHeight / 2;
      lazyLoadingBg();
      lazyLoadingImg();
      setTimeout(function () {
         animations();
      }, 300);
   });

   //SCROLL TO BLOCK
   jQuery(".scrollto").on("click", function () {
      var elementClick = jQuery(this).attr("data-target");
      var destination = jQuery("." + elementClick).offset().top;
      jQuery("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination }, 1000);
   });
});

//-----------------------------------/
// OLL FUNCTIONS                     /
//-----------------------------------/

/*lazy Backgrounds*/
function lazyLoadingBg() {
   if (lazyBackgrounds.length > 0) {
      lazyBackgrounds.forEach(lazyBg => {
         var lb_top = lazyBg.getBoundingClientRect().top + window.pageYOffset;
         var lb_bot = lazyBg.offsetHeight + lb_top;
         if (lazyBg.dataset.color || lazyBg.dataset.image || lazyBg.dataset.image_mobil) {
            var lb_color = lazyBg.dataset.color;
            var lb_image = lazyBg.dataset.image;
            var lb_image_mobil = lazyBg.dataset.image_mobil;
            if (windowScrollTop < lb_bot + 500 && windowScrollBottom > lb_top - 500) {
               if (lb_color) {
                  lazyBg.style.backgroundColor = lb_color;
               }
               if (lb_image) {
                  if (lb_image_mobil && window_width <= 1023) {
                     lazyBg.style.backgroundImage = "url('" + lb_image_mobil + "')";
                  }
                  else {
                     lazyBg.style.backgroundImage = "url('" + lb_image + "')";
                  }
               }
               lazyBg.removeAttribute("data-color");
               lazyBg.removeAttribute("data-image");
               lazyBg.removeAttribute("data-image_mobil");
            }
         }
      });
   }
}

/*lazy Images*/
function lazyLoadingImg() {
   if (lazyImages.length > 0) {
      lazyImages.forEach(lazyImg => {
         if (lazyImg.dataset.src) {
            var lazyImg_top = lazyImg.getBoundingClientRect().top + window.pageYOffset;
            var lazyImg_bot = lazyImg.offsetHeight + lazyImg_top;
            var lazyImg_src = lazyImg.dataset.src;
            if (windowScrollTop < lazyImg_bot + 500 && windowScrollBottom > lazyImg_top - 500) {
               lazyImg.setAttribute("src", lazyImg_src);
               lazyImg.removeAttribute("data-src");
            }
         }
      });
   }
}

/*animations*/
function animations() {
   jQuery(".anim").each(function () {
      var anim_box = jQuery(this),
         anim_box_top = anim_box.offset().top - 200,
         anim_box_bottom = anim_box_top + anim_box.outerHeight() + 200;
      if (windowScrollBottom >= anim_box_top && jQuery(window).scrollTop() <= anim_box_bottom && !anim_box.hasClass("animate")) {
         anim_box.addClass("animate");
      }
   });
}

//QUIZE

//---------------Проверка выбран ли елемент формы, чтоб активировать кнопку

jQuery("input[type='radio'], input[type='checkbox']").on("change", function () {
   var radio_check = jQuery(this).parents(".step").find("input:checked").length;
   var hiddenBox = jQuery(this).parents(".step").find(".hiddenBox");
   if (radio_check > 0) {
      hiddenBox.addClass("hidden");
   }
   else {
      hiddenBox.removeClass("hidden");
   }
});

//---------------Переход по шагам

function step(num) {
   jQuery(".loadStep").addClass("start");
   setTimeout(function () {
      jQuery(".screen").removeClass("active");
      jQuery(".step--" + num).addClass("active");
   }, 700);
   setTimeout(function () {
      jQuery("html:not(:animated),body:not(:animated)").animate({ scrollTop: 0 }, 0);
   }, 710);
   setTimeout(function () {
      jQuery(".loadStep").removeClass("start");
   }, 1400);
}

//---------------Определение подарка
function getRandomInt(max) {
   return Math.floor(Math.random() * max) + 1;
}
var present_number = getRandomInt('3');
if (present_number == 1) {
   var present_value = "Скульптурирование";
}
else if (present_number == 2) {
   var present_value = "Буккальный массаж";
}
else if (present_number == 3) {
   var present_value = "Сплит-массаж";
}
jQuery(".presentWrapp--" + present_number).addClass("active");
jQuery(".present_value").val(present_value);