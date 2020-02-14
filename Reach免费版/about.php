<?php

/**
 * about
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
              <div class="card">
                <div class="card-body">
                  <h3 class="font-weight-normal"><?php $this->title() ?></h3>
                  <small>创建于 <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time> / <?php $this->commentsNum(_t('暂无评论'), _t('仅有1条评论'), _t('已有 %d 条评论')); ?><?php if ($this->user->hasLogin()) : ?><a href="<?php $this->options->adminUrl(); ?>write-<?php if ($this->is('post')) : ?>post<?php else : ?>page<?php endif; ?>.php?cid=<?php echo $this->cid; ?>" class="entry_compile" target="_blank"> / 编辑</a><?php endif; ?></small>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-lg-6">
                  <div class="card text-center">
                    <div class="card-body">
                      <img src="<?php $this->options->themeUrl('images/about.jpg'); ?>" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                      <h4 class="mb-0 mt-2">木灵鱼儿</h4>
                      <p class="text-muted font-14">Founder</p>

                      <button type="button" class="btn btn-success btn-sm mb-2">Follow</button>
                      <button type="button" class="btn btn-danger btn-sm mb-2">Message</button>

                      <div class="text-left mt-3">
                        <h4 class="font-13 text-uppercase">关于我 :</h4>
                        <p class="text-muted font-13 mb-3">
                          Hi 我是一个喜欢折腾的前端小白，我是一个喜欢折腾的前端小白，我是一个喜欢折腾的前端小白，我是一个喜欢折腾的前端小白
                        </p>
                        <p class="text-muted mb-2 font-13"><strong>姓 名 :</strong> <span class="ml-2">伟大的木灵鱼儿</span>
                        </p>

                        <p class="text-muted mb-2 font-13"><strong>电话 :</strong><span class="ml-2">(123)
                            123 1234</span></p>

                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">1321968423@qq.com</span></p>

                        <p class="text-muted mb-1 font-13"><strong>位置 :</strong> <span class="ml-2">China（中国）</span>
                        </p>
                      </div>
                      <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                          <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="fonts icon-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="fonts icon-google"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="fonts icon-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                          <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="fonts icon-github"></i></a>
                        </li>
                      </ul>
                    </div> <!-- end card-body -->
                  </div>
                  <div class="card text-white bg-info overflow-hidden">
                    <div class="card-body">
                      <div class="toll-free-box text-center">
                        <h4> <i class="mdi mdi-deskphone"></i> Toll Free : 1-234-567-8901</h4>
                      </div>
                    </div> <!-- end card-body-->
                  </div>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title mb-0">Theme Development</h4>
                        </div>
                      </div>
                    </div>
                    <!-- item -->
                    <div class="col-12 col-sm-6">
                      <div class="card">
                        <img class="card-img-top" src="<?php $this->options->themeUrl('images/development/jqueryapi.png'); ?>" alt="">
                        <div class="card-body text-center">
                          <a href="https://www.jquery123.com/">
                            <h5 class="card-title">jQuery API <br /><small class="text-muted">中文手册</small></h5>
                          </a>
                          <p class="card-text">根据最新的 jQuery 1.11.x 和 2.1.x 版本翻译的 jQuery API 中文文档/手册。
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- item -->
                    <div class="col-12 col-sm-6">
                      <div class="card">
                        <img class="card-img-top" src="<?php $this->options->themeUrl('images/development/codeguide.png'); ?>" alt="">
                        <div class="card-body text-center">
                          <a href="https://codeguide.bootcss.com">
                            <h5 class="card-title">Bootstrap 编码规范<br /><small class="text-muted">by @mdo</small></h5>
                          </a>
                          <p class="card-text">Bootstrap 编码规范：编写灵活、稳定、高质量的 HTML 和 CSS 代码的规范。
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- item -->
                    <div class="col-12 col-sm-6">
                      <div class="card">
                        <img class="card-img-top" src="<?php $this->options->themeUrl('images/development/typecho.jpg'); ?>" alt="">
                        <div class="card-body text-center">
                          <a href="https://typecho.org/">
                            <h5 class="card-title">Typecho <br /><small class="text-muted">官网</small></h5>
                          </a>
                          <p class="card-text">typecho 开源博客，念念不忘，必有回响,三年 Typecho 沉淀，现在，回应您的等待
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- item -->
                    <div class="col-12 col-sm-6">
                      <div class="card">
                        <img class="card-img-top" src="<?php $this->options->themeUrl('images/development/nginx.jpg'); ?>" alt="">
                        <div class="card-body text-center">
                          <a href="https://nginx.bootcss.com">
                            <h5 class="card-title">Nginx <br /><small class="text-muted">中文手册</small></h5>
                          </a>
                          <p class="card-text">Nginx (engine x) 是一个高性能的HTTP和反向代理服务，也是一个IMAP/POP3/SMTP服务。
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--row end-->
                </div>
                <!--右侧 end-->
                <div class="col-12">
                  <div class="card bg-primary">
                    <div class="card-body">
                      <h4 class="card-title text-white text-right mb-0">梦想总是源于兴趣！</h4>
                    </div>
                  </div>
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