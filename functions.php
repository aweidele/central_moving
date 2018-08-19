<?php
// Enqueue Scripts and Styles
function enqueue_styles() {

  wp_enqueue_style( 'main_style',
      get_stylesheet_directory_uri() . '/css/main.css'
  );

	// wp_enqueue_script( 'main_script',
	// 	get_stylesheet_directory_uri() . '/js/site.js',
	// 	array('jquery'),
	// 	wp_get_theme()->get('Version'),
	// 	true
	// );

  wp_enqueue_script( 'main_script',
    get_stylesheet_directory_uri() . '/js/scripts.js',
    array('jquery'),
    wp_get_theme()->get('Version'),
    true
  );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

// Image Sizes
add_image_size( 'hero-image', 1440, 537, true );
add_image_size( 'hero-image-sm', 1080, 403, true );

add_image_size( 'grid-image-368', 368, 999999, false );
add_image_size( 'grid-image-443', 443, 999999, false );
add_image_size( 'grid-image-500', 500, 999999, false );
add_image_size( 'grid-image-546', 546, 999999, false );


// Register Menu
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
  register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
	register_nav_menu( 'footer-utility-menu', __( 'Footer Utility Menu' ) );
}

// Custom Menu Walker
require_once("inc/menu/CM_Walker.php");

// Post Types
require_once("inc/post-types/post-types.php");

// Add Options Page
$args = [
	'page_title' => 'Site Options'
];
acf_add_options_page($args);


// Blocks
function cm_blocks($blocks) {

  foreach($blocks as $block) {
    include("blocks/block-".$block["acf_fc_layout"].".php");
  }
}

// Add Widget Areas
// function cm_widgets_init() {
//
//  register_sidebar( array(
// 	 'name'          => 'Footer Column 1',
// 	 'id'            => 'footer_column_1',
// 	 'before_widget' => '<div class="block">',
// 	 'after_widget'  => '</div>',
// 	 'before_title'  => '',
// 	 'after_title'   => '',
//  ) );
//
//  register_sidebar( array(
// 	'name'          => 'Footer Column 2',
// 	'id'            => 'footer_column_2',
// 	'before_widget' => '<div class="block">',
// 	'after_widget'  => '</div>',
// 	'before_title'  => '',
// 	'after_title'   => '',
//  ) );
//
// }
// add_action( 'widgets_init', 'cm_widgets_init' );
