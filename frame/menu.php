<div class="gd-menu gd-shadow gd-color-white-fill">
    <i class="gd-icon" id="menu">&#xe900;</i>
    <?php if($this->options->logoUrl != null) { ?>
        <div><a href="<?php $this->options->siteUrl(); ?>"><img alt="logo" src="<?php echo $this->options->logoUrl(); ?>"></a></div>
    <?php } else { ?>
        <div><a href="<?php $this->options->siteUrl(); ?>" class="gjs-lang" data-lang="com_name">Loading...</a></div>
    <?php } ?>
    <?php if(empty($this->options->chooseSet) || in_array('hideLanguageSetBox', $this->options->chooseSet) == null){ ?>
    <select class="gd-select-list gd-rc" id="lang">
        <option value="zh-cn">Loading...</option>
        <option value="zh-tw">Loading...</option>
        <option value="en-us">Loading...</option>
    </select>
    <?php } else { ?>
    <select id="lang" style="display:none"></select>
    <?php } ?>
</div>