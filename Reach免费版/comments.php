<?php function threadedComments($comments, $options)
{
  $commentClass = '';
  if ($comments->authorId) {
    if ($comments->authorId == $comments->ownerId) {
      $commentClass .= ' comment-by-author';
    } else {
      $commentClass .= ' comment-by-user';
    }
  }

  $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
  <div class="mt-3" id="li-<?php $comments->theId(); ?>" class="<?php if ($comments->levels > 0) {
                                                                  echo ' comment-child';
                                                                  $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
                                                                } else {
                                                                  echo 'comment-parent';
                                                                }
                                                                $comments->alt(' comment-odd', ' comment-even');
                                                                echo $commentClass;
                                                                ?>">
    <div class="media">
      <?php $comments->gravatar('100', ''); ?>
      <div class="media-body" id="<?php $comments->theId(); ?>">
        <div class="dropdown float-right text-muted">
          <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
            <i class="fonts icon-CombinedShape"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="javascript:void(0);" class="dropdown-item">编辑</a>
            <a href="javascript:void(0);" class="dropdown-item">删除</a>
          </div>
        </div>
        <h5 class="m-0"><?php $comments->author(); ?></h5>
        <a href="<?php $comments->permalink(); ?>"></a>
        <p class="text-muted mb-0"><small>发表于：<?php $comments->date('Y年m月d日 H小时i分s秒'); ?></small></p>
        <div class="my-1 comments-text text-break-all">
          <?php if (!$comments->levels > 0) { ?>
            <i class="fonts icon-quote font-20"></i>
          <?php } ?>
          <?php get_comment_at($comments->coid); ?>
          <?php $comments->content(); ?>
        </div>
        <div class="comments-reply">
          <div href="javascript: void(0);" class="btn btn-sm btn-link text-muted p-0 pl-2">
            <i class='fonts icon-comments mr-1'></i><?php $comments->reply('Reply'); ?>
          </div>
        </div>
      </div> <!-- end media-body -->
    </div> <!-- end media-->
    <!-- 子评论 -->
    <?php if ($comments->children) { ?>
      <?php $comments->threadedComments($options); ?>
    <?php } ?>
    <!-- 分割线 -->
    <?php if (!$comments->levels > 0) { ?>
      <hr />
    <?php } ?>
  </div>
<?php } ?>


<div id="comments">
  <?php $this->comments()->to($comments); ?>
  <!-- 评论框 -->
  <?php if ($this->allow('comment')) : ?>
    <div class="comment bg-light p-2 mb-4 shadow-sm border rounded comments-form" id="<?php $this->respondId(); ?>">
      <!-- 取消回复按钮 -->
      <div id="cancel-reply">
        <?php $comments->cancelReply('&times;'); ?>
      </div>
      <form class="comment-area-box" method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
        <div class="row">
          <!-- 博主登录 -->
          <?php if ($this->user->hasLogin()) : ?>
            <div class="col-12" id="comments-admin">
              <div class="row">
                <div class="col-6 d-flex">
                  <?php $this->author->gravatar('100'); ?>
                  <h5 class="m-0">
                    <a href="<?php $this->options->profileUrl(); ?>">
                      <?php $this->user->screenName(); ?>
                    </a>
                    <br />
                    <small>Administrator</small>
                  </h5>
                </div>
                <div class="col-6 text-right">
                  <a class="btn btn-sm btn-danger mr-2" href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('Logout'); ?></a>
                </div>
              </div>
            </div>
          <?php else : ?>
            <!-- user -->
            <div class="col-12 col-md-4 input-group mb-2 mb-md-0">
              <div class="input-group-prepend">
                <span class="input-group-text fonts icon-user-1"></span>
              </div>
              <input type="text" class="form-control" placeholder="Username*" name="author" id="author" value="<?php $this->remember('author'); ?>" required>
            </div>
            <!-- email -->
            <div class="col-12 col-md-4 input-group mb-2 mb-md-0">
              <div class="input-group-prepend">
                <span class="input-group-text fonts icon-email"></span>
              </div>
              <input type="email" name="mail" id="mail" class="form-control" placeholder="Your Email*" value="<?php $this->remember('mail'); ?>" required />
            </div>
            <!-- url -->
            <div class="col-12 col-md-4 input-group">
              <div class="input-group-prepend">
                <span class="input-group-text fonts icon-lianjie"></span>
              </div>
              <input type="url" name="url" id="url" class="form-control" placeholder="<?php _e('http(s)://'); ?>" value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL) : ?> required<?php endif; ?>>
            </div>
          <?php endif; ?>
          <!-- textarea -->
          <div class="col-12 mt-3">
            <textarea id="textarea" name="text" rows="4" class="form-control border-0 resize-none" placeholder="说说你的想法...." required><?php $this->remember('text'); ?></textarea>
            <div class="p-2 mt-1 bg-light d-flex justify-content-between align-items-center">
              <div>
                <span class="btn btn-sm px-2 btn-light small" id="limittext-info">还能输入500个字符</span>
                <!-- <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="fonts icon-tupian"></i></a> -->
                <!-- <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="fonts icon-map-marker-alt-solid"></i></a> -->
                <!-- <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="fonts icon-paperclip-solid"></i></a> -->
              </div>
              <button type="submit" class="btn btn-sm btn-success"><i class='fonts icon-paper-plane-solid mr-1'></i>提交</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- 禁止评论 -->
  <?php else : ?>
    <h3><?php _e('评论已关闭'); ?></h3>
  <?php endif; ?>
  <!-- 评论框结束-->
  <!-- 回复列表 -->
  <?php if ($comments->have()) : ?>
    <div class="card mb-4">
      <div class="card-body pb-1">
        <!-- 评论头部提示信息 -->
        <h4 class="card-title"><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h4>
        <!-- 评论的内容 -->
        <?php $comments->listComments(); ?>
        <!-- 评论page -->
        <nav id="comments-page">
          <?php $comments->pageNav('&laquo;', '&raquo;', 2, '', array('wrapTag' => 'ul', 'wrapClass' => 'pagination justify-content-center', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
        </nav>
      </div>
    </div>
  <?php endif; ?>


</div>