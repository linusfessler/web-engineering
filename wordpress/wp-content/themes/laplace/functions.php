<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");

/**
* Customizer additions.
*/
// Add customization for opening hours
function register_open_hours_customizer($wp_customize){

	// Create New Customization section
	$wp_customize->add_section( 'opening_hours' , array('title' =>  'Opening Hours', 'description' => 'Modify Opening Hours', ));

	$wp_customize->add_setting( 'monday_hours',  array('default' =>  'Closed', 'transport'	=> 'postMessage' ));

	$wp_customize->add_setting( 'tues_fri_hours',  array('default' =>  '8am-12am', 'transport'	=> 'postMessage', ));

	$wp_customize->add_setting( 'sat_sun_hours',  array('default' =>  '7am-1am', 'transport'	=> 'postMessage',));

	$wp_customize->add_setting( 'holiday_hours',  array('default' =>  '12pm-12am', 'transport'	=> 'postMessage',));

	$wp_customize->add_control( new WP_Customize_Control ($wp_customize, 'open_monday' , array(
		'label' =>  __( 'Monday Hours', 'WebEng' ) ,
		'section' => 'opening_hours' ,
		'settings' => 'monday_hours' 
		)));

	$wp_customize->add_control( new WP_Customize_Control ($wp_customize, 'open_tues_fri' , array(
		'label' =>  __( 'Tuesday Hours', 'WebEng' ) ,
		'section' => 'opening_hours' ,
		'settings' => 'tues_fri_hours' 
		)));

	$wp_customize->add_control( new WP_Customize_Control ($wp_customize, 'open_sat_sun' , array(
		'label' =>  __( 'Saturday/Sunday Hours', 'WebEng' ) ,
		'section' => 'opening_hours' ,
		'settings' => 'sat_sun_hours' 
		)));

	$wp_customize->add_control( new WP_Customize_Control ($wp_customize, 'open_holidays' , array(
		'label' =>  __( 'Holiday Hours', 'WebEng' ) ,
		'section' => 'opening_hours' ,
		'settings' => 'holiday_hours' 
		)));
}

add_action('customize_register', 'register_open_hours_customizer');

// Add customization for opening hours
function register_contact_customizer($wp_customize){

	// Create New Customization section
	$wp_customize->add_section( 'contact_details' , array('title' =>  'Contacts', 'description' => 'Modify Contact Details', ));

	$wp_customize->add_setting( 'contact_city',  array('default' =>  '4578 Zurich', 'transport'=> 'postMessage' ));

	$wp_customize->add_setting( 'contact_address',  array('default' =>  'Badenerstrasse 500', 'transport'=> 'postMessage', ));

	$wp_customize->add_setting( 'contact_phone',  array('default' =>  '(606) 144-0100', 'transport'	=> 'postMessage',));

	$wp_customize->add_setting( 'contact_email',  array('default' =>  'admin@laplace.com', 'transport'=> 'postMessage',));

	$wp_customize->add_control( new WP_Customize_Control ($wp_customize, 'contact_city' , array(
		'label' =>  __( 'City', 'WebEng' ) ,
		'section' => 'contact_details' ,
		'settings' => 'contact_city' 
		)));

	$wp_customize->add_control( new WP_Customize_Control ($wp_customize, 'contact_address' , array(
		'label' =>  __( 'Address', 'WebEng' ) ,
		'section' => 'contact_details' ,
		'settings' => 'contact_address' 
		)));

	$wp_customize->add_control( new WP_Customize_Control ($wp_customize, 'contact_phone' , array(
		'label' =>  __( 'Phone', 'WebEng' ) ,
		'section' => 'contact_details' ,
		'settings' => 'contact_phone' 
		)));

	$wp_customize->add_control( new WP_Customize_Control ($wp_customize, 'contact_email' , array(
		'label' =>  __( 'Email', 'WebEng' ) ,
		'section' => 'contact_details' ,
		'settings' => 'contact_email' 
		)));
}

add_action('customize_register', 'register_contact_customizer');

function register_basic_settings($wp_customize){

	// Create New Customization section
	$wp_customize->add_section( 'basic_settings' , array('title' =>  'Basic Settings', 'description' => 'Modify the basic settigns', ));

	$wp_customize->add_setting( 'background_color',  array('default' =>  '#443333', 'transport'=> 'postMessage'));
	$wp_customize->add_setting( 'website_title',  array('default' =>  'Zurich - LaPlace', 'transport'=> 'postMessage'));
	$wp_customize->add_setting('header_background',  array('default' =>  'images/header.jpg', 'transport'=> 'postMessage'));

	$wp_customize->add_control( new WP_Customize_Control ($wp_customize, 'background_color' , array(
		'label' =>  __( 'Background Color', 'WebEng' ) ,
		'section' => 'basic_settings' ,
		'settings' => 'background_color' 
		)));	

	$wp_customize->add_control( new WP_Customize_Control ($wp_customize, 'website_title' , array(
		'label' =>  __( 'Website title', 'WebEng' ) ,
		'section' => 'basic_settings' ,
		'settings' => 'website_title' 
		)));	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_background', array(
		'label' => 'Upload Header Background',
		'section' => 'basic_settings',
		'settings' => 'header_background',
	) ) );
}
add_action('customize_register', 'register_basic_settings');



require get_template_directory() . '/inc/customizer.php';
?>