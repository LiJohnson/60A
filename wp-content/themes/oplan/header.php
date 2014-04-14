<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); if ( is_404() ) : _e(' &raquo; ', 'sandbox'); _e('Not Found', 'sandbox'); elseif ( is_home() ) : _e(' &raquo; ', 'sandbox'); bloginfo('description'); else : wp_title(); endif; ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<meta name="description" content="<?php bloginfo('description') ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version') ?>" /><!-- Please leave for stats -->

<style type="text/css" media="all"> @import url(<?php bloginfo('template_url'); ?>/css/reset.css); @import url(<?php bloginfo('template_url'); ?>/css/generic.css); </style>
<style type="text/css" media="print"> @import url(<?php bloginfo('template_url'); ?>/css/print.css); </style>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" />
<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'sandbox'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

<?php wp_head() ?>

</head>

<body class="<?php sandbox_body_class() ?>">

<div id="wrapper" class="hfeed">

	<div id="header">
		<h1 id="blog-title">
			<a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>" rel="home">
				<?php bloginfo('name'); ?>
			</a>
		</h1>
		<div id="blog-description"><?php bloginfo('description') ?></div>
	</div><!--  #header -->

	<div id="nav">
		<?php wp_list_pages();?>
	</div><!-- #nav -->