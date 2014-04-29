<?php get_header() ?>

	<div id="container">
		<div id="content">
			<?php
				global $aoplanOption;
				global $aoplanHtml;
				foreach (wp_get_nav_menu_items("aoplan",array()) as $key => $page) {
					echo "<div id='aop-menu-item-$page->ID' class='aoplan-page'>";
					echo "<h2>$page->post_content </h2><div class='page-content'>$page->post_content </div>";
					$page = get_page($page->ID);
					var_dump($page->post_content);
					echo "</div>";
				}
			?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>