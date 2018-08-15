<?php
  // Industry Taxonomy
  register_taxonomy(
  'industry',
  'case-study',
  array(
      'labels' => array(
          'name'              => _x( 'Industries' , 'taxonomy general name' ),
          'singular_name'     => _x( 'Industry' , 'taxonomy singular name'),
          'add_new_item' => 'Add Industry',
          'new_item_name' => "New Industry"
      ),
      'show_ui' => true,
      'show_admin_column' => true,
      'show_tagcloud' => false,
      'hierarchical' => true,
      'support' => array('tags'),
      'rewrite' => array(
        'slug' => 'case-study/industry'),
  )
);
