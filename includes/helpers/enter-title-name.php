<?php
function wpb_change_title_text($title)
{
    $screen = get_current_screen();
    if ('teachers_information' == $screen->post_type) {
        $title = 'শিক্ষকের নাম লিখুন';
    }
    return $title;
}
add_filter('enter_title_here', 'wpb_change_title_text');
