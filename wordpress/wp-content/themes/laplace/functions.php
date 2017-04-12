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

add_theme_support( 'post-thumbnails' );

/***** custom type dish ******/

if( ! function_exists( 'create_dish_post_type' ) ):
	function create_dish_post_type() {
		$labels = array(
			'name' => __( 'Dish' ),
			'singular_name' => __( 'Dish' ),
			'menu_name' => __( 'Dishes' ),
			'add_new' => __( 'Add dish' ),
			'all_items' => __( 'All dishes' ),
			'add_new_item' => __( 'Add dish' ),
			'edit_item' => __( 'Edit dish' ),
			'new_item' => __( 'New dish' ),
			'view_item' => __( 'View dish' ),
			'search_items' => __( 'Search dishes' ),
			'not_found' => __( 'No dishes found' ),
			'not_found_in_trash' => __( 'No dishes found in trash' ),
			'parent_item_colon' => __( 'Parent dish' )
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_in_nav_menus' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('thumbnail'),
			'menu_position' => 5,
			'register_meta_box_cb' => 'add_dish_post_type_metabox'
		);
		register_post_type( 'dish', $args );
	}
	add_action( 'init', 'create_dish_post_type' );
endif;

function add_dish_post_type_metabox() {
	add_meta_box( 'dish_metabox', 'Dish Data', 'dish_metabox', 'dish', 'normal' );
}

function dish_metabox() {
	global $post;
	$custom = get_post_custom($post->ID);
	$type = $custom['dish_type'][0];
	$title = $custom['dish_title'][0];
	$description = $custom['dish_description'][0];?>
	<div class="dish">
		<p> <label>Type<br> <input type="text" name="type" size="50" list="types"
			value="<?php echo $type; ?>"> </label>
		</p>
		<datalist id="types">
			<option value="Appetizers">
			<option value="Fresh Pasta">
			<option value="Meat - Fish">
			<option value="Dessert">
		</datalist>
		
		<p> <label>Title<br> <input type="text" name="title" size="50"
			value="<?php echo $title; ?>"> </label>
		</p>
		<p> <label>Description<br> <input type="text" name="description" size="50"
			value="<?php echo $description; ?>"> </label>
		</p>
	</div>
<?php }

function dish_post_save_meta( $post_id, $post ) {
	// is the user allowed to edit the post or page?
	if( ! current_user_can( 'edit_post', $post->ID )){
		return $post->ID;
	}
	$dish_post_meta['dish_type'] = $_POST['type'];
	$dish_post_meta['dish_title'] = $_POST['title'];
	$dish_post_meta['dish_description'] = $_POST['description'];
	// add values as custom fields
	foreach( $dish_post_meta as $key => $value ) {
		if( get_post_meta( $post->ID, $key, FALSE ) ) {
			// if the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else {
			// if the custom field doesn't have a value
			add_post_meta( $post->ID, $key, $value );
		}
		if( !$value ) {
			// delete if blank
			delete_post_meta( $post->ID, $key );
		}
	}
}

add_action('save_post', 'dish_post_save_meta', 1, 2); // save the custom fields

/***** custom type event ******/

if( ! function_exists( 'create_event_post_type' ) ):
	function create_event_post_type() {
		$labels = array(
			'name' => __( 'Event' ),
			'singular_name' => __( 'Event' ),
			'menu_name' => __( 'Events' ),
			'add_new' => __( 'Add event' ),
			'all_items' => __( 'All events' ),
			'add_new_item' => __( 'Add event' ),
			'edit_item' => __( 'Edit event' ),
			'new_item' => __( 'New event' ),
			'view_item' => __( 'View event' ),
			'search_items' => __( 'Search events' ),
			'not_found' => __( 'No events found' ),
			'not_found_in_trash' => __( 'No events found in trash' ),
			'parent_item_colon' => __( 'Parent event' )
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_in_nav_menus' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array('thumbnail'),
			'menu_position' => 5,
			'register_meta_box_cb' => 'add_event_post_type_metabox'
		);
		register_post_type( 'event', $args );
	}
	add_action( 'init', 'create_event_post_type' );
