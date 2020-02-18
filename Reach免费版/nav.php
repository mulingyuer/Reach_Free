<div class="topnav">
  <div class="container-fluid">
    <nav class="navbar navbar-dark navbar-expand-lg topnav-menu" id="blog-nav">
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
          <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
          <?php while ($pages->next()) : ?>
            <li class="nav-item">
              <a class="nav-link self-page" href="<?php $pages->permalink(); ?>"><i class="fonts mr-1"></i><?php $pages->title(); ?></a>
            </li>
          <?php endwhile; ?>
          <li class="nav-item d-lg-none">
            <div class="app-search" style="height: 48px;">
              <form id="search2" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                <div class="input-group">
                  <input type="text" id="s" name="s" class="form-control h-100 bg-white" placeholder="输入关键词...">
                  <span class="fonts icon-search-solid"></span>
                  <div class="input-group-append">
                    <button class="btn btn-light p-0 pl-2 pr-2" type="submit">Search</button>
                  </div>
                </div>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>