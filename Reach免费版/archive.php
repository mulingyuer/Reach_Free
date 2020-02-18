  <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
  <!-- 载入head -->
  <?php $this->need('head.php'); ?>

  <body class="loading" data-layout="topnav">
    <!-- 载入loading -->
    <?php $this->need('loading.php'); ?>
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
                    <?php $this->need('index-mini-article.php'); ?>
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
                  <!-- 载入翻页 -->
                  <?php $this->need('acticle-page.php'); ?>
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