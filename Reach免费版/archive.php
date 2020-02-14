  <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
  <!-- 载入head -->
  <?php $this->need('head.php'); ?>

  <body class="loading" data-layout="topnav">
    <div class="wrapper">
      <div class="content-page">
        <div class="content">
          <!-- 载入top-bar -->
          <?php $this->need('top-bar.php'); ?>
          <!-- 载入nav -->
          <?php $this->need('nav.php'); ?>
          <!-- 主体内容 -->
          <div class="container-fluid">
            <!-- 载入reach-info -->
            <?php $this->need('reach-info.php'); ?>
            <!-- 载入content -->
            <div class="row">
              <!-- 左侧缩略文章 -->
              <div class="col-lg-9" id="article-content">
                <div class="row">
                  <!-- 载入缩略文章 -->
                  <!-- item -->
                  <?php if ($this->have()) : ?>
                    <?php while ($this->next()) : ?>
                      <div class="col-12">
                        <div class="card">
                          <div class="row no-gutters align-items-center">
                            <div class="col-md-4 article-thum">
                              <div class="article-tags">
                                <?php $categories = $this->categories;
                                foreach ($categories as $cate) {
                                  echo '<span class="badge badge-info mr-1 shadow-sm">' . $cate['slug'] . '</span>';
                                } ?>
                              </div>
                              <img src="<?php get_ArticleThumbnail($this); ?>" class="card-img" alt="<?php $this->sticky() ?><?php $this->title() ?>">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body pb-0">
                                <h5 class="card-title"><?php $this->sticky() ?><?php $this->title() ?></h5>
                                <p class="card-text"><?php $this->excerpt(140, '...'); ?></p>
                                <p class="card-text">
                                  <small class="text-muted">
                                    <i class="dripicons-calendar mr-1"></i><time class="mr-2"><?php $this->date('Y-m-d'); ?></time>
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
                  <?php else : ?>
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body text-center">
                          <h4 class="card-title"><?php _e('没有找到内容'); ?></h4>
                          <img src="<?php $this->options->themeUrl('images/file-searching.svg'); ?>" alt="File not found Image" height="90">
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                  <!-- page翻页-->
                  <nav class="col-12 pt-3 mb-4" id="index-page">
                    <?php $this->pageNav('&laquo;', '&raquo;', 2, '', array('wrapTag' => 'ul', 'wrapClass' => 'pagination pagination-rounded mb-0 justify-content-center', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
                  </nav>
                  <!-- page翻页结束 -->
                </div>
              </div>
              <!-- 右侧sidebar -->
              <?php $this->need('sidebar.php'); ?>
            </div>
          </div>
        </div>
        <!-- 载入footer -->
        <?php $this->need('footer.php'); ?>
      </div>
    </div>
    <!-- 载入right-bar -->
    <?php $this->need('right-bar.php'); ?>
    <!-- 载入js -->
    <?php $this->need('script.php'); ?>
  </body>