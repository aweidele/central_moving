<?php
  /* https://core.trac.wordpress.org/browser/tags/4.9.8/src//wp-includes/class-walker-nav-menu.php#L0 */
  class CM_Walker extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = array() ) {
            if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
                    $t = '  ';
                    $n = '';
            } else {
                    $t = "\t";
                    $n = "\n";
            }
            $indent = str_repeat( $t, $depth );

            // Default class.
            $classes = array( 'sub-menu' );

            /**
             * Filters the CSS class(es) applied to a menu list element.
             *
             * @since 4.8.0
             *
             * @param array    $classes The CSS classes that are applied to the menu `<ul>` element.
             * @param stdClass $args    An object of `wp_nav_menu()` arguments.
             * @param int      $depth   Depth of menu item. Used for padding.
             */
            $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

            $output .= '<button class="main_nav_expand">Expand</button>';
            $output .= "{$n}{$indent}<ul$class_names>{$n}";
    }

  }
