; (function ($) {
  //返回元素顶部动画
  jQuery.fn.scrollTo = function (speed) {
    var targetOffset = $(this).offset().top;
    $('html,body').stop().animate({
      scrollTop: targetOffset
    }, speed);
    return this;
  };
})(jQuery);