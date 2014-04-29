<?php get_header() ?>

	<div id="container">
		<div id="content">
			<?php
				global $aoplanOption;
				global $aoplanHtml;
				foreach (wp_get_nav_menu_items("aoplan",array()) as $key => $page) {
					echo "<div id='aop-menu-item-$page->ID' class='aoplan-page'>";
					echo "<h2>$page->post_content </h2><div class='page-content'>$page->post_content </div>";
					var_dump($page);
					$page = get_post($page->object_id);
					var_dump($page->post_content);
					var_dump(apply_filters('the_content', $page->post_content));
					the_post();
					echo "</div>";
				}
			?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>