<?php
add_action( 'init', 'custom_post_types', 0 );
function custom_post_types() {
  // Post Types
  include("post-type-case-studies.php");
  include("post-type-services.php");

  // Taxonomies
  include("taxonomy-industry.php");

  flush_rewrite_rules();
}
