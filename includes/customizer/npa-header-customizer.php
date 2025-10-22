<?php
$wp_customize->add_panel('npa_header_panel', array(
  'title'     => esc_html__('Header Area'),
  'priority'  => 10
));

require_once get_template_directory() . '/includes/customizer/header/npa-date-and-searchbar.php';
require_once get_template_directory() . '/includes/customizer/header/npa-main-logo-and-postion.php';
require_once get_template_directory() . '/includes/customizer/header/npa-menubar-background-and-text-color.php';
require_once get_template_directory() . '/includes/customizer/header/npa-google-analytics-code.php';
require_once get_template_directory() . '/includes/customizer/header/npa_meta_keywords.php';
