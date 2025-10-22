<?php
add_action('customize_register', 'npa_customize_register');

function npa_customize_register($wp_customize)
{
    // For Header
    require_once get_template_directory() . '/includes/customizer/npa-header-customizer.php'; // priority 10

    // For Footer
    require get_template_directory() . '/includes/customizer/npa-footer-customizer.php'; // priority 20

    // For Social Media Links
    require get_template_directory() . '/includes/customizer/npa-social-media-links.php'; // priority 40
}
