<?php

function committee_post_type()
{
    register_post_type('committee', array(
        'labels'                => array(
            'name'              => __('ম্যানেজিং কমিটি', 'school-theme'),
            'singular_name'         => 'committee Item',
            'add_new_item'          => 'Add New committee Item',
            'edit_item'             => 'Edit committee Item',
            'new_item'              => 'New committee Item',
            'view_item'             => 'View committee Item',
            'search_items'          => 'Search committee Items',
            'not_found'             => 'No committee Items found',
            'not_found_in_trash'    => 'No committee Items found in Trash',
            'all_items'             => 'All committee Items',
        ),
        'public'                => true,
        'menu_icon'             => 'dashicons-groups',
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'committee'),
        'menu_position'         => 25,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'show_ui'               => true,
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'supports'              => array('title', 'thumbnail'),
    ));
}
add_action('init', 'committee_post_type');
