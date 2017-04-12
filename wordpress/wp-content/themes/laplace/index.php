<?php get_header(); ?>

<?php
	$pages = get_pages('sort_column=menu_order');
?>

<?php
	echo $pages[0]->post_content;
	echo $pages[1]->post_content;
	echo $pages[2]->post_content;
?>

<section class="brown-section" id="menu">
	<article class="restaurant-menu">
		<div>
			<div>
				<header class="medium-header" style="margin-bottom: 1em">Our Menu</header>
				<header class="small-header">Appetizers</header>
				<p>
					We serve a seasonal tasting menu that focuses on local ingredients. Our appetizers may vary during the year to always ensure the best quality.
					For the appetizers, we are famous for our bruschettas that we serve in several different variants.
				</p>
			</div>
			<div id="menuSectionNav">
				<a class="chosen" id="appetizers-menu" href="">Appetizers</a>
				<a href="" id="fresh-pasta-menu">Fresh Pasta</a>
				<a href="" id="meat-fish-menu">Meat - Fish</a>
				<a href="" id="dessert-menu">Dessert</a>
			</div>
		</div>
		<div id="picMenu">

			<?php
			
			$dishPosts = new WP_Query('post_type=dish&posts_per_page=100');
			if ($dishPosts->have_posts()) :
				while ($dishPosts->have_posts()) :
					$dishPosts->the_post();
					$title = get_post_meta(get_the_ID(), 'dish_title', true);
					$description = get_post_meta(get_the_ID(), 'dish_description', true);
					$type = get_post_meta(get_the_ID(), 'dish_type', true);

					ob_start();?>
					
					<div class="menu-item">
						<a href="#">
							<?php the_post_thumbnail(); ?>
						</a>
						<div>
							<div>
								<a><?php echo $title; ?></a>
							</div>
						</div>
					</div>
					<div class="modalDialog">
						<div>
							<a href="#close" title="Close" class="close">X</a>
							<h2><?php echo $title; ?></h2>
							<?php the_post_thumbnail(); ?>
							<p><?php echo $description; ?></p>
						</div>
					</div>
					
					<?php $html = ob_get_clean();
				
					switch($type) {
						case "Appetizers":
							$appetizers .= $html;
							break;
						case "Fresh Pasta":
							$pasta .= $html;
							break;
						case "Meat - Fish":
							$meat .= $html;
							break;
						case "Dessert":
							$dessert .= $html;
							break;
					}
				
				endwhile;
			endif;?>
			
			<div id='appetizers-menu-list'><?php echo $appetizers ?></div>
			<div id='fresh-pasta-menu-list'><?php echo $pasta ?></div>
			<div id='meat-fish-menu-list'><?php echo $meat ?></div>
			<div id='dessert-menu-list'><?php echo $dessert ?></div>
		</div>

		<div style="clear: both;"></div>
	</article>
</section>

<?php
	$pages = get_pages('sort_column=menu_order');
	echo $pages[3]->post_content;
?>

<section class="brown-section">
	<article>
		<header class="large-header"><b>Upcoming Events</b></header>
		<div class="upcoming-events">
			
			<?php $dishPosts = new WP_Query('post_type=event&posts_per_page=3&order=DESC&meta_key=event_date&orderby=event_date');
			if ($dishPosts->have_posts()) :
				while ($dishPosts->have_posts()) :
					$dishPosts->the_post();
					$title = get_post_meta(get_the_ID(), 'event_title', true);
					$date = get_post_meta(get_the_ID(), 'event_date', true);
					$startTime = get_post_meta(get_the_ID(), 'event_start_time', true);
					$endTime = get_post_meta(get_the_ID(), 'event_end_time', true);
					$description = get_post_meta(get_the_ID(), 'event_description', true);

					ob_start();?>
					
					<div>
						<?php the_post_thumbnail(); ?>

						<a href="">
							<header class="medium-header"><?php echo $title ?></header>
							<header class="small-header"><?php echo $date . " " . $startTime . " - " . $endTime ?></header>
						</a>

						<p><?php echo $description ?></p>
					</div>
					
					<?php echo ob_get_clean();
					
				endwhile;
			endif;?>
			
		</div>
			
		<div id="pastEvents">
			<header class="large-header"> <b> Past Events </b> </header>
			<div class="past-events">
			
			<?php $dishPosts = new WP_Query('post_type=event&posts_per_page=4&order=DESC&meta_key=event_date&orderby=event_date&offset=3');
				if ($dishPosts->have_posts()) :
					while ($dishPosts->have_posts()) :
						$dishPosts->the_post();
						$title = get_post_meta(get_the_ID(), 'event_title', true);
						$date = get_post_meta(get_the_ID(), 'event_date', true);
						$startTime = get_post_meta(get_the_ID(), 'event_start_time', true);
						$endTime = get_post_meta(get_the_ID(), 'event_end_time', true);

						ob_start();?>

						<div>
							<?php the_post_thumbnail() ?>

							<a href="">
								<header class="medium-header"><?php echo $title ?></header>
								<header class="small-header"><?php echo $date . " " . $startTime . " - " . $endTime ?></header>
							</a>
						</div>

						<?php echo ob_get_clean();

					endwhile;
				endif;?>
			
			</div>
		</div>
	</article>
</section>

<?php
	$pages = get_pages('sort_column=menu_order');
	echo $pages[4]->post_content;
	echo $pages[5]->post_content;
?>

<section class="white-section" id="openingHoursSection">
	<article class="opening-hours">
		<div>
			<header class="medium-header"> Opening Hour </header>
			<p> <b> MONDAY : </b><span id="monday_hours_span"><?php echo get_theme_mod('monday_hours'); ?></span></p> </br>
			<p> <b>TUE-FRI : </b><span id="tue_hours_span"><?php echo get_theme_mod('tues_fri_hours'); ?></span></p> </br>
			<p> <b>SAT-SUN : </b><span id="sat_hours_span"><?php echo get_theme_mod('sat_sun_hours'); ?></span></p> </br>
			<p> <b>HOLYDAYS : </b><span id="holidays_hours_span"><?php echo get_theme_mod('holiday_hours'); ?></span></p> </br>
		</div>
		<div>
			<header class="medium-header">  Contacts </header>
			<p> <b>ADDRESS : </b><span id="city_span"><?php echo get_theme_mod('contact_city'); ?></span></p> </br>
			<p> <span id="address_span"><?php echo get_theme_mod('contact_address'); ?></span></p> </br>
			<p> <b>PHONE : </b><span id="phone_span"><?php echo get_theme_mod('contact_phone'); ?></span></p> </br>
			<p> <b>EMAIL : </b><span id="email_span"><?php echo get_theme_mod('contact_email'); ?></span></p> </br>
		</div>
	</article>
</section>

<?php get_footer(); ?>  