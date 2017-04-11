$(function () {
  var $sidebar = $('.ps-links');
  var $window = $(window);
  var offset = $sidebar.offset();
  var topPadding = 15;
  var isMobile = window.matchMedia('only screen and (max-width: 760px)');

  if (!isMobile.matches) {
    $window.scroll(function () {
      if ($window.scrollTop() > offset.top) {
        $sidebar.stop().animate({
          marginTop: $window.scrollTop() - offset.top + topPadding
        });
      } else {
        $sidebar.stop().animate({
          marginTop: 0
        });
      }
    });
  }
});
