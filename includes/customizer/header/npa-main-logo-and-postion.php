<?php
$wp_customize->add_section('npa_header_area', array(
    'title'         =>  __('Main Logo, School Name and other', 'school-theme'),
    'description'   => 'If you want to update main logo, you can do it here.',
    'panel'         => 'npa_header_panel',
));

/**
 * ==========================
 * Main Logo upload 
 * ==========================
 */

$wp_customize->add_setting('npa-main-logo', array(
    'default' => get_bloginfo('template_directory') . '/assets/images/main-logo.png',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'npa-main-logo', array(
    'label'        => __('Main Logo', 'school-theme'),
    'settings'     => 'npa-main-logo',
    'section'      => 'npa_header_area',
)));


/**
 * ==========================
 * Schools's Name
 * ==========================
 */
$wp_customize->add_setting('name-of-school', array(
    'default'       => 'জিয়া ভাই উচ্চ বিদ্যালয়',
    'transport'     => 'refresh',
));
$wp_customize->add_control('name-of-school', array(
    'label'     => __('স্কুলের নাম', 'school-theme'),
    'settings'  => 'name-of-school',
    'section'   => 'npa_header_area',
    'type'      => 'text'
));


/**
 * ==========================
 * Establish
 * ==========================
 */
$wp_customize->add_setting('establish_and_eiin', array(
    'default'       => 'স্থাপিত: ২০০০ EIIN Number: 0000000',
    'transport'     => 'refresh',
));
$wp_customize->add_control('establish_and_eiin', array(
    'label'     => __('স্থাপিত ও EIIN নাম্বার', 'school-theme'),
    'settings'  => 'establish_and_eiin',
    'section'   => 'npa_header_area',
    'type'      => 'text'
));


/**
 * ==========================
 * Address
 * ==========================
 */
$wp_customize->add_setting('address', array(
    'default'       => 'ঢাকা',
    'transport'     => 'refresh',
));
$wp_customize->add_control('address', array(
    'label'     => __('ঠিকানা', 'school-theme'),
    'settings'  => 'address',
    'section'   => 'npa_header_area',
    'type'      => 'text'
));

/**
 * ==========================
 * Phone
 * ==========================
 */
$wp_customize->add_setting('phone', array(
    'default'       => '০১৯১৫৩৪৪৪১৮',
    'transport'     => 'refresh',
));
$wp_customize->add_control('phone', array(
    'label'     => __('ফোন নাম্বার', 'school-theme'),
    'settings'  => 'phone',
    'section'   => 'npa_header_area',
    'type'      => 'text'
));

/**
 * ==========================
 * Email
 * ==========================
 */
$wp_customize->add_setting('email', array(
    'default'       => 'faroque.computer@gmail.com',
    'transport'     => 'refresh',
));
$wp_customize->add_control('email', array(
    'label'     => __('ইমেইল', 'school-theme'),
    'settings'  => 'email',
    'section'   => 'npa_header_area',
    'type'      => 'email'
));
