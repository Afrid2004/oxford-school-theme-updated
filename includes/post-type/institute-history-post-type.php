<?php

function institute_history_post_type()
{
    register_post_type('institute_history', array(
        'labels'                => array(
            'name'              => __('প্রতিষ্ঠানের পরিচিতি', 'school-theme'),
        ),
        'public'                => true,
        'menu_icon'             => 'dashicons-backup',
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'institute-history'),
        'menu_position'         => 30,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'show_ui'               => true,
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'supports'              => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'institute_history_post_type');
