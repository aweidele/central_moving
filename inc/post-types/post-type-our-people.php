<?php
  // Client Post Type
  $labels = array(
    'name'                  => _x( 'Our People', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Staff', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Our People', 'text_domain' ),
    'name_admin_bar'        => __( 'Our People', 'text_domain' ),
    'archives'              => __( 'All Staff', 'text_domain' ),
    'attributes'            => __( '', 'text_domain' ),
    'parent_item_colon'     => __( '', 'text_domain' ),
    'all_items'             => __( 'All Staff', 'text_domain' ),
    'add_new_item'          => __( 'Add New Staff', 'text_domain' ),
    'add_new'               => __( 'Add New Staff', 'text_domain' ),
    'new_item'              => __( 'New Staff', 'text_domain' ),
    'edit_item'             => __( 'Edit Staff', 'text_domain' ),
    'update_item'           => __( 'Update Staff', 'text_domain' ),
    'view_item'             => __( 'View Staff', 'text_domain' ),
    'view_items'            => __( 'View Staff', 'text_domain' ),
    'search_items'          => __( 'Search Case Staff', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Our People', 'text_domain' ),
    'description'           => __( 'Our People', 'text_domain' ),
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => 'dashicons-client',
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'thumbnail', 'editor', 'revisions', 'page-attributes' ),
    'has_archive' => true,
    // 'rewrite' => array(
    //   'slug' => 'client'),
  );
  register_post_type( 'our-people', $args );
