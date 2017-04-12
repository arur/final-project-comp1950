$(function () {
  var $sidebar = $('#toc');
  var $window = $(window);
  var offset = $sidebar.offset();
  var topPadding = 15;
  var isMobile = window.matchMedia('only screen and (max-width: 767px)');

  tocExpand();

  if ($sidebar.length !== 0 && !isMobile.matches && ($sidebar.width() <= 255)) {
    $window.scroll(function () {
      if ($(window).scrollTop() + $(window).height() > $(document).height() - 150) {
        $sidebar.stop();
      } else if ((document.selectedStyleSheetSet !== 'projector') && $window.scrollTop() > offset.top) {
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
  function tocExpand () {
    var tocTitle = $('#toc .ps-toc-title');
    if (tocTitle.length !== 0) {
      var tocList = $('#secondaryNav');
      var border = parseInt(tocTitle.css('border-bottom-width'));
      if (border === 3) {
        tocList.addClass('show');
        tocTitle.removeClass('collapsed');
      }
    }
  }
});
