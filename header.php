<?php include("core/functions.php"); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
<title class="gjs-lang" data-lang="com_name">Loading...</title>
<?php if($this->options->jqueryUrl != null) { ?>
<script src="<?php $this->options->jqueryUrl() ?>" async></script>
<?php } else { ?>
<script src="<?php $this->options->themeUrl(); ?>lib/JQuery/jquery.min.js" async></script>
<?php } ?>
<script src="<?php $this->options->themeUrl(); ?>lib/grassjs/grass.js"></script>
<script src="<?php $this->options->themeUrl(); ?>lang.js"></script>
<script>
    <?php if($this->options->langCode == null) $this->options->langCode = "zh-cn"; ?>
    langset(null, "<?php $this->options->langCode(); ?>");
</script>
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" async />
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('font.css'); ?>" async />
<link rel="preload" as="font">
<link rel="icon" href="<?php $this->options->faviconUrl() ?>">
<?php $this->header(); ?>
<style>
    <?php $this->options->cssCode() ?>
</style>
<?php $this->options->headerCode(); ?>