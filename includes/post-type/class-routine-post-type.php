<?php

function class_routine_post_type()
{
  register_post_type('class_routine', array(
    'labels' => array(
      'name' => __('ক্লাস রুটিন', 'school-theme'),
      'singular_name' => 'Class Routine Item',
      'add_new_item' => 'Add New Class Routine Item',
      'edit_item' => 'Edit Class Routine Item',
      'view_item' => 'View Class Routine Item',
      'new_item' => 'New Class Routine Item',
      'search_item' => 'Search Class Routine Item',
      'not_found' => 'No Class Routine Item',
      'all_items' => 'All Class Routine Items'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-calendar-alt',
    'has_archive' => true,
    'rewrite' => array('slug' => 'class-routine'),
    'menu_position' => 35,
    'publicly_queryable' => true,
    'query_var' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'supports' => array('title', 'custom-fields'),
  ));
}
add_action('init', 'class_routine_post_type');