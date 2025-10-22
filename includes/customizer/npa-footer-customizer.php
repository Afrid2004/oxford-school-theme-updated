<?php

$wp_customize->add_panel('npa_footer_panel', array(
  'title'     => esc_html__('Footer Area', 'school-theme'),
  'priority'  => 11,
));
require get_template_directory() . '/includes/customizer/footer/npa-footer-background.php';
require get_template_directory() . '/includes/customizer/footer/npa-footer-google-map.php';
