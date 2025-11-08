<?php

function megazine_post_type()
{
  register_post_type('megazine', array(
    'labels' => array(
      'name' => __('স্কুল ম্যাগাজিন', 'school-theme'),
      'singular_name' => 'Megazine Item',
      'add_new_item' => 'Add New Megazine Item',
      'edit_item' => 'Edit Megazine Item',
      'view_item' => 'View Megazine Item',
      'new_item' => 'New Megazine Item',
      'search_item' => 'Search Megazine Item',
      'not_found' => 'No Megazine Item',
      'all_items' => 'All Megazine Items'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-welcome-write-blog',
    'has_archive' => true,
    'rewrite' => array('slug' => 'megazine'),
    'menu_position' => 37,
    'publicly_queryable' => true,
    'query_var' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'supports' => array('title','editor','thumbnail', 'custom-fields'),
  ));
}
add_action('init', 'megazine_post_type');