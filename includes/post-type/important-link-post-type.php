<?php

function important_link_post_type()
{
    register_post_type('important_link', array(
        'labels'                => array(
            'name'              => __('গুরুত্বপূর্ণ লিংক', 'school-theme'),
            'singular_name'         => 'Important Link Item',
            'add_new_item'          => 'Add New Important Link Item',
            'edit_item'             => 'Edit Important Link Item',
            'new_item'              => 'New Important Link Item',
            'view_item'             => 'View Important Link Item',
            'search_items'          => 'Search Important Link Items',
            'not_found'             => 'No Important Link Items found',
            'not_found_in_trash'    => 'No Important Link Items found in Trash',
            'all_items'             => 'All Important Link Items',
            'featured_image'        =>  'Use Featured Image',
            'set_featured_image'    =>  'Image Size width: 856px,  height: 460px',


        ),
        'public'                => true,
        'menu_icon'             => 'dashicons-admin-links',
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'important-link'),
        'menu_position'         => 28,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'show_ui'               => true,
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'supports'              => array('title', 'customfield'),
    ));
}
add_action('init', 'important_link_post_type');
