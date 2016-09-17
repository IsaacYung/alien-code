(function(global, $){
  'use strict'

  $.fn.siteHeader = function() {
    var $categories = $('.categories button');
    var $categoriesContainer = $('.categories-container');

    $categories.click(function() {
      $categoriesContainer.toggleClass('show-categories');
    });
  };

  $.fn.categoriesContainer = function() {
    var $categories = this;

    $(global).scroll(function () {
      if ($(global).width() >= 641) {
        if($(this).scrollTop() > 20) {
          $categories.addClass('off-top-categories');
          $categories.removeClass('on-top-categories');
        } else {
          $categories.addClass('on-top-categories');
          $categories.removeClass('off-top-categories');
        }
      }
    });
  };

  $(document).ready(function() {
    $('.site-header').siteHeader();
    $('.categories-container').categoriesContainer();
  });
})(window, jQuery);
