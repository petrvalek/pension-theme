//
// APP
// -------

jQuery(document).ready(function($) {
  var App = {
    init: function() {
      this.mobileMenu();
      this.backToTop();
      this.addSubscriber();
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
    showNavigateMobile: function() {
      var $handler = $(".js-mobile-navigate");
      $handler.addClass("open");
      setTimeout(function() {
        $handler.removeClass("open");
      }, 4000);
    },
    addSubscriber: function() {
      $(".js-newsletter-form").submit(function(event) {
        var ajaxRequest;

        /* Stop form from submitting normally */
        event.preventDefault();

        /* Clear result div*/
        $("#result").html("");

        /* Get from elements values */
        var values = $(this).serialize();
        var action = $(this).attr("action");

        ajaxRequest = $.ajax({
          url: action,
          type: "post",
          data: values
        });

        /*  Request can be aborted by ajaxRequest.abort() */

        ajaxRequest.done(function(response, textStatus, jqXHR) {
          // Show successfully for submit message
          $(".form-notify .success").removeClass("is-hidden");
        });

        /* On failure of request this function will be called  */
        ajaxRequest.fail(function() {
          // Show error
          $(".form-notify .error").removeClass("is-hidden");
        });
      });
    }
  };
  App.init();
});
