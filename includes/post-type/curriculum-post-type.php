<?php

function curriculum_post_type()
{
  register_post_type('curriculum', array(
    'labels' => array(
      'name' => __('পাঠ্যক্রম', 'school-theme'),
      'singular_name' => 'Curriculum Item',
      'add_new_item' => 'Add New Curriculum Item',
      'edit_item' => 'Edit Curriculum Item',
      'view_item' => 'View Curriculum Item',
      'new_item' => 'New Curriculum Item',
      'search_item' => 'Search Curriculum Item',
      'not_found' => 'No Curriculum Item',
      'all_items' => 'All Curriculum Items'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-book-alt',
    'has_archive' => true,
    'rewrite' => array('slug' => 'curriculum'),
    'menu_position' => 37,
    'publicly_queryable' => true,
    'query_var' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
  ));
}
add_action('init', 'curriculum_post_type');