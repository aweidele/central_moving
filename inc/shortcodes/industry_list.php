<?php
function sc_industry_list( $atts ) {
  $terms = get_terms([
      'taxonomy' => "industry",
      'hide_empty' => false,
  ]);

  $output = '        <ul class="main_content_terms">'."\n";
  foreach( $terms as $term ) {
    $output .= '          <li><a href="' . get_term_link($term->term_id, "industry") . '">'. $term->name . '</a></li>'."\n";
  }
  $output .= '        </ul>'."\n";

  return $output;
}

add_shortcode( 'industry_list', 'sc_industry_list' );
