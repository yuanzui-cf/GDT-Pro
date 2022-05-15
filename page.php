<!DOCTYPE html>
<html lang="zh">
    <head>
        <?php
        include('header.php');
        ?>
    </head>
    <body style="background-color:rgb(247,249,250)">
        <?php
        include("frame/menu.php");
        include("frame/drawer.php");
        ?>
        <div class="gd-main gd-menu-holder">
            <?php include("frame/notice.php"); ?>
            <div class="gd-box gd-box-pad-100-top gd-suit gd-rc gd-shadow-20 gd-shadow-h-5">
                <h1><?php $this->title() ?></h1>
            </div>
            <div class="gd-box gd-suit gd-rc gd-shadow-20 gd-shadow-h-5 gd-article">
                    <?php $this->content(); ?>
            </div>
            <?php if($this->fields->postcopy != null) { ?>
            <div class="gd-box gd-suit gd-rc gd-shadow-20 gd-shadow-h-5">
                <?php $this->fields->postcopy(); ?>
            </div>
            <?php } ?>
            <div class="gd-box gd-suit gd-rc gd-shadow-20 gd-shadow-h-5">
                <?php include('frame/comments.php'); ?>
            </div>
            <div class="gd-box gd-suit gd-rc gd-shadow-20 gd-shadow-h-5">
                <?php include('footer.php') ?>
            </div>
        </div>
        <div class="gd-overlay" id="overlay"></div>
        <script src="<?php $this->options->themeUrl("main.js"); ?>"></script>
    </body>
</html>