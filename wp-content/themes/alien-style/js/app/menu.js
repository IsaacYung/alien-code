(function(global, $){
  'use strict'

  $.fn.header = function() {
    var $header = this,
        $logo   = this.find('.logo-linear, .logo-tall');

    $(global).scroll(function () {
      if ($(global).width() >= 641) {
        if($(this).scrollTop() > 20) {
          $header.addClass('off-top');
          $header.removeClass('on-top');
          $logo.first().css({
            height: 0,
          });
          $logo.last().css({
            height: '51px',
          });
        } else {
          $header.addClass('on-top');
          $header.removeClass('off-top');
          $logo.first().css({
            height: '125px',
          });
          $logo.last().css({
            height: 0,
          });
        }
      }
    });
  };

  $(document).ready(function() {
    $('.header').header();
  });
})(window, jQuery);
