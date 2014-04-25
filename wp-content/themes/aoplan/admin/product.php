<div class="inside">
	<form name="post" action="" method="post" id="quick-press" class="initial-form">
		<input type="hidden" name="id" value="<?php echo $product['id']; ?>" >
		<div class="input-text-wrap" id="title-wrap">
			<label class="prompt" for="title" >标题</label>
			<input type="text" name="title" id="title" value="<?php echo $product['title']; ?>" >
		</div>
		<div class="textarea-wrap" id="description-wrap">
			<label class="prompt" for="content" id="content-prompt-text">在想些什么？</label> 
			<textarea name="content" id="content" class="mceEditor" rows="3" cols="15">
				<?php echo $product['title']; ?>
			</textarea>
		</div>

		<div class="input-text-wrap" id="title-wrap">
			<label class="prompt" for="pic" >pic</label>
			<input type="hidden" name="pic" id="pic" value="<?php echo $product['pic']; ?>" >
			<img src="<?php echo $product['pic']; ?>" />
		</div>

		<p class="submit">
			<input type="submit" name="save" id="save-post" class="button button-primary" value="save">
			<br class="clear">
		</p>
	</form>
</div>
<?php
	echo "<table>";
	foreach ($out->list as $id => $product) {
		echo "<tr><td>$product[title]</td><td>$product[content]</td><td><img src='$product[pic]'></td><td>edit</td></tr>";
	}	
	echo "</table>";
?>
	