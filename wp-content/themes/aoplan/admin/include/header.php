<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/admin/css/aoplan.css" />
<script src="<?php echo get_template_directory_uri(); ?>/admin/js/aoplan.js" ></script>
<h2>
	标题设置
</h2>
<form name='aoplan-title'>
	<input type="hidden" name="name"  value="<?php echo $name;?>" />
	<input type="text" 	 name="title" value="<?php echo $title['title'];?>" placeholder="名字"/>
	<input type="number" name="pos"   value="<?php echo $title['pos'];?>" placeholder="排序" />
	<a id="tip">&nbsp;</a>
</form>
<hr>
		