<?php 

function media_theme_css_js(): void {
    // CSS Files
    wp_enqueue_style('bootstrap-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css', array(), '7.0.1', 'all');
    wp_enqueue_style('swiper-bundle-min-css', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css', array(), '12.0.1', 'all');
    wp_enqueue_style('lightgallery-bundle-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/css/lightgallery-bundle.min.css', array(), '2.8.3', 'all');

    wp_enqueue_style(
        'school-theme-style-css',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        array('lightgallery-bundle-min-css'),
        filemtime(get_stylesheet_directory() . '/assets/css/style.css'),
        'all'
    );

    // JS Files
    wp_enqueue_script('popper-min-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array('jquery'), '2.9.2', true);
    wp_enqueue_script('bootstrap-min-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('jquery'), '5.0.2', true);
    wp_enqueue_script('swiper-bundle-min-js', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', array('jquery'), '12.0.1', true);
    wp_enqueue_script('lightgallery-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/lightgallery.min.js', array('jquery'), '2.8.3', true);
    wp_enqueue_script('school-theme-script-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'media_theme_css_js');