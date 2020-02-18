; (function ($) {
  $.fn.selection = function () {
    const that = this[0];
    let selection = {};
    selection.start = that.selectionStart;
    selection.end = that.selectionEnd;
    selection.text = that.value.substring(selection.start, selection.end);
    return selection;
  };
})(jQuery);