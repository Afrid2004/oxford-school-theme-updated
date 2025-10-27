<?php

  function achieve_and_success_post_type(){

    register_post_type('achieve_and_success',array(
      
      'labels'              => array(
        'name'              => __('অর্জন ও সাফল্য', 'school-theme'),
        'singular_name'     => 'Achieve and Success Item',
        'add_new_item'      => 'Add New Achieve and Success Item',
        'edit_item'         => 'Edit Achieve and Success Item',
        'new_item'          => 'New Edit Achieve and Success Item',
        'view_item'         => 'View Achieve and Success Item',
        'search_item'       => 'Search Achieve and Success Item',
        'not_found'         => 'No Achieve and Success Item Found',
        'all_items'         => 'All Achieve and Success Item'
      ),
      'public'              => true,
      'menu_icon'           => 'dashicons-awards',
      'has_archive'         => true,
      'rewrite'             => array('slug' => 'founder-story'),
      'menu_position'       => 33,
      'publicly_queryable'  => true,
      'query_var'           => true,
      'show_ui'             => true,
      'capability_type'     => 'post',
      'hierarchical'        => true,
      'supports'            => array('title', 'custom-fields'),

    ));

  }
  add_action('init', 'achieve_and_success_post_type');