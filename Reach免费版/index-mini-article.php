<!-- item -->
<?php while ($this->next()) : ?>
  <div class="col-12">
    <div class="card">
      <div class="row no-gutters align-items-center">
        <div class="col-md-4 article-thum">
          <div class="article-tags">
            <?php $this->category(''); ?>
          </div>
          <img src="<?php get_ArticleThumbnail($this); ?>" class="card-img" alt="<?php $this->sticky() ?><?php $this->title() ?>">
        </div>
        <div class="col-md-8">
          <div class="card-body pb-0">
            <h5 class="card-title"><?php $this->sticky() ?><?php $this->title() ?></h5>
            <p class="card-text"><?php $this->excerpt(140, '...'); ?></p>
            <p class="card-text">
              <small class="text-muted">
                <i class="fonts icon-rili1 mr-1"></i><time class="mr-2"><?php $this->date('Y-m-d'); ?></time>
                <span><?php $this->author(); ?></span>
              </small>
            </p>
          </div> <!-- end card-body-->
          <div class="card-footer border-0 text-right pt-1">
            <a href="<?php $this->permalink() ?>" class="btn btn-sm btn-info btn-rounded">Read</a>
          </div>
        </div> <!-- end col -->
      </div> <!-- end row-->
    </div> <!-- end card-->
  </div>
<?php endwhile; ?>
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