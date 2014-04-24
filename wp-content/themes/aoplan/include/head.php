<style>
#adminmenu li.current{background: rgb(56, 125, 143);}
</style>
<script>
jQuery(function($){
	var $form = $("form[name=aoplan-title]")
	$form.find("input").change(function(){
		$form.postData(ajaxurl,{action:"aoplanUpdateTitle"},function(data){
			$.log(data);
		});
	});
});
</script>
<h2>
	标题设置
</h2>
<form name='aoplan-title'>
	<input type="hidden" name="name"  value="<?php _e($name);?>" />
	<input type="text" 	 name="title" value="<?php _e($title['title']);?>" placeholder="名字"/>
	<input type="number" name="pos"   value="<?php _e($title['pos']);?>" placeholder="排序" />
</form>
<hr>
		