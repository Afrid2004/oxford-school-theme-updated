<?php

function anual_report_post_type()
{
  register_post_type('anual_report', array(
    'labels' => array(
      'name' => __('বার্ষিক প্রতিবেদন', 'school-theme'),
      'singular_name' => 'Anual Report Item',
      'add_new_item' => 'Add New Anual Report Item',
      'edit_item' => 'Edit Anual Report Item',
      'view_item' => 'View Anual Report Item',
      'new_item' => 'New Anual Report Item',
      'search_item' => 'Search Anual Report Item',
      'not_found' => 'No Anual Report Item',
      'all_items' => 'All Anual Report Items'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-media-text',
    'has_archive' => true,
    'rewrite' => array('slug' => 'anual-report'),
    'menu_position' => 37,
    'publicly_queryable' => true,
    'query_var' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'supports' => array('title','editor','thumbnail', 'custom-fields'),
  ));
}
add_action('init', 'anual_report_post_type');