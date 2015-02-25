<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <?php $this->need('sidebar.php'); ?>
    <div class="main">
        <div class="main-header">
            <h1><?php $this->title() ?></h1>
            <p>一些描述而已</p>
        </div>
        <div class="main-body">
            <div class="wrapper shadow">
                <?php $this->content(); ?>
            </div>
            <div class="wrapper author">
                <div class="left">
                    <div class="left">
                        <div class="avatar" style="background-image:url(<?php $this->options->themeUrl('images'); ?>/<?php $this->author(); ?>.jpg)"></div>
                    </div>
                    <div class="right">
                        <h4><?php $this->author(); ?></h4>
                        <p><?php $this->date('F j, Y'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->need('comments.php'); ?>
    </div>
    <?php $this->need('footer.php'); ?>
