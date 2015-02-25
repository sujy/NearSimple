<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (!is_pjax()) { ?>
    <footer>
        <div class="contact">
            <i class="icon-wechat"></i>
            <i class="icon-weibo"></i>
            <i class="icon-qq"></i>
            <i class="icon-github"></i>
        </div>
        <p>Copyright &copy; Umotion Studio 2015</p>
        <p>Powered by Typecho.</p>
    </footer>
    <script src="<?php $this->options->themeUrl('js/app.js'); ?>"></script>
    <script>
        $(function() { 
            panelPlugin.init({
                element: $('aside'),
                openBtn: $('#open-panel'),
                closeBtn: $('#close-panel')
            });               
        });
    </script>
    </body>
</html>
<?php } ?>