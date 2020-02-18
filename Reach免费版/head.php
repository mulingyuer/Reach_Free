<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">

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
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/fonts.css'); ?>" />
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/app.min.css'); ?>" id="light-style" />
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/app-dark.min.css'); ?>" id="dark-style" />
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/cmd_md.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/monokai.css'); ?>"> <!-- 代码高亮 -->
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/jquery.fancybox.min.css'); ?>"> <!-- 图箱 -->
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
  <script type="text/javascript" src="<?php $this->options->themeUrl('js/js_plugin/highlight.pack.js'); ?>"></script><!-- 代码高亮 -->
  <!-- 解决低版本ie不支持html5元素和css3 -->
  <!--[if lt IE 9]>
        <script src="js/compatibility/html5shiv.js"</script> 
        <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>