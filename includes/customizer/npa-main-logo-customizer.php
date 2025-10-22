<?php

/** 
 * ===============================
 * Main Logo Position  Customization start
 * ==============================
 */
$wp_customize->add_section('
_option', array(
  'title' => __('Main Logo Position Option', 'school-theme'),
  'Description' => __('If you are intersted to change menu position, you can do here', 'school-theme'),
));
$wp_customize->add_setting('npa_main_logo_position', array(
  'default' => 'npa_left_logo',
  'transport' => 'postMessage'
));
$wp_customize->add_control('npa_main_logo_position', array(
  'label'         => 'Main Menu Position',
  'description'   => 'Select your menu position',
  'settings'       => 'npa_main_logo_position',
  'section'       => 'npa_main_logo_option',
  'type'          => 'radio',
  'choices'       => array(
    'npa_left_logo'     => 'Left Menu',
    'npa_right_logo'    => 'Right Menu',
  ),

));
