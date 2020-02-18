<?php

/**
 * Reach 基于Bootsarp4的响应式博客主题，目的是为了更好的阅读体验，更快捷的使用方式，更优质的UI而存在。
 * 
 * @package Reach Free
 * @author 木灵鱼儿
 * @version 1.1
 * @link http://www.mulingyuer.com/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');
?>

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
        <!-- 载入首页主体内容 -->
        <?php $this->need('index-content.php'); ?>
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