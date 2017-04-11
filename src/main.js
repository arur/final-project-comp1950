$(function () {
  var $sidebar = $('.ps-links');
  var $window = $(window);
  var offset = $sidebar.offset();
  var topPadding = 15;
  var mTop = 0;
  var isMobile = window.matchMedia('only screen and (max-width: 760px)');

  if (!isMobile.matches && $sidebar.width() <= 255) {
    $window.scroll(function () {
      if ($(window).scrollTop() + $(window).height() > $(document).height() - 150) {
        $sidebar.stop();
      } else if ($window.scrollTop() > offset.top) {
        $sidebar.stop().animate({
          marginTop: $window.scrollTop() - offset.top + topPadding
        }, 600);
      } else {
        $sidebar.stop().animate({
          marginTop: 0
        }, 600);
      }
    });
  }
});
