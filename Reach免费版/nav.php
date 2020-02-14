<div class="topnav">
  <div class="container-fluid">
    <nav class="navbar navbar-dark navbar-expand-lg topnav-menu">
      <div class="collapse navbar-collapse" id="topnav-menu-content">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php $this->options->siteUrl(); ?>"><i class="fonts icon-home-solid mr-1"></i>主页</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fonts icon-bars-solid mr-1"></i>分类 <div class="arrow-down"></div>
            </a>
            <div class="dropdown-menu" aria-labelledby="topnav-apps">
              <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
              <?php while ($categorys->next()) : ?>
                <?php if ($categorys->levels === 0) : ?>
                  <?php $children = $categorys->getAllChildren($categorys->mid); ?>
                  <?php if (empty($children)) { ?>
                    <a class="dropdown-item" href="<?php $categorys->permalink(); ?>" title="<?php $categorys->name(); ?>"><?php $categorys->name(); ?></a>
                  <?php } else { ?>
                    <div class="dropdown">
                      <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-<?php $categorys->mid(); ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php $categorys->name(); ?> <div class="arrow-down"></div></a>
                      <div class="dropdown-menu" aria-labelledby="topnav-<?php $categorys->mid(); ?>">
                        <?php foreach ($children as $mid) { ?>
                          <?php $child = $categorys->getCategory($mid); ?>
                          <a class="dropdown-item" href="<?php echo $child['permalink'] ?>" title="<?php echo $child['name']; ?>"><?php echo $child['name']; ?></a>
                        <?php } ?>
                      </div>
                    </div>
                  <?php } ?>
                <?php endif; ?>
              <?php endwhile; ?>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php $this->options->siteUrl(); ?>links.html"><i class="fonts icon-link-solid mr-1"></i>友链</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php $this->options->siteUrl(); ?>about.html"><i class="fonts icon-user-alt-solid mr-1"></i>关于</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php $this->options->siteUrl(); ?>faq.html"><i class="fonts icon-question-circle mr-1"></i>FAQ</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>