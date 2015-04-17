(function ($) {
  Drupal.behaviors.mobile_menu = {
    attach: function (context, settings) {

      $("#menu-toggle").click(function() {
         $("ul#main-menu").slideToggle("fast");
      });

    }
  };
})(jQuery);
