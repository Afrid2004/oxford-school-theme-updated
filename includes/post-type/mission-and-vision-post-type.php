<?php

  function mission_and_vision_post_type(){
    register_post_type('mission_and_vision', array(
      'labels'              => array(
        'name'              => __('লক্ষ্য ও উদ্দেশ্য', 'school-theme'),
        'singular_name'     => 'Mission and vision Item',
        'add_new_item'      => 'Add New Mission and vision Item',
        'edit_item'         => 'Edit Mission and vision Item',
        'view_item'         => 'View Mission and vision Item',
        'new_item'          => 'New Mission and vision Item',
        'search_item'       => 'Search Mission and vision Item',
        'not_found'         => 'No Mission and vision Item',
        'all_items'         => 'All Mission and vision Items'
      ),
      'public'              => true,
      'menu_icon'           => 'dashicons-chart-area',
      'has_archive'         => true,
      'rewrite'             => array('slug' => 'mission-and-vision'),
      'menu_position'       => 34,
      'publicly_queryable'  => true,
      'query_var'           => true,
      'show_ui'             => true,
      'capability_type'     => 'post',
      'hierarchical'        => true,
      'supports'            => array('title', 'custom-fields'),
    ));
  }
  add_action('init', 'mission_and_vision_post_type');