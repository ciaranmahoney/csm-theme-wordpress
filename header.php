
<?php // Get theme options
	$options = get_option('csm_theme_settings');
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title><?php bloginfo('name'); ?> | <?php if( is_home() ) : echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php if ($options['csm_theme_text_field_favicon_image'] != "") {echo $options['csm_theme_text_field_favicon_image'];} else { echo get_template_directory_uri() . "/img/favicon.png";} ?>"/>

<link href='http://fonts.googleapis.com/css?family=Roboto:300,500|Junge' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<!--[if lt IE 9]>

<div class="ie-warning">
	<p>Booooo.... You are using Internet Explorer 8 or lower. That means you are using a browser that was released in 2009 and this beautiful website is going to look terrrrrrrible for you... Please <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie" target="_blank">UPDATE NOW</a>. Or try a better browser like <a href="http://www.mozilla.org/en-US/firefox/features/" target="_blank"> Firefox</a> or <a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">Chrome.</a>
	</p>
</div>

<![endif]-->

<body <?php body_class(); ?>>

<header id="masthead" class="site-header" role="banner">
	<div class="container">

		<div class="gravatar hidden-mobile">
			<img src='<?php if ($options['csm_theme_text_field_header_image'] != "") {echo $options['csm_theme_text_field_header_image'];} else { echo get_template_directory_uri() . "/img/gravatar-default.png";} ?>' height="135px" width="135px"/>
		</div><!--/ author -->

		<div id="brand">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> &mdash; <span id="csm-site-description"><?php echo get_bloginfo( 'description' ); ?></span></h1>
		</div><!-- /brand -->

		<nav role="navigation" class="site-navigation main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			
			<?php csm_theme_insert_social_links(); ?>
			
		</nav><!-- .site-navigation .main-navigation -->
		<div class="clear"></div>
	</div><!--/container -->

</header><!-- #masthead .site-header -->

<div class="container">

	<div id="primary">
		<div id="content" role="main">