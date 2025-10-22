<?php

function founder_story_post_type()
{
    register_post_type('founder_story', array(
        'labels'                => array(
            'name'              => __('প্রতিষ্ঠাতা', 'school-theme'),

            'singular_name'         => 'founder Item',
            'add_new_item'          => 'Add New founder Item',
            'edit_item'             => 'Edit founder Item',
            'new_item'              => 'New founder Item',
            'view_item'             => 'View founder Item',
            'search_items'          => 'Search founder Items',
            'not_found'             => 'No founder Items found',
            'not_found_in_trash'    => 'No founder Items found in Trash',
            'all_items'             => 'All founder Items',


        ),
        'public'                => true,
        'menu_icon'             => 'dashicons-image-filter',
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'founder-story'),
        'menu_position'         => 32,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'show_ui'               => true,
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'supports'              => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'founder_story_post_type');
