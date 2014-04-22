<?php 

function eso_googlefonts_styles() {
    // Enqueue the font stylesheets like this:
    wp_enqueue_style( 'googlefonts-open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans' );
}  
add_action( 'wp_enqueue_scripts', 'eso_googlefonts_styles' );


// Enable thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(520, 200, true); // Normal post thumbnails


// Prise en charge recherche HTML5
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );

// Enable widgetable sidebar
// You may need to tweak your theme files, more info here - http://codex.wordpress.org/Widgetizing_Themes
if ( function_exists('register_sidebar') )
  register_sidebar(array(
  'before_widget' => '<aside>',
  'after_widget' => '</aside>',
  'before_title' => '<h1>',
  'after_title' => '</h1>',
));
// On vire l'admin bar
add_filter('show_admin_bar', '__return_false');

// Add custom menus
register_nav_menus( array(
  'primary' => __( 'Primary Navigation'),
) );


// Set a maximum width for Oembedded objects
if ( ! isset( $content_width ) )
$content_width = 600;

// Create custom sizes
// This is then pulled through to your theme useing the_post_thumbnail('custombig');
if ( function_exists( 'add_image_size' ) ) {
  add_image_size('customsmall', 300, 200, true); //narrow column
  add_image_size('custombig', 400, 500, true); //wide column
  add_image_size('sticky', 600, 300, true); //sticky thumb
}

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>