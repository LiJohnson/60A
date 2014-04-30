<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); if ( is_404() ) : _e(' &raquo; ', 'sandbox'); _e('Not Found', 'sandbox'); elseif ( is_home() ) : _e(' &raquo; ', 'sandbox'); bloginfo('description'); else : wp_title(); endif; ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<meta name="description" content="<?php bloginfo('description') ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version') ?>" /><!-- Please leave for stats -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" />
<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'sandbox'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/aoplan.css" />

<!-- 
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
-->
<?php wp_enqueue_script( array('jquery'));wp_head() ?>
<link rel="stylesheet" href="http://1.gtbcode.sinaapp.com/css/style.css">
</head>

<body class="<?php sandbox_body_class() ?>" >

<div id="wrapper" class="home-site">
	<header class="home-header animate-children">
		<div class="home-logo onetone-logo">
        	<a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>" rel="home">
                <span class="site-name"><?php bloginfo('name'); ?> </span>
            </a>
        </div>
        <a class="home-navbar navbar" href="javascript:;"></a>
        <?php
       $param = array(
            "theme_location"=>"aoplan",
            "depth"=>1,
            "container"=>"nav" ,
            "container_class"=>"home-navigation top-nav animate",
            "menu_class"=>"onetone-menuitem"
        );
		wp_nav_menu($param );
		?>
		<div class="clear"></div>
