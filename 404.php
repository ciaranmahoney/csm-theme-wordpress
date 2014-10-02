<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?> | <?php if( is_home() ) : echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

<link rel="shortcut icon" href="http://ciaranmahoney.me/wp-content/uploads/2011/08/favicon.png"/>
<link href='http://fonts.googleapis.com/css?family=Roboto:300,500|Junge' rel='stylesheet' type='text/css'>
</head>

<!--[if lt IE 9]>

<div class="ie-warning">
	<p>Booooo.... You are using Internet Explorer 8 or lower. That means you are using a browser that was released in 2009 and this beautiful website is going to look terrrrrrrible for you... Please <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie" target="_blank">UPDATE NOW</a>. Or try a better browser like <a href="http://www.mozilla.org/en-US/firefox/features/" target="_blank"> Firefox</a> or <a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">Chrome.</a>
	</p>
</div>

<![endif]-->

<body <?php body_class(); ?>>


<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start header
	/*-----------------------------------------------------------------------------------*/
?>

<header id="masthead" class="site-header" role="banner">
	<div class="container">
		
		<div class="gravatar hidden-mobile">
			<img src="<?php bloginfo( 'template_url' ); ?>/img/gravatar.jpg" height="135px" width="135px"/>
		</div><!--/ author -->
		
		<div id="brand">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> &mdash; <span><?php echo get_bloginfo( 'description' ); ?></span></h1>
		</div><!-- /brand -->
	
		<nav role="navigation" class="site-navigation main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<div class="menu-primary-navigation-container">
				<ul id="menu-social-links" class="menu">
					<li id="twitter-header-link" class="menu-item menu-item-type-custom menu-item-object-custom twitter-header-link ">
						<a href="http://twitter.com/ciaransm" target="_blank">@ciaransm</a>
					</li>
					<li id="twitter-header-link" class="menu-item menu-item-type-custom menu-item-object-custom twitter-header-link ">
						<a href="http://twitter.com/zhoommarketing" target="_blank">@zhoommarketing</a>
					</li>
				</ul>
			</div>
		</nav><!-- .site-navigation .main-navigation -->
		<div class="clear"></div>
	</div><!--/container -->
		
</header><!-- #masthead .site-header -->

<!-- 404 Content -->

<div class="container">

	<div id="primary">
		<div id="content" role="main">
				
				<article class="post error">
					<h1 class="404 title">Sorry, this page doesn't exist. 404 error!</h1>
					<div class="the-content"
						<p class="content">Maybe the url is incorrect or the page has moved... Sorry about that... As a consolation, here's Charlie.</p>
						<p class="content">You can try going back up and clicking a link on the menu or see below for a full list of pages on this website.</p>
						
						<img src="<?php bloginfo( 'template_url' ); ?>/img/404-image.jpg"/>
						<p class="wp-caption-text">Photo Credit: <a href="https://www.flickr.com/photos/ciaranmahoney/6087844508/in/set-72157627320395073">Ciaran Mahoney</a> via Flickr <a href="https://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a></p>
					
						<ul>
							<?php wp_list_pages('title_li='); ?>
						</ul>

					<div>
				</article>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

</div><!-- / container-->

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Footer
	/*-----------------------------------------------------------------------------------*/
?>

<footer class="site-footer" role="contentinfo">
	<div class="site-info container">
		<p>
			<a href="http://wordpress.org/" title="Built on WordPress">Powered by WordPress</a> | 
			<a href="http://ciaranmahoney.me/" title="CSM Theme by Ciaran Mahoney">CSM WordPress Theme by Ciaran Mahoney</a>
		</p>
		<p>
			&copy; Ciaran Mahoney 2009 - <?php echo date("Y");?> | All Rights Reserved | Opinions are my own
		</p>
	</div><!-- .site-info -->

	
	</div>
</footer><!-- #colophon .site-footer -->


<?php wp_footer(); ?>

</body>
</html>