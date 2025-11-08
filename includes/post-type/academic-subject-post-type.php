<?php

function academic_subject_post_type()
{
  register_post_type('academic_subject', array(
    'labels' => array(
      'name' => __('একাডেমিক সাবজেক্ট', 'school-theme'),
      'singular_name' => 'Academic Subject Item',
      'add_new_item' => 'Add New Academic Subject Item',
      'edit_item' => 'Edit Academic Subject Item',
      'view_item' => 'View Academic Subject Item',
      'new_item' => 'New Academic Subject Item',
      'search_item' => 'Search Academic Subject Item',
      'not_found' => 'No Academic Subject Item',
      'all_items' => 'All Academic Subject Items'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-book-alt',
    'has_archive' => true,
    'rewrite' => array('slug' => 'academic-subject'),
    'menu_position' => 36,
    'publicly_queryable' => true,
    'query_var' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'supports' => array('title', 'editor'),
  ));
}
add_action('init', 'academic_subject_post_type');