<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );

}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );



function prefix_custom_scripts() {

  $theme   = wp_get_theme( 'OceanWP' );
  $version = $theme->get( 'Version' );

  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom-js.js', array( 'jquery' ), $version, true );
  // wp_enqueue_script('custom-js-1', get_stylesheet_directory_uri() . '/js/custom-js-1.js', array( 'jquery' ), $version, true );

}
add_action( 'wp_enqueue_scripts', 'prefix_custom_scripts' );



/**
 * Change the Continue Reading text
 */
function myprefix_post_readmore_link_text() {
  return "Lire l'article";
}
add_filter( 'ocean_post_readmore_link_text', 'myprefix_post_readmore_link_text' );



/** Remove admin bar execpt for administrators **/

/*Hide admin bar for certain roles*/

if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}

add_filter('show_admin_bar', '__return_false');


/** Security **/

/* Remove the display of wordpress version */

remove_action("wp_head", "wp_generator");

/* Désactivate file editor in the wordpress */

define('DISALLOW_FILE_EDIT',true);


/* Ajouter un extrait aux pages */

add_action( 'admin_init', create_function('', "return add_post_type_support( 'page', 'excerpt' );") );

/*  Voir l'ID des pages */

function GkId($column) {
  $column['identifiants'] = 'Identifiants';
  return $column;
}
add_filter('manage_posts_columns', 'GkId', 5, 2);
add_filter('manage_pages_columns', 'GkId', 5, 2);

function GkIds($column,$ID) {
  if( $column == 'identifiants' ) {
    echo '<strong>'.$ID.'</strong>';
  }
}

add_action('manage_posts_custom_column', 'GkIds', 5, 2);
add_action('manage_pages_custom_column', 'GkIds', 5, 2);
