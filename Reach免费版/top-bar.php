<div class="navbar-custom topnav-navbar">
  <div class="container-fluid">
    <!-- LOGO -->
    <a href="<?php $this->options->siteUrl(); ?>" class="topnav-logo d-none d-sm-block">
      <span class="topnav-logo-lg"><img src="<?php $this->options->themeUrl('images/favicon/mstile-70x70.png'); ?>" alt="" height="60"></span>
      <span class="topnav-logo-sm"><img src="<?php $this->options->themeUrl('images/favicon/mstile-70x70.png'); ?>" alt="" height="60"> </span>
    </a>
    <!-- 右侧工具栏 -->
    <ul class="list-unstyled topbar-right-menu float-right mb-0">
      <!-- 主题设置按钮 -->
      <li class="notification-list">
        <a class="nav-link right-bar-toggle" href="javascript: void(0);">
          <i class="fonts icon-shezhi noti-icon"></i>
        </a>
      </li>
      <!-- 多国语言设置 -->
      <li class="dropdown notification-list topbar-dropdown d-none d-lg-block">
        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" id="topbar-languagedrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="<?php $this->options->themeUrl('images/flags/china.jpg'); ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">中文简体</span> <i class="fonts icon-xiala-"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu" aria-labelledby="topbar-languagedrop">
          <!--中文简体-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="<?php $this->options->themeUrl('images/flags/china.jpg'); ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">中文简体</span>
          </a>
          <!--英语-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="<?php $this->options->themeUrl('images/flags/us.jpg'); ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English</span>
          </a>
          <!--德语-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="<?php $this->options->themeUrl('images/flags/germany.jpg'); ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
          </a>
          <!--意大利-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="<?php $this->options->themeUrl('images/flags/italy.jpg'); ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
          </a>
          <!--西班牙文-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="<?php $this->options->themeUrl('images/flags/spain.jpg'); ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
          </a>
          <!--俄语-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <img src="<?php $this->options->themeUrl('images/flags/russia.jpg'); ?>" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
          </a>
        </div>
      </li>
      <!-- 消息通知 -->
      <li class="dropdown notification-list">
        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" id="topbar-notifydrop" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="fonts icon-tongzhi noti-icon"></i>
          <span class="noti-icon-badge"></span>
        </a>
        <!-- 弹出的通知窗口 -->
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg" aria-labelledby="topbar-notifydrop">
          <!-- item-->
          <div class="dropdown-item noti-title">
            <h5 class="m-0">
              <span class="float-right">
                <a href="javascript: void(0);" class="text-dark">
                  <small>清理所有</small>
                </a>
              </span>消息通知
            </h5>
          </div>
          <!-- 消息通知窗口 -->
          <div class="slimscroll" style="max-height: 230px;">
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-primary">
                <i class="mdi mdi-comment-account-outline"></i>
              </div>
              <p class="notify-details">第一条消息
                <small class="text-muted">1分钟前</small>
              </p>
            </a>
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-info">
                <i class="mdi mdi-account-plus"></i>
              </div>
              <p class="notify-details">第二条消息
                <small class="text-muted">5分钟前</small>
              </p>
            </a>
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon">
                <img src="<?php $this->options->themeUrl('images/default.png'); ?>" class="img-fluid rounded-circle" alt="" />
              </div>
              <p class="notify-details">用户1</p>
              <p class="text-muted mb-0 user-msg">
                <small>你好</small>
              </p>
            </a>
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <div class="notify-icon bg-info">
                <i class="mdi mdi-heart"></i>
              </div>
              <p class="notify-details">Carlos Crouch liked
                <b>Admin</b>
                <small class="text-muted">13 days ago</small>
              </p>
            </a>
          </div>
          <!-- All-->
          <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
            全部已读
          </a>
        </div>
      </li>
      <!-- 用户信息和设置 -->
      <li class="dropdown notification-list" id="user-console">
        <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <?php if ($this->user->hasLogin()) : ?>
            <span class="account-user-avatar">
              <?php echo $this->author->gravatar(32); ?>
            </span>
            <span>
              <span class="account-user-name"><?php $this->user->screenName(); ?></span>
              <span class="account-position">博主</span>
            </span>
          <?php else : ?>

            <span class="account-user-avatar">
              <img src="<?php $this->options->themeUrl('images/default.png'); ?>" alt="user-image" class="rounded-circle">
            </span>
            <span>
              <span class="account-user-name">点击登录</span>
              <span class="account-position">游客</span>
            </span>
          <?php endif; ?>
        </a>
        <!-- 用户设置弹窗 -->
        <?php if ($this->user->hasLogin()) : ?>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
            <!-- item-->
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">欢迎登陆！</h6>
            </div>
            <!-- item-->
            <a href="<?php $this->options->siteUrl(); ?>admin/write-post.php" class="dropdown-item notify-item">
              <i class="fonts icon-icon-text-newlybuild mr-1"></i>
              <span>新建文章</span>
            </a>
            <!-- item-->
            <a href="<?php $this->options->profileUrl(); ?>" class="dropdown-item notify-item">
              <i class="fonts icon-wodezhanghuhover mr-1"></i>
              <span>我的账户</span>
            </a>
            <!-- 退出登录-->
            <a href="<?php $this->options->logoutUrl(); ?>" class="dropdown-item notify-item">
              <i class="fonts icon-tuichu mr-1"></i>
              <span>Logout</span>
            </a>
          </div>
        <?php else : ?>
          <!-- 载入login -->
          <?php $this->need('login.php'); ?>
        <?php endif; ?>
      </li>
    </ul>
    <!-- 未知 -->
    <a class="navbar-toggle" data-toggle="collapse" data-target="#topnav-menu-content">
      <div class="lines">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </a>
    <!-- 搜索 -->
    <div class="app-search">
      <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
        <div class="input-group">
          <input type="text" id="s" name="s" class="form-control" placeholder="输入关键词...">
          <span class="fonts icon-search-solid"></span>
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Search</button>
          </div>
        </div>
      </form>
    </div>


  </div>
</div>