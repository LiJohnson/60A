<?php get_header() ?>
<?php the_post(); ?>
	<div id="container">
		<div id="content">
			<div id="post-<?php the_ID(); ?>" >
				<div class="entry-meta" style="float:right;">
					<?php edit_post_link(__('Edit', 'sandbox'),'<span class="edit-link">','</span>') ?>
				</div>
				<h2 class="entry-title"><?php the_title(); ?></h2>
				
				<div class="entry-content">
					<?php the_content() ?>
				</div>
			</div><!-- .post -->
		</div><!-- #content -->
	</div><!-- #container -->

<?php /*get_sidebar()*/ ?>
<?php get_footer() ?>