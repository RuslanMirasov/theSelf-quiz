// Lock scroll function? when popup is open
function body_lock() {
   const lockPadding = window.innerWidth - document.querySelector('.main').offsetWidth;
   jQuery(".header,.footer,.main").css('padding-right', lockPadding + 'px');
   jQuery("body").addClass("lock");
}

// Open popup
var activePopup = "";
function popup(id, subject, title, subtitle, btn) {
   var popupBox = jQuery('.popup');
   var openPopup = popupBox.find(".popup__content.open").length;
   activePopup = jQuery("#" + id);
   //all
   if (openPopup > 0) {
      jQuery(".popup,.popup__content").removeClass("open");
      activePopup.addClass("open");
      activePopup.find(".popup__content").addClass("open");
   }
   else {
      body_lock();
      activePopup.addClass("open");
      activePopup.find(".popup__content").addClass("open");
   }
}

// Close popup
function popup_close() {
   jQuery(".popup,.popup__content").removeClass("open");
   setTimeout(function () {
      jQuery("body").removeClass("lock");
      jQuery(".popup__input").val("");
      jQuery(".popup__input").removeClass("red");
      jQuery("div.label .error").remove();
      jQuery(".popup").animate({ scrollTop: 0 }, 0);
   }, 400);
}