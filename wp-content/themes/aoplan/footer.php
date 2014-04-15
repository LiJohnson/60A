	<div id="footer">
		All content is &copy; <?php print(date(Y)); ?> by <a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name'); ?></a>. All rights reserved.
		<p id="footer-credit">
			<span id="generator-link"><a href="http://wordpress.org/" title="<?php _e('WordPress', 'sandbox'); ?>" rel="generator"><?php _e('WordPress', 'sandbox'); ?></a></span>
			<span class="meta-sep">|</span>
			<span id="theme-link"><a href="http://www.plaintxt.org/themes/sandbox/" title="<?php _e('Sandbox for WordPress', 'sandbox'); ?>" rel="designer"><?php _e('Sandbox', 'sandbox'); ?></a></span>
			<span class="meta-sep">|</span>
			<a href="http://www.allancole.com/wordpress/themes/autofocus" title="<?php _e('Autofocus', 'sandbox'); ?>"><?php _e('Autofocus', 'sandbox'); ?></a>
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