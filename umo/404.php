<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
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
                <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
                <p style="text-align: center;"><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
                <form method="post" class="not-found" style="text-align: center;">
                    <p><input type="text" name="s" class="text" autofocus /></p>
                    <p><button type="submit" class="submit" style="margin-top: 30px;"><?php _e('搜索'); ?></button></p>
                </form>
            </div>
        </div>
        <div class="main-footer">
            <div class="wrapper border-t-b">
                <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
            </div>
        </div>

    </div>
    <?php $this->need('footer.php'); ?>
    <script>
        $(function() { 
            panelPlugin.init({
                element: $('aside'),
                openBtn: $('#open-panel'),
                closeBtn: $('#close-panel')
            });
            NProgress.start();
            NProgress.done();
                
        });
    </script>
</body>
</html>