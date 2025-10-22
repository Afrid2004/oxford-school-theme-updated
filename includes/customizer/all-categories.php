<?php
add_action('customize_register', 'rjs_customize_register');

function rjs_customize_register($wp_customize)
{
  // সব ক্যাটাগরি লিস্ট একবার নিন
  $rjs_categories_full_list = get_categories(array('orderby' => 'name'));

  // খালি হলে রিটার্ন
  if (empty($rjs_categories_full_list)) {
    return;
  }

  // অপশন লিস্ট বানান
  $rjs_choices_list = [];
  foreach ($rjs_categories_full_list as $rjs_single_cat) {
    $rjs_choices_list[$rjs_single_cat->term_id] = esc_html($rjs_single_cat->name);
  }

  // সেকশন যোগ করুন
  $wp_customize->add_section('npa_acd', array(
    'title'    => __('All Category names', 'school-theme'),
    'priority' => 50,
  ));

  // আপনার extra require ফাইল (যদি দরকার থাকে)
  // require get_template_directory() . '/includes/customizer/npa_all_categories_bg_color/npa-cat-serial_no.php';

  // লুপ চালান (1-37 পর্যন্ত)
  for ($catId = 1; $catId < 38; $catId++) {
    $wp_customize->add_setting('rjs_category_dropdown_' . $catId, array(
      'type'       => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default'    => 1,
    ));

    $wp_customize->add_control('rjs_category_dropdown_' . $catId, array(
      'type'    => 'select',
      'section' => 'npa_acd',
      'label'   => sprintf(__('%d No. Category', 'school-theme'), $catId),
      'choices' => $rjs_choices_list,
    ));
  }
}
