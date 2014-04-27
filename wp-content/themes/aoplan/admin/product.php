<div class="inside">
	<form name="post" action="" method="post" id="product" class="initial-form">
		<input type="hidden" name="id" value="<?php echo $product['id']; ?>" >
		<div class="input-text-wrap" id="title-wrap">
			<input type="text" name="title" id="title" value="<?php echo $out->product['title']; ?>" required placeholder="标题" >
		</div>
		<div class="textarea-wrap" id="description-wrap">
			<textarea name="content" id="content" class="mceEditor" rows="3" cols="15" required placeholder="在想些什么？"><?php echo $out->product['title']; ?></textarea>
		</div>

		<div class="input-text-wrap" id="title-wrap">
			<input type="button" id="pic" class="upload-button button" value="upload"/>
			<input type="hidden" name="pic" value="<?php echo $out->product['pic']; ?>" required />
			<img src="<?php echo $out->product['pic']; ?>" />
		</div>

		<p class="submit">
			<input type="submit" name="save" id="save-post" class="button button-primary" value="save">
			<br class="clear">
		</p>
	</form>
</div>
<?php
	echo '<table id="productList" >';
	foreach ($out->list as $id => $product) {
		echo "<tr><td>$product[title]</td><td>$product[content]</td><td><img src='$product[pic]'></td><td>";
		echo "<a href='?page=$_GET[page]&id=$id'>edit</a>";
		echo "<form method=post action='' ><input type=hidden name='id' value='$id' /><input type='submit' name='delete' value='delete' /></td></tr>";
	}	
	echo "</table>";
?>
	