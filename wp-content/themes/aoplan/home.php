<?php get_header() ?>

	<div id="container">
		<div id="content">
			<?php
				global $aoplanOption;
				foreach ($aoplanOption->get("titles" , array() ) as $key => $value) {
					echo "<div id='$key' class='aoplan-page'>";
					var_dump($value);
					echo "</div>";
				}
			?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>