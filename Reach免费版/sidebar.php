<!-- 侧边栏 -->
<div class="col d-none d-lg-block" id="article-sidebar">
  <!-- 网站信息 -->
  <div class="card ribbon-box">
    <div class="card-body">
      <div class="ribbon ribbon-info float-right"><i class="fonts icon-guangbo mr-1"></i> Info
      </div>
      <h5 class="text-info float-left mt-0">Site Info</h5>
      <div class="ribbon-content">
        <p class="text-info"><strong><?php $this->options->description() ?></strong></p>
        <p>创建于<span class="text-primary ml-1 mr-1">2015</span>年<span class="text-info ml-1 mr-1">6</span>月
        </p>
        <p>总共发表了<span class="text-danger ml-1 mr-1"><?php echo allpostnum($this->author->uid); ?></span>篇文章</p>
      </div>
    </div> <!-- end card-body -->
  </div> <!-- end card-->

  <!-- 最新评论 -->
  <div class="card ribbon-box" id="sidebar-comment">
    <div class="card-body">
      <div class="ribbon ribbon-primary float-right"><i class="fonts icon-sms-solid mr-1"></i> Message</div>
      <h5 class="text-primary float-left mt-0">Reply Message</h5>
      <div class="ribbon-content">
        <?php $this->widget('Widget_Comments_Recent', 'pageSize=5')->to($comments); ?>
        <?php while ($comments->next()) : ?>
          <!-- 信息 -->
          <div class="media mb-3 gravatar">
            <?php $comments->gravatar(100); ?>
            <div class="media-body text-break-all">
              <a class="text-reset" href="<?php $comments->permalink(); ?>">
                <h5 class="mt-0"><?php $comments->author(false); ?></h5>
              </a>
              <?php $comments->excerpt(120); ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div> <!-- end card-body -->
  </div> <!-- end card-->
  <!-- 文章归档 -->
  <div class="card ribbon-box article-archive">
    <div class="card-body">
      <div class="ribbon ribbon-secondary  float-right"><i class="fonts icon-file-alt mr-1"></i> Archive
      </div>
      <h5 class="text-secondary  float-left mt-0">Article Archive</h5>
      <div class="ribbon-content">
        <ul class="list-unstyled">
          <?php $this->widget('Widget_Contents_Post_Date', 'format=Y年&type=year')->parse('<li class="row p-1"><div class="col-10 text-truncate"><a href="{permalink}">{date}</a></div><div class="col-2"><span class="badge badge-primary badge-pill">{count}</span></div></li>'); ?>
        </ul>
      </div>
    </div> <!-- end card-body -->
  </div> <!-- end card-->
  <!-- 天气 -->
  <div class="card ribbon-box">
    <div class="card-body">
      <div class="ribbon ribbon-warning  float-right"><i class="fonts icon-sun-solid mr-1"></i>
        Weather
      </div>
      <h5 class="text-warning float-left mt-0">Weather</h5>
      <div class="ribbon-content">
        <!--天气插件 -->
        <iframe name="weather_inc" src="https://i.tianqi.com/index.php?c=code&id=3" width="100%" height="160" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
      </div>
    </div> <!-- end card-body -->
  </div> <!-- end card-->
</div>
</div>