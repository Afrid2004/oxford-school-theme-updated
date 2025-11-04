<?php

function exam_routine_post_type()
{
  register_post_type('exam_routine', array(
    'labels' => array(
      'name' => __('পরীক্ষার রুটিন', 'school-theme'),
      'singular_name' => 'Exam Routine Item',
      'add_new_item' => 'Add New Exam Routine Item',
      'edit_item' => 'Edit Exam Routine Item',
      'view_item' => 'View Exam Routine Item',
      'new_item' => 'New Exam Routine Item',
      'search_item' => 'Search Exam Routine Item',
      'not_found' => 'No Exam Routine Item',
      'all_items' => 'All Exam Routine Items'
    ),
    'public' => true,
    'menu_icon' => 'dashicons-media-spreadsheet',
    'has_archive' => true,
    'rewrite' => array('slug' => 'exam-routine'),
    'menu_position' => 36,
    'publicly_queryable' => true,
    'query_var' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'supports' => array('title', 'custom-fields'),
  ));
}
add_action('init', 'exam_routine_post_type');