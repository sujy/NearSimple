<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (!is_pjax()) { ?>
<aside>
    <div class="close-btn">
        <button id="close-panel" class="close right">×</button>
    </div>
    <div class="panel-header">
        <h2>欢迎</h2>
        <p>中山大学羽墨轩数字媒体应用俱乐部</p>
        <p>Welcome to the website of Umotion Studio, SYSU </p>
        <div class="contact">
            <i class="icon-wechat"></i>
            <i class="icon-weibo"></i>
            <i class="icon-qq"></i>
            <i class="icon-github"></i>
        </div>
        <div class="split-line height-10"></div>
    </div>
    <nav class="panel-body">
        <ul>
            <li <?php if($this->is('index')): ?> class="active"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>">Home</a></li>
            <li <?php if($this->is('category', 'portfolio')): ?> class="active"<?php endif; ?>><a href="http://localhost:8081/build/index.php/category/portfolio/">Portfolio</a></li>
            <li <?php if($this->is('category', 'lab')): ?> class="active"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>index.php/category/lab/">Lab</a></li>
            <li <?php if($this->is('page', 'contact')): ?> class="active"<?php endif; ?>><a href="http://localhost:8081/build/index.php/contact.html">Contact</a></li>
        </ul>
    </nav>
</aside>

<header>
    <div class="wrapper">
        <div class="left menu-btn">
            <button id="open-panel"><i class="icon-menu"></i></button>
        </div>
        <div class="right search-blk">
            <form id="search" method="post" action="./" role="search">
                <button type="submit"><i class="icon-search"></i></button>
                <input name="s" type="text" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
<div class="dim"></div>
<?php } ?>
