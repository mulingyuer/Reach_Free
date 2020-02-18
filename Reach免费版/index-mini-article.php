<!-- item -->
<?php while ($this->next()) : ?>
  <div class="col-12">
    <div class="card">
      <div class="row no-gutters align-items-center">
        <div class="col-md-4 article-thum overflow-hidden">
          <div class="article-tags">
            <?php $this->category(''); ?>
          </div>
          <a href="<?php $this->permalink() ?>" class="d-inline-block">
            <img src="<?php $this->options->themeUrl('images/loading.gif'); ?>" error="<?php $this->options->themeUrl('images/error.jpg'); ?>" bsrc="<?php
                                                                                                                                                      if ($this->fields->thumb) {
                                                                                                                                                        echo $this->fields->thumb;
                                                                                                                                                      } else {
                                                                                                                                                        get_ArticleThumbnail($this);
                                                                                                                                                      };
                                                                                                                                                      ?>" class="card-img" alt="<?php $this->sticky() ?><?php $this->title() ?>">
          </a>
        </div>
        <div class="col-md-8">
          <div class="card-body pb-0">
            <h5 class="card-title"><?php $this->sticky() ?><?php $this->title() ?></h5>
            <p class="card-text"><?php $this->excerpt(140, '...'); ?></p>
            <p class="card-text">
              <small class="text-muted">
                <i class="fonts icon-rili1 mr-1"></i><time class="mr-2"><?php $this->date('Y-m-d'); ?></time>
                <span><?php $this->author(); ?></span>
              </small>
            </p>
          </div> <!-- end card-body-->
          <div class="card-footer border-0 text-right pt-1">
            <a href="<?php $this->permalink() ?>" class="btn btn-sm btn-info btn-rounded">Read</a>
          </div>
        </div> <!-- end col -->
      </div> <!-- end row-->
    </div> <!-- end card-->
  </div>
<?php endwhile; ?>