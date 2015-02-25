<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    
    <?php $this->need('sidebar.php'); ?>

    <div class="main">
        <div class="main-header">
            <div class="contact">
                <i class="icon-wechat"></i>
                <i class="icon-weibo"></i>
                <i class="icon-qq"></i>
                <i class="icon-github"></i>
            </div>
            <h1><?php $this->options->title() ?></h1>
            <p><?php $this->options->description() ?></p>
        </div>
        <div class="main-body">
            <div class="wrapper">
                <?php if ($this->have()): ?>
                <?php while($this->next()): ?>
                    <?php echo img_postthumb($this->cid); ?>
                    <?php if ($this->attachments(1)->attachment->isImage): ?>
                    <section>
                        <a href="<?php $this->permalink() ?>" class="figure" title="<?php $this->title() ?>">
                            <div class="figure-image" style="background-image:url(<?php $this->attachments(1)->attachment->url(); ?>)"></div>
                            <div class="figure-mask">
                                <div class="figure-mask-text">
                                    <p>Lorem ipsum.</p>
                                    <h3>View Gallery</h3>
                                </div>
                            </div>
                        </a>
                        <div class="description">
                            <p><?php $this->date('F j, Y'); ?>  /  <a href="<?php $this->permalink() ?>#comments" class="comments-info"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></p>
                        </div>
                    </section>
                    <?php else: ?>
                    <section>
                        <div class="figure">
                            <div class="figure-text">
                                <p><?php $this->title() ?></p>
                                <h3><?php $this->content(); ?></h3>
                            </div>
                            <a class="figure-mask" href="<?php $this->permalink() ?>" title="<?php $this->title() ?>">
                                <div class="figure-mask-text">
                                    <p>Lorem ipsum.</p>
                                    <h3>View Gallery</h3>
                                </div>
                            </a>
                        </div>
                        <div class="description">
                            <p><?php $this->date('F j, Y'); ?>  /  <a href="<?php $this->permalink() ?>#comments" class="comments-info"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></p>
                        </div>
                    </section>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php else: ?>
                    <article class="post">
                        <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
                        <a href="<?php $this->options->siteUrl(); ?>">返回主页</a>
                    </article>
                <?php endif; ?>
                

            </div>
        </div>
        <div class="main-footer">
            <div class="wrapper border-t-b">
                <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
            </div>
        </div>

    </div>
    <?php $this->need('footer.php'); ?>
