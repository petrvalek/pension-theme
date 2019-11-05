//
// APP
// -------

jQuery(document).ready(function($) {
  var App = {
    init: function() {
      this.mobileMenu();
      this.backToTop();
      this.ifAppleDeviceMap();
      if ($(".home, .page-id-101").length) {
        this.showNavigateMobile();
      }
    },
    mobileMenu: function() {
      var $handler = $(".toggle-label");

      $handler.on("click", function() {
        $("body").toggleClass("nav-open");
      });
    },
    backToTop: function() {
      var $handler = $(".js-back-to-top");

      $handler.on("click", function() {
        $("html, body").animate(
          {
            scrollTop: 0
          },
          1000
        );
        return false;
      });
    },
    ifAppleDeviceMap: function() {
      var iOS =
        !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);

      if (iOS == true) {
        $(".js-map").attr(
          "href",
          "http://maps.apple.com/?q=Penzion+U+pani+Berty&ssl=50.6820477,15.8008879"
        );
      }
    },
    showNavigateMobile: function() {
      var $handler = $(".js-mobile-navigate");
      $handler.addClass("open");
      setTimeout(function() {
        $handler.removeClass("open");
      }, 4000);
    }
  };
  App.init();
});
