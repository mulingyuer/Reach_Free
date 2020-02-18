<!-- page翻页
wrapTag 外层包裹标签名，默认ol
wrapClass 外层包裹类名
itemTag 内层标签名， 默认li
textTag 直接输出文字的标签名
currentClass 当前聚焦类名
prevClass 上一页类名
nextClass 下一页类名 -->
<nav class="col-12 pt-3 mb-4" id="index-page">
  <?php $this->pageNav('&laquo;', '&raquo;', 2, '', array('wrapTag' => 'ul', 'wrapClass' => 'pagination pagination-rounded mb-0 justify-content-center', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
</nav>
<!-- page翻页结束 -->