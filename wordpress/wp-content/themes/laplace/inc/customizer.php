<?php
/**
* Create Logo Setting and Upload Control
*/
function customize_header_picture($wp_customize) {
	// add a setting for the site logo
	$wp_customize->add_setting('header_picture');
	
	// Add a control to upload the logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_picture',
	array(
		'label' => 'Upload Header Picture',
		'section' => 'title_tagline',
		'settings' => 'header_picture',
	) ) );
}
add_action('customize_register', 'customize_header_picture');

function laplace_customize_preview_js() {
	wp_enqueue_script( 'laplace-customize-preview', get_theme_file_uri( '/assets/js/theme-customizer.js' ), array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'laplace_customize_preview_js' );
?>