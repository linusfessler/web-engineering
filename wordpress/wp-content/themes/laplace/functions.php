<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");

/**
* Customizer additions.
*/
require get_template_directory() . '/inc/customizer.php';
?>