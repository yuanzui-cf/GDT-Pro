<div class="gd-drawer gd-shadow-20 gd-color-white-fill">
    <t class="gjs-lang" data-lang="com_menu">Loading...</t>
	<?php if($this->options->menuList == null){ ?>
    <a href="<?php $this->options->siteUrl(); ?>"><li class="gd-rc-1 gd-h gjs-lang" data-lang="com_home">Loading...</li></a>
    <?php $this->widget('Widget_Contents_Page_List')->parse('<a href="{permalink}"><li class="gd-rc gd-h">{title}</li></a>');}
    else{ link_parse($this->options->menuList,1); } ?>
</div>