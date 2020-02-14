<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php $this->options->charset(); ?>">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no,shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Window-target" content="_top">
  <meta http-equiv="Cache-Control" content="no-transform">
  <meta http-equiv="Cache-Control" content="no-siteapp">
  <meta name="author" content="木灵鱼儿,mulingyuer">
  <meta data-n-head="true" name="description" content="<?php $this->options->description() ?>">
  <meta data-n-head="true" name="keywords" content="<?php $this->options->keywords() ?>">
  <!-- 通过自有函数输出HTML头部信息 -->
  <?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw='); ?>
  <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
          ), '', ' - '); ?><?php $this->options->title(); ?></title>
  <!-- 加载favicon -->
  <link rel="icon" sizes="16x16 32x32 64x64 128x128" href="<?php $this->options->themeUrl('images/favicon/favicon.ico'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php $this->options->themeUrl('images/favicon/apple-touch-icon.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php $this->options->themeUrl('images/favicon/favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php $this->options->themeUrl('images/favicon/favicon-16x16.png'); ?>">
  <link rel="manifest" href="<?php $this->options->themeUrl('images/favicon/site.webmanifest'); ?>">
  <link rel="mask-icon" href="<?php $this->options->themeUrl('images/favicon/safari-pinned-tab.svg'); ?>" color="#ffffff">
  <!-- 加载css -->
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/icons.min.css'); ?>" />
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/app.min.css'); ?>" />
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
  <!-- 解决低版本ie不支持html5元素和css3 -->
  <!--[if lt IE 9]>
        <script src="js/compatibility/html5shiv.js"</script> 
        <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body class="authentication-bg">

  <div class="account-pages mt-5 mb-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card">
            <!-- Logo -->
            <div class="card-header pt-1 pb-1 text-center bg-primary">
              <a href="index.html">
                <span><img src="<?php $this->options->themeUrl('images/favicon/mstile-70x70.png'); ?>" alt="" height="60"></span>
              </a>
            </div>

            <div class="card-body p-4">
              <div class="text-center">
                <h1 class="text-error">4<i class="mdi mdi-emoticon-sad"></i>4</h1>
                <h4 class="text-uppercase text-danger mt-3">页面找不到</h4>
                <p class="text-muted mt-3">您好像走错了路，点击下面回到主页。</p>

                <a class="btn btn-info mt-3" href="<?php $this->options->siteUrl(); ?>"><i class="mdi mdi-reply"></i> 返回</a>
              </div>
            </div> <!-- end card-body-->
          </div>
          <!-- end card -->
        </div> <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>
  <!-- end page -->
  <!-- 载入footer -->
  <?php $this->need('footer.php'); ?>
</body>

</html>