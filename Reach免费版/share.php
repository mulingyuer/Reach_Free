<div id="share">
  <ul class="social-list list-inline mt-3 mb-0 text-sm-right">
    <!-- facebook -->
    <li class="list-inline-item text-center mb-1 mb-sm-0">
      <a title="facebook分享" href="javascript: void(0);" class="social-list-item border-primary text-primary" onclick='window.open("https://www.facebook.com/share.php?u=<?php $this->permalink() ?>&t=<?php $this->title() ?>&pic=<?php get_ArticleThumbnail($this); ?>")'><i class="fonts icon-facebook-f"></i></a>
    </li>
    <!-- twitter -->
    <li class="list-inline-item text-center mb-1 mb-sm-0">
      <a title="twitter分享" href="javascript: void(0);" class="social-list-item border-info text-info" onclick='window.open("https://twitter.com/intent/tweet?text=<?php $this->permalink() ?><?php $this->permalink() ?>&pic=<?php get_ArticleThumbnail($this); ?>")'><i class="fonts icon-twitter"></i></a>
    </li>
    <!-- qq -->
    <li class="list-inline-item text-center mb-1 mb-sm-0">
      <a title="QQ分享" href="javascript: void(0);" class="social-list-item border-danger text-danger" target="_blank" onclick='window.open("http://connect.qq.com/widget/shareqq/index.html?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>&pics=<?php get_ArticleThumbnail($this); ?>&site=<?php $this->options->title(); ?>")'><i class="fonts icon-qq"></i></a>
    </li>
    <!-- qq空间 -->
    <li class="list-inline-item text-center mb-1 mb-sm-0">
      <a title="QQ空间分享" href="javascript: void(0);" class="social-list-item border-warning text-warning" target="_blank" onclick='window.open("https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>&site=<?php $this->options->title(); ?>")'><i class="fonts icon-062qqkongjian"></i></a>
    </li>
    <!-- 微博分享 -->
    <li class="list-inline-item text-center mb-1 mb-sm-0">
      <a title="微博分享" href="javascript: void(0);" class="social-list-item border-dark text-dark" target="_blank" onclick='window.open("http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>@<?php $this->options->title(); ?>&appkey=1006020243&pic=<?php get_ArticleThumbnail($this); ?>&searchPic=true")'><i class="fonts icon-weibo"></i></a>
    </li>
    <!-- 微信分享 -->
    <li class="list-inline-item text-center mb-1 mb-sm-0">
      <a title="微信分享" href="javascript: void(0);" class="social-list-item border-success text-success" data-toggle="modal" data-target="#share-weixin-modal">
        <i class="fonts icon-weixin"></i>
      </a>
    </li>
    <div id="share-weixin-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="success-header-modalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header modal-colored-header bg-success">
            <h4 class="modal-title" id="success-header-modalLabel">微信分享</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body text-center">
            <div id="share-weixin-qrcode" data-href="<?php $this->permalink() ?>"></div>
            <p class="mb-0 mt-1">微信扫描二维码点右上角分享</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-success">完成</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </ul>
</div>