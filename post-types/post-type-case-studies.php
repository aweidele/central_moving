<?php
  // Client Post Type
  $labels = array(
    'name'                  => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Case Study', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Case Studies', 'text_domain' ),
    'name_admin_bar'        => __( 'Case Studies', 'text_domain' ),
    'archives'              => __( 'All Case Studies', 'text_domain' ),
    'attributes'            => __( '', 'text_domain' ),
    'parent_item_colon'     => __( '', 'text_domain' ),
    'all_items'             => __( 'All Case Studies', 'text_domain' ),
    'add_new_item'          => __( 'Add New Case Study', 'text_domain' ),
    'add_new'               => __( 'Add New Case Study', 'text_domain' ),
    'new_item'              => __( 'New Case Study', 'text_domain' ),
    'edit_item'             => __( 'Edit Case Study', 'text_domain' ),
    'update_item'           => __( 'Update Case Study', 'text_domain' ),
    'view_item'             => __( 'View Case Study', 'text_domain' ),
    'view_items'            => __( 'View Case Study', 'text_domain' ),
    'search_items'          => __( 'Search Case Studies', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Case Studies', 'text_domain' ),
    'description'           => __( 'Case Studies', 'text_domain' ),
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => 'dashicons-client',
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title'),
    'has_archive' => true,
    // 'rewrite' => array(
    //   'slug' => 'client'),
  );
  register_post_type( 'case-study', $args );
