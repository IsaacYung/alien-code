(function(w) {
  w.gasend = function (where, what, action) {
    if ('ga' in window) {
      w.ga('send', 'event', where, what, action);
    }
  };
})(window);

(function(w, $) {
  var $body = $('body');

  $body.on('click', '[data-rosto]', function() {
    w.gasend('Home', 'banner-home-rosto', 'Clique');
  });

  $body.on('click', '[data-oscar-basico]', function() {
    w.gasend('Home', 'banner-home-oscar-basico', 'Clique');
  });

  $body.on('click', '[data-oscar-segundos]', function() {
    w.gasend('Home', 'banner-home-oscar-segundos', 'Clique');
  });

  $body.on('click', '[data-single-seguro-auto]', function() {
    w.gasend('Blog' , $(this).attr('data-single-seguro-auto'), 'Clique');
  });

  $body.on('click', '[data-sidebar-seguro-auto]', function() {
    w.gasend('Blog' , $(this).attr('data-sidebar-seguro-auto'), 'Clique');
  });

})(window, jQuery);
