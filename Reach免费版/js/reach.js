$(document).ready(function () {

  //nav图标
  let $blog_nav = $('#blog-nav');
  const blog_nav_icon = {
    links: 'icon-link-solid',
    about: 'icon-user-alt-solid',
    faq: 'icon-question-circle'
  }
  $blog_nav.find('.self-page').each(function () {
    const href = this.href.toLowerCase();
    for (let i in blog_nav_icon) {
      if (href.match(i)) {
        $(this).children('i').addClass(blog_nav_icon[i]);
      }
    };
  });

  //返回顶部
  let $go_top = $('#go-top');
  let $window = $(window);
  go_toTop();
  $go_top.click(function () {
    $('body').scrollTo(500);
    return false;
  });
  $window.scroll(go_toTop);
  function go_toTop() {
    const scrollTop = $window.scrollTop();
    if (scrollTop > 0) {
      $go_top.removeClass('d-none');
    } else {
      $go_top.addClass('d-none');
    }
  };



  //首页登录控制台
  let $user_console = $('#user-console');
  let $user_img = $user_console.find('.account-user-avatar > img');

  if (!$user_img.attr('class')) {
    $user_img.addClass('rounded-circle');
  };

  //首页日历
  let $dash_daterange = $("#dash-daterange");
  let $reset_daterange = $('#reset-daterange');

  // 日历初始化
  $dash_daterange.daterangepicker({ singleDatePicker: !0 });
  //日历重置
  $reset_daterange.click(function () {
    $dash_daterange.val('').daterangepicker({ singleDatePicker: !0 });
  });

  //首页文章分类样式
  let $article_tags = $('#article-content .article-tags');
  $article_tags.find('a').addClass('badge badge-info mr-1 shadow-sm');

  //首页分页样式
  let $index_page = $('#index-page');
  let $index_page_li = $index_page.find('li');

  //初始化首页page样式
  $index_page_li.addClass('page-item')
    .find('a').addClass('page-link');
  //上一页
  $index_page_li.filter('.prev')
    .find('a').attr('aria-label', 'Previous').append('<span class="sr-only">Previous</span>');
  //下一页
  $index_page_li.filter('.next')
    .find('a').attr('aria-label', 'Next').append('<span class="sr-only">Next</span>');


  // 文本溢出
  //3行
  let $banner_introduction = $('#banner-box .card-text,#article-content .card-text');
  $banner_introduction.each(function () {
    $clamp(this, { clamp: 3 });
  });

  //sidebar评论
  let $sidebar_commentImg = $('#sidebar-comment').find('.gravatar > img');
  $sidebar_commentImg.addClass('d-flex mr-3 rounded-circle')
    .attr({ 'height': 30, 'width': 30 });


  //代码序号
  $("pre > code").each(function () {
    $(this).html("<ol><li>" + $(this).html().replace(/\n/g, "\n</li><li>") + "\n</li></ol>");
  });
  //代码高亮
  hljs.configure({ tabReplace: '    ' });
  hljs.initHighlighting();

  //cmd_md样式
  let $cmd_md = $('#cmd_md');
  //todo列表样式
  if ($cmd_md.length) {
    let todo_html = $cmd_md.html()
      .replace(/\[x\]/g, '<i class="fonts icon-duoxuankuang-copy mr-1"></i>')
      .replace(/\[\s\]/g, '<i class="fonts icon-duoxuankuang mr-1"></i>');
    $cmd_md.html(todo_html);
  }

  //自定义链接图标
  $cmd_md.find('a[href^="http"]').prepend('<i class="fonts mx-1 icon-lianjie"></i>')
    .end().find('a[href$="pdf"]').prepend('<i class="fonts mx-1 icon-pdf"></i>')
    .end().find('a[href$="zip"]').prepend('<i class="fonts mx-1 icon-zip"></i>')
    .end().find('a[href$="7z"]').prepend('<i class="fonts mx-1 icon-z"></i>')
    .end().find('a[href$="rar"]').prepend('<i class="fonts mx-1 icon-rar"></i>')
    .end().find('a[href$="txt"]').prepend('<i class="fonts mx-1 icon-txt"></i>')
    .end().find('a[href$="doc"]').prepend('<i class="fonts mx-1 icon-DOC"></i>')
    .end().find('a[href$="ppt"]').prepend('<i class="fonts mx-1 icon-ppt"></i>')
    .end().find('a[href$="xlsx"]').prepend('<i class="fonts mx-1 icon-xlsx"></i>');


  //图箱
  let $cmd_md_Img = $cmd_md.find('img');
  $cmd_md_Img.each(function () {
    const imgSrc = this.src;
    const fancybox_a = '<a data-fancybox="gallery" href="' + imgSrc + '"></a>';
    $(this).wrap(fancybox_a);
  });
  //表格
  let $cmd_md_table = $cmd_md.find('table');
  $cmd_md_table.addClass('table table-striped table-centered')
    .find('thead').addClass('table-dark text-white')
    .end()
    .wrap('<div class="table-responsive"></div>');

  //微信分享二维码
  let $share_weixin_qrcode = $('#share-weixin-qrcode');
  $share_weixin_qrcode.qrcode({
    width: 200,
    height: 200,
    text: $share_weixin_qrcode.data('href')
  });

  //文章标签样式
  let $post_tags = $('#post-tags > a');
  $post_tags.addClass('badge badge-secondary-lighten badge-pill mr-1');

  //评论样式
  let $comments = $('#comments');
  $comments.find('.media > img').addClass('mr-2 rounded').attr({ width: '30', height: '32' });
  $comments.find('.comments-text > p').addClass('d-inline-block');
  $comments.find('.comments-reply a').addClass('text-reset');

  //限制评论字数
  let $textarea = $('#textarea');
  if ($textarea.length) {
    let $limittext_info = $('#limittext-info');
    $textarea.limiter(500, $limittext_info);
  }

  //评论page样式
  let $comments_page_li = $('#comments-page li');
  $comments_page_li.addClass('page-item')
    .find('a').addClass('page-link');

  $comments_page_li.filter('prev')
    .find('a').attr('aria-label', 'Previous').append('<span class="sr-only">Previous</span>');

  $comments_page_li.filter('next')
    .find('a').attr('aria-label', 'Next').append('<span class="sr-only">Next</span>');


  //博主登录回复表单样式
  let $comments_amdin = $('#comments-admin');
  $comments_amdin.find('img').addClass('avatar mr-2 rounded').attr({ width: '30', height: '32' });
  //取消回复样式
  let $cancel_reply = $('#cancel-reply');
  $cancel_reply.find('a').addClass('close')

  //友链
  let $friend_link = $('#friend-link').find('table');
  let $friend_link_tbody = $friend_link.find('tbody');

  //友链表格样式
  $friend_link.addClass('table table-striped table-centered mb-0');
  $friend_link.find('thead').addClass('');
  $friend_link_tbody.find('tr').find('td:first').addClass('table-user')
    .find('img').addClass('mr-2 rounded-circle');
  //友链响应式
  $friend_link.find('thead tr').find('th:last').addClass('d-none d-sm-table-cell');
  $friend_link_tbody.find('tr').find('td:last').addClass('d-none d-sm-table-cell');

});
