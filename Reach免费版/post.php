<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!--载入头部-->
<?php $this->need('head.php'); ?>

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
              <div class="card">
                <div class="card-header">
                  <h3 class="font-weight-normal"><?php $this->title() ?></h3>
                  <small>发布于 <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time> / 分类: <?php $this->category(','); ?> / <?php $this->commentsNum(_t('暂无评论'), _t('仅有1条评论'), _t('已有 %d 条评论')); ?> / 阅读量: <?php echo get_post_view($this) ?><?php if ($this->user->hasLogin()) : ?><a href="<?php $this->options->adminUrl(); ?>write-<?php if ($this->is('post')) : ?>post<?php else : ?>page<?php endif; ?>.php?cid=<?php echo $this->cid; ?>" class="entry_compile" target="_blank"> / 编辑</a><?php endif; ?></small>
                </div>
                <div class="card-body">
                  <div id="cmd_md">
                    <?php
                    $db = Typecho_Db::get();
                    $sql = $db->select()->from('table.comments')
                      ->where('cid = ?', $this->cid)
                      ->where('mail = ?', $this->remember('mail', true))
                      ->where('status = ?', 'approved')
                      //只有通过审核的评论才能看回复可见内容
                      ->limit(1);
                    $result = $db->fetchAll($sql);
                    if ($this->user->hasLogin() || $result) {
                      $content = preg_replace("/\[hide\](.*?)\[\/hide\]/sm", '<div class="reply2view p-2 bg-light">$1</div>', $this->content);
                    } else {
                      $content = preg_replace("/\[hide\](.*?)\[\/hide\]/sm", '<div class="reply2view p-2 bg-light">此处内容已隐藏<a class="text-danger ml-1 mr-1" href="#comments">回复</a>后方可阅读。</div>', $this->content);
                    }
                    echo $content
                    ?>
                  </div>
                </div> <!-- end card-body-->
                <div class="card-footer">
                  <div class="tags" id="post-tags">
                    <i class="fonts icon-tags-solid mr-2"></i>
                    <?php $this->tags('', true, 'none'); ?>
                  </div>
                  <blockquote class="blockquote article-copy-info">
                    <p class="mt-2 mb-2">
                      本文来源 <a href="<?php $this->options->siteUrl(); ?>" alt=""><?php $this->options->title() ?></a>
                      的博客，由<?php $this->author(); ?>整理编辑，其版权均为<?php $this->options->title() ?>博客所有，文章内容系作者个人观点，不代表<?php $this->author(); ?>对观点赞同或支持。如需转载，请注明文章来源。
                    </p>
                  </blockquote>
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