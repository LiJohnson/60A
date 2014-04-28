<?php get_header() ?>

	<div id="container">
		<div id="content">
			<?php
				global $aoplanOption;
				global $aoplanHtml;
				foreach ($aoplanOption->getTitles() as $key => $value) {
					echo "<div id='$value[key]' class='aoplan-page'>";
					require(dirname(__file__).'/home/'.$value['key'].'.php');
					echo "</div>";
				}
			?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>