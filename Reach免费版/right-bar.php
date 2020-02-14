<!-- 右侧设置菜单 -->
<div class="right-bar hide">
  <div class="rightbar-title">
    <a href="javascript:void(0);" class="right-bar-toggle float-right">
      <i class="fonts icon-guanbi noti-icon"></i>
    </a>
    <h5 class="m-0">设置</h5>
  </div>

  <div class="slimscroll-menu rightbar-content">

    <div class="p-3">
      <div class="alert alert-warning" role="alert">
        <strong>定制</strong>整体配色方案，宽度等。请注意，配置文件将存储在本地。
      </div>

      <!-- Settings -->
      <h5 class="mt-3">配色方案</h5>
      <hr class="mt-1" />

      <div class="custom-control custom-switch mb-1">
        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light" id="light-mode-check" checked />
        <label class="custom-control-label" for="light-mode-check">高亮模式</label>
      </div>

      <div class="custom-control custom-switch mb-1">
        <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark" id="dark-mode-check" />
        <label class="custom-control-label" for="dark-mode-check">黑暗模式</label>
      </div>

      <!-- Width -->
      <h5 class="mt-4">宽度</h5>
      <hr class="mt-1" />
      <div class="custom-control custom-switch mb-1">
        <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check" checked />
        <label class="custom-control-label" for="fluid-check">流体布局</label>
      </div>
      <div class="custom-control custom-switch mb-1">
        <input type="radio" class="custom-control-input" name="width" value="boxed" id="boxed-check" />
        <label class="custom-control-label" for="boxed-check">盒子布局</label>
      </div>


      <button class="btn btn-primary btn-block mt-4" id="resetBtn">重置为默认</button>

    </div> <!-- end padding-->

  </div>
</div>

<div class="rightbar-overlay"></div>
<!-- 右侧设置菜单结束 -->