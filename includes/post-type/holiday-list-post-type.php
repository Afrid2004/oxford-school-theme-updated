<?php

function holiday_list_post_type()
{
  register_post_type('holiday_list', array(
    'labels' => array(
      'name' => __('ছুটির তালিকা', 'school-theme'),
      'singular_name' => 'Holiday List Item',
      'add_new_item' => 'Add New Holiday List Item',
      'edit_item' => 'Edit Holiday List Item',
      'view_item' => 'View Holiday List Item',
      'new_item' => 'New Holiday List Item',
      'search_item' => 'Search Holiday List Item',
      'not_found' => 'No Holiday List Item',
      'all_items' => 'All Holiday List Items'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-list-view',
    'has_archive' => true,
    'rewrite' => array('slug' => 'holiday-list'),
    'menu_position' => 38,
    'publicly_queryable' => true,
    'query_var' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'supports' => array('title', 'custom-fields'),
  ));
}
add_action('init', 'holiday_list_post_type');