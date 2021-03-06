<?php

// Define the version as a constant so we can easily replace it throughout the theme
define( 'CSM_VERSION', 0.4 );


/*-----------------------------------------------------------------------------------*/
/* Include options page
/*-----------------------------------------------------------------------------------*/
require_once('options-page.php');

/*-----------------------------------------------------------------------------------*/
/* Switch default core markup for search form, comment form, and comments
/* to output valid HTML5.
/*-----------------------------------------------------------------------------------*/
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

/*-----------------------------------------------------------------------------------*/
/* Add Rss to Head
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* register main menu
/*-----------------------------------------------------------------------------------*/
register_nav_menus(
	array(
		'primary'	=>	__( 'Primary Menu', 'csm' ),
	)
);

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function csm_scripts()  {
	wp_enqueue_style( 'csm-style', get_template_directory_uri() . '/stylesheets/csm.css', '10000', CSM_VERSION);
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
}
add_action( 'wp_enqueue_scripts', 'csm_scripts' );

/*-----------------------------------------------------------------------------------*/
/* Adding featured images
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/* Replaces the default excerpt link with a read more link
/*-----------------------------------------------------------------------------------*/
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> ... read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*-----------------------------------------------------------------------------------*/
/* Removing Junk from header
/*-----------------------------------------------------------------------------------*/
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'start_post_rel_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

/*-----------------------------------------------------------------------------------*/
/* Including Social Sharing Functionality
/*-----------------------------------------------------------------------------------*/
function social_sharing() {
	include('social-sharing.php');
}
add_action('after_post_content', 'social_sharing');