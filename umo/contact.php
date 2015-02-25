<?php
/**
 * 自定义页面模板
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
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
            <?php $this->title(); ?>
            <?php $this->content(); ?>
        </div>
    </div>
</div>

<?php $this->need('footer.php'); ?>