endif;

function add_event_post_type_metabox() {
	add_meta_box( 'event_metabox', 'Event Data', 'event_metabox', 'event', 'normal' );
}

function event_metabox() {
	global $post;
	$custom = get_post_custom($post->ID);
	$title = $custom['event_title'][0];
	$date = $custom['event_date'][0];
	$start_time = $custom['event_start_time'][0];
	$end_time = $custom['event_end_time'][0];
	$description = $custom['event_description'][0];?>
	<div class="dish">		
		<p> <label>Title<br> <input type="text" name="title" size="50"
			value="<?php echo $title; ?>"> </label>
		</p>
		<p> <label>Start Time<br> <input type="date" name="date" size="50"
			value="<?php echo $date; ?>"> </label>
		</p>
		<p> <label>Start Time<br> <input type="time" name="start_time" size="50"
			value="<?php echo $start_time; ?>"> </label>
		</p>
		<p> <label>End Time<br> <input type="time" name="end_time" size="50"
			value="<?php echo $end_time; ?>"> </label>
		</p>
		<p> <label>Description<br> <input type="text" name="description" size="50"
			value="<?php echo $description; ?>"> </label>
		</p>
	</div>
<?php }

function event_post_save_meta( $post_id, $post ) {
	// is the user allowed to edit the post or page?
	if( ! current_user_can( 'edit_post', $post->ID )){
		return $post->ID;
	}
	$event_post_meta['event_title'] = $_POST['title'];
	$event_post_meta['event_date'] = $_POST['date'];
	$event_post_meta['event_start_time'] = $_POST['start_time'];
	$event_post_meta['event_end_time'] = $_POST['end_time'];
	$event_post_meta['event_description'] = $_POST['description'];
	// add values as custom fields
	foreach( $event_post_meta as $key => $value ) {
		if( get_post_meta( $post->ID, $key, FALSE ) ) {
			// if the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else {
			// if the custom field doesn't have a value
			add_post_meta( $post->ID, $key, $value );
		}
		if( !$value ) {
			// delete if blank
			delete_post_meta( $post->ID, $key );
		}
	}
}

add_action('save_post', 'event_post_save_meta', 1, 2); // save the custom fields

/*add_action('customize_register', 'register_basic_settings');

add_action('admin_menu', 'setup_theme_admin_menu');
	function setup_theme_admin_menu() {
	add_menu_page(
		'Dishes Theme Settings', 	// page title
		'Dishes Settings', 			// menu title
		'manage_options', 			// minimum user capability
		'dishes_settings',			// menu slug
		'dishes_settings_page' 		// function for settings page
	);
}

function dishes_settings_page() { ?>
	<div>
		<form method="POST" action="">
			<input type="hidden" name="update_settings" value="Y" />
			<table class="form-table">
				<tr>
					<th><label for="dish">Dish title:</label></th>
					<td>
						<input type="text" name="title"
						value="<?php print get_option("dish_title"); ?>"
						size ="25" />
					</td>
				</tr>
				<tr>
					<th><label for="dish">Dish description:</label></th>
					<td>
						<input type="text" name="description"
						value="<?php print get_option("dish_description"); ?>"
						size ="25" />
					</td>
				<tr>
				</tr>
					<th><label for="dish">Dish image:</label></th>
					<td>
						<input type="text" name="image"
						value="<?php print get_option("dish_image"); ?>"
						size ="25" />
					</td>
				</tr>
			</table>
			<p>
				<input type="submit" value="Save settings" class="button-primary"/>
			</p>
		</form>
	</div>
	<?php
	if (isset($_POST["update_settings"])) {
		$lecture = esc_attr($_POST["title"]);
		update_option("dish_title", $lecture);
		$exercise = esc_attr($_POST["description"]);
		update_option("dish_description", $exercise);
		$desc = esc_attr($_POST["image"]);
		update_option("dish_image", $desc);
		?>
		<div id="message" class="updated">Settings saved</div>
	<?php }
}*/



?>