//form send
var root = jQuery(".root").val();
jQuery(document).ready(function () {
   jQuery(".required").on("focus", function () {
      var focusLabel = jQuery(this).parents(".label");
      jQuery(this).removeClass("red");
      focusLabel.find(".error").remove();
   });

   jQuery(".form").on("submit", function (e) {
      e.preventDefault();
      var $sended_form = jQuery(this);
      var answer = checkForm($sended_form);
      if (answer != false) {
         popup('loading');
         var formData = new FormData($sended_form[0]);
         jQuery.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            url: root + '/db/db.php',
            data: formData,
            success: function (html) {
               if (html != "ok") {
                  jQuery(".popup_error").html(html);
                  popup('error');
               }
               else {
                  jQuery.ajax({
                     type: "POST",
                     processData: false,
                     contentType: false,
                     url: root + '/sendmail/send.php',
                     data: formData,
                     success: function () {
                        setTimeout(function () {
                           popup('thx');
                           //ga('send', 'event', ''+sbt, ''+sbt);
                           //yaCounterXXXXXXXXXXXXX.reachGoal(''+sbt);						
                        }, 1000);
                     }
                  });
               }
            }
         });
      }
      return false;
   });
});

/*form validation*/
function checkForm(formId) {
   var $form = jQuery(formId);
   var checker = true;
   $form.find(".required").each(function () {
      var requiredLabel = jQuery(this).parents(".label");
      var requiredInput = jQuery(this);
      var errorText = "Обязательное поле!";
      if (requiredInput.val() == "") {
         requiredInput.addClass("red");
         requiredLabel.prepend("<div class='error'>" + errorText + "</div>");
         checker = false;
      }
      else {
         if (
            requiredInput.attr("name") == "email" && !/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/.test(requiredInput.val()) ||
            requiredInput.attr("name") == "phone" && /[^0-9\+ ()\-]/.test(requiredInput.val())
         ) {
            if (requiredInput.attr("name") == "email") { errorText = "Не верный формат email"; }
            if (requiredInput.attr("name") == "phone") { errorText = "Не верный формат телефона"; }
            requiredInput.addClass("red");
            requiredLabel.prepend("<div class='error'>" + errorText + "</div>");
            checker = false;
         }
      }
   });
   if (checker != true) {
      return false;
   }
}