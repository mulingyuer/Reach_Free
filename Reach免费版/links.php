<?php

/**
 * links
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');
?>

<body class="loading" data-layout="topnav">
  <div class="wrapper">
    <div class="content-page">
      <div class="content">
        <!-- 载入top-bar -->
        <?php $this->need('top-bar.php'); ?>
        <!-- 载入nav -->
        <?php $this->need('nav.php'); ?>
        <!-- 文章内容 -->
        <div class="container-fluid">
          <!-- 载入reach-info -->
          <?php $this->need('reach-info.php'); ?>
          <!-- content开始 -->
          <div class="row">
            <div class="col-lg-9">
              <div class="card" id="friend-link">
                <div class="card-header">
                  <h3 class="font-weight-normal"><?php $this->title() ?></h3>
                  <small>创建于 <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time> / <?php $this->commentsNum(_t('暂无评论'), _t('仅有1条评论'), _t('已有 %d 条评论')); ?><?php if ($this->user->hasLogin()) : ?><a href="<?php $this->options->adminUrl(); ?>write-<?php if ($this->is('post')) : ?>post<?php else : ?>page<?php endif; ?>.php?cid=<?php echo $this->cid; ?>" class="entry_compile" target="_blank"> / 编辑</a><?php endif; ?></small>
                </div>
                <div class="card-body">
                  <div id="cmd_md">
                    <?php $this->content(); ?>
                  </div>
                </div> <!-- end card-body-->
                <div class="card-footer">
                  <!-- 载入分享 -->
                  <?php $this->need('share.php'); ?>
                </div>
              </div>
              <!-- 载入评论 -->
              <?php $this->need('comments.php'); ?>
            </div>
            <!-- 右侧sidebar -->
            <?php $this->need('sidebar.php'); ?>


          </div><!-- end主体部分 -->
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