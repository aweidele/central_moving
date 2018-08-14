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


// Register Menu
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
  register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
	register_nav_menu( 'footer-utility-menu', __( 'Footer Utility Menu' ) );
}

/* https://core.trac.wordpress.org/browser/tags/4.9.8/src//wp-includes/class-walker-nav-menu.php#L0 */
class CR_Walker extends Walker_Nav_Menu {

  // Displays start of an element. E.g '<li> Item Name'
  // @see Walker::start_el()
  function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
    $object = $item->object;
    $type = $item->type;
    $title = $item->title;
    $description = $item->description;
    $permalink = $item->url;
    $output .= "<li class='" .  implode(" ", $item->classes) . "'>";

    //Add SPAN if no Permalink
    if( $permalink && $permalink != '#' ) {
      $output .= '<a href="' . $permalink . '">';
    } else {
      $output .= '<span>';
    }

    $output .= $title;
    if( $description != '' && $depth == 0 ) {
      $output .= '<small class="description">' . $description . '</small>';
    }
    if( $permalink && $permalink != '#' ) {
      $output .= '</a>';
    } else {
      $output .= '</span>';
    }
  }
}

// Add Widget Areas
function cm_widgets_init() {

 register_sidebar( array(
	 'name'          => 'Footer Column 1',
	 'id'            => 'footer_column_1',
	 'before_widget' => '<div class="block">',
	 'after_widget'  => '</div>',
	 'before_title'  => '',
	 'after_title'   => '',
 ) );

 register_sidebar( array(
	'name'          => 'Footer Column 2',
	'id'            => 'footer_column_2',
	'before_widget' => '<div class="block">',
	'after_widget'  => '</div>',
	'before_title'  => '',
	'after_title'   => '',
 ) );

}
add_action( 'widgets_init', 'cm_widgets_init' );

// Add Options Page
$args = [
	'page_title' => 'Site Options'
];
acf_add_options_page($args);


// Blocks
function cm_blocks($blocks) {
  foreach($blocks as $block) {
    include("blocks/block_".$block["acf_fc_layout"].".php");
  }
}
