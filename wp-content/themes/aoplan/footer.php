	<div id="footer">
		All content is &copy; <?php print(date(Y)); ?> by <a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name'); ?></a>. All rights reserved.
		<p id="footer-credit">
			<span id="generator-link"><a href="http://wordpress.org/" title="<?php _e('WordPress', 'aoplan'); ?>" rel="generator"><?php _e('WordPress', 'aoplan'); ?></a></span>
			<span class="meta-sep">|</span>
			<span id="theme-link"><a href="http://www.aoplan.com" title="<?php _e('aoplan', 'aoplan'); ?>" rel="designer"><?php _e('aoplan', 'aoplan'); ?></a></span>
		</p>
	</div><!-- #footer -->
</div><!-- #wrapper .hfeed -->

<?php wp_footer(); ?>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>