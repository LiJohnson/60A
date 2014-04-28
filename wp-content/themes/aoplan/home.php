<?php get_header() ?>

	<div id="container">
		<div id="content">
			<?php
				global $aoplanOption;
				foreach ($aoplanOption->get("titles" , array() ) as $key => $value) {
					echo "<div id='$key' class='aoplan-page'>";
					require(dirname(__file__).'/home/'.$key.'.php');
					echo "</div>";
				}
			?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>