<div class="container-fluid">
  <!-- 载入reach-info -->
  <?php $this->need('reach-info.php'); ?>
  <!-- 载入content -->
  <div class="row">
    <!-- 左侧缩略文章 -->
    <div class="col-lg-9" id="article-content">
      <div class="row">
        <!-- 载入缩略文章 -->
        <?php $this->need('index-mini-article.php'); ?>
      </div>
    </div>
    <!-- 右侧sidebar -->
    <?php $this->need('sidebar.php'); ?>
  </div>
</div>