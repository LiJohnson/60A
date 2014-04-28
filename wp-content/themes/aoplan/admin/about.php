<div class="inside">
	<form name="post" action="" method="post" id="gallery" class="initial-form">
		<table>
			<!--$about = $this->getData('tel,name,web,addr,desc'); -->
			<tr>
				<td><label for="name" >称呼</label></td>
				<td><input tppe="text" name="name" id="name" value="<?php echo $out->about['name']; ?>" ></td>
			</tr>
			<tr>
				<td><label for="web" >网址</label></td>
				<td><input type="text" name="web" id="web" value="<?php echo $out->about['web']; ?>" /></td>
			</tr>			
			<tr>
				<td><label for="addr" ></label>地址</td>
				<td><input type="text" name="addr" id="" value="<?php echo $out->about['addr']; ?>" /></td>
			</tr>			
			<tr>
				<td><label for="tel" >电话</label></td>
				<td><input type="text" name="tel" id="tel" value="<?php echo $out->about['tel']; ?>" /></td>
			</tr>
			<tr>
				<td><label for="desc" >介绍</label></td>
				<td><textarea type="text" name="desc" id="desc" ><?php echo $out->about['desc']; ?></textarea></td>
			</tr>
		</table>
		<p class="submit">
			<input type="submit" name="about" class="button button-primary" value="update">
			<br class="clear">
		</p>
	</form>
</div>