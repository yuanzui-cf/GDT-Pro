<?php
/**
 * GDT Pro是一个简单快速的主题。它专门为Typecho制作，页面简洁，适合极客使用。
 * <a href="https://theme.estu.site/" alt="主题官网">主题官网</a> · <a href="https://qm.qq.com/cgi-bin/qm/qr?k=K9wCuEjDJZSZQsxj1NEDseU86jsleaPA&jump_from=webapi" alt="QQ群">QQ群</a> · <a href="https://github.com/cfstar/Grass-Design-Theme-for-Typecho/wiki/">主题文档</a>
 *
 * @package Grass Design Theme Pro
 * @author Grass Technology
 * @version 1.0.0 Preview
 * @link https://theme.estu.site/
 */
?>
<!DOCTYPE html>
<html lang="zh">
    <head>
        <?php
        include('header.php');
        ?>
    </head>
    <body>
        <?php
        include("frame/menu.php");
        include("frame/drawer.php");
        ?>
        <div class="gd-main gd-menu-holder">
            <?php include("frame/notice.php"); ?>
            <div class="gd-box gd-box-pad-100-top gd-suit gd-rc gd-shadow-20 gd-shadow-h-5">
                <h2 class="gjs-lang" data-lang="com_welcome">Loading...</h2>
                <h1 class="gjs-lang" data-lang="com_name">Loading...</h1>
            </div>
            <div class="gd-box gd-suit gd-rc gd-shadow-20 gd-shadow-h-5">
                <form method="post" action="">
                    <div><input type="text" name="s" class="gd-input gd-rc" placeholder="Search"></div>
                </form>
            </div>
            <div class="gd-box gd-suit gd-rc gd-shadow-20 gd-shadow-h-5">
                <h3 class="gjs-lang" data-lang="com_post_list">Loading...</h3>
                <?php while($this->next()): ?>
                <a href="<?php $this->permalink() ?>">
                    <div class="gd-box gd-suit gd-rc gd-h gd-article">
                        <?php if($this->fields->postimage != null) { ?>
                        <img class="gd-rc" src="<?php $this->fields->postimage(); ?>" width="100%" height="auto">
                        <?php } ?>
                        <h2><?php $this->title() ?></h2>
                        <p>作者: <?php $this->author(); ?> 发布日期: <?php $this->date('Y F j'); ?></p>
                        <p><?php $this->commentsNum('评论 %d'); ?></p>
                        <br>
                        <p>查看文章</p>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php $this->pageNav(); ?>
            </div>
            <div class="gd-box gd-suit gd-rc gd-shadow-20 gd-shadow-h-5">
                <?php include('footer.php') ?>
            </div>
        </div>
        <div class="gd-overlay"></div>
        <script src="<?php $this->options->themeUrl('main.js'); ?>" async></script>
    </body>
</html>