<?php
function after_setup_theme()
{
    //for title
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('banner-image-size-856x460', 856, 460, true);
    add_image_size('news-and-event-image-420x250', 420, 250, true);
    add_image_size('teacher-photo-image-290x350', 290, 350, true);
}
add_action('after_setup_theme', 'after_setup_theme');
