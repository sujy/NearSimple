<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (!is_pjax()) { ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/fontello.css'); ?>">
    <link href='http://fonts.useso.com/css?family=PT+Serif:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/animation.css'); ?>"><!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/desert.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/nprogress.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <script src="<?php $this->options->themeUrl('js/jquery-2.1.1.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/jquery.pjax.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/pretty.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/nprogress.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/umotion.js'); ?>"></script>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body onload="prettyPrint()">
<?php } ?>
