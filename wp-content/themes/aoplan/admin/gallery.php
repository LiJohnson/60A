<div class="inside">
	<form name="post" action="" method="post" id="gallery" class="initial-form">
		<div class="input-text-wrap" id="title-wrap">
			<input type="url" name="pic" value="" required placeholder='相片' />
			<input type="button" id="pic" class="upload-button button" value="upload"/>
		</div>
		<p class="submit">
			<input type="submit" name="save" id="save-post" class="button button-primary" value="add">
			<br class="clear">
		</p>
	</form>
</div>
<hr>
<?php
	echo '<table id="productList" class="wp-list-table widefat fixed" >';
	echo '<tr><th>图片</th><th>操作</th></tr>';
	foreach ($out->list as $id => $pic) {
		echo "<tr><td><img src='$pic' /></td><td>";
		echo "<form method=post action='' ><input type=hidden name='id' value='$id' /><input type='submit' class='button' name='delete' value='delete' /></form></td></tr>";
	}
	echo "</table>";
?>
	