<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown login-dropdown p-0 border-0 shadow-sm" aria-labelledby="topbar-userdrop">
  <div class="card mb-0 shadow-none">
    <!-- Logo -->
    <div class="card-header text-center bg-primary p-1">
      <a href="<?php $this->options->siteUrl(); ?>">
        <span><img src="<?php $this->options->themeUrl('images/favicon/mstile-70x70.png'); ?>" alt="" height="40"></span>
      </a>
    </div>
    <div class="card-body p-2">
      <!-- 登录提示信息 -->
      <div class="text-center w-75 m-auto">
        <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Sign In</h4>
        <p class="text-muted mb-2">输入账号和密码登录</p>
      </div>
      <!-- 登录表单 -->
      <form action="<?php $this->options->loginAction() ?>" method="post" name="login" rold="form">
        <input type="hidden" name="referer" value="<?php echo curPageURL(); ?>">
        <!-- item -->
        <div class="form-group">
          <label for="login_name">User name</label>
          <input class="form-control" type="text" id="login_name" name="name" autocomplete="username" placeholder="请输入用户名" />
        </div>
        <!-- item -->
        <div class="form-group">
          <a href="pages-recoverpw.html" class="text-muted float-right"><small>忘记了密码?</small></a>
          <label for="login_pass">Password</label>
          <input class="form-control" type="password" id="login_pass" name="password" autocomplete="current-password" placeholder="请输入密码" />
        </div>
        <!-- item -->
        <div class="form-group mb-3">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
            <label class="custom-control-label" for="checkbox-signin">记住密码</label>
          </div>
        </div>
        <!-- item -->
        <div class="form-group mb-0 text-center">
          <button class="btn btn-primary" type="submit"> Log In </button>
        </div>
      </form>
    </div> <!-- end card-body -->
  </div>
  <!-- end card -->
</div>