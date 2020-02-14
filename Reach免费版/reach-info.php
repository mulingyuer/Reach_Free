<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <div class="page-title-right">
        <form class="form-inline">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control form-control-light" id="dash-daterange">
              <div class="input-group-append">
                <span class="input-group-text bg-primary border-primary text-white">
                  <i class="fonts icon-calendar-alt-solid font-15"></i>
                </span>
              </div>
            </div>
          </div>
          <a href="javascript: void(0);" class="btn btn-primary ml-2" id="reset-daterange">
            <i class="fonts icon-sync-solid font-15"></i>
          </a>
          <a href="javascript: void(0);" class="btn btn-primary ml-1">
            <i class="fonts icon-stream-solid font-15"></i>
          </a>
        </form>
      </div>
      <h4 class="page-title">
        <?php if ($this->is('index')) : ?>
          主页
        <?php elseif ($this->is('archive')) : ?>
          <?php $this->archiveTitle(array(
            'category'  =>  _t('分类<strong class="text-danger"> %s </strong>下的文章'),
            'search'    =>  _t('包含关键字<strong class="text-danger"> %s </strong>的文章'),
            'tag'       =>  _t('标签<strong class="text-danger"> %s </strong>下的文章'),
            'author'    =>  _t('<strong class="text-danger">%s </strong>发布的文章')
          ), '', ''); ?>
        <?php elseif ($this->is('post') || $this->is('page')) : ?>
          <i class="fonts icon-shizhong mr-1"></i>更新于 <time><?php echo date('Y-m-d H:i:s', $this->modified); ?></time>
        <?php endif; ?>
      </h4>
    </div>
  </div>
</div>