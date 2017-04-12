<?php get_header(); ?>

<section id="first" class="white-section">
	<article>
		<header class="medium-header">Welcome</header>
		<p>
			LaPlace Restaurant was founded in May of 2015. The cuisine we serve is created with the utmost attention to details. Our emphasis is on providing fresh, locally sourced, exquisite food. As such our menus change on a regular basis, allowing us to offer you mouth watering, perfectly prepared dishes.
		</p>
	</article>
</section>

<section class="image-section" id="highQualityCuisine" style="background-image: url(wp-content/themes/laplace/images/small1.jpg)">
	<article>
		<header class="medium-header">High Quality Cuisine</header>
		<p>
			Our cuisine is a melting pot of different cultures which have come together to form a unique blend of flavours and techniques.
		</p>
	</article>
</section>

<section class="white-section" id="onlyTheBestIngredients">
	<article>
		<header class="medium-header">Only the Best Ingredients</header>
		<p>
			It's vital to our operation to make sure everybody is aware of the quality of the ingredients we use. As the choices we make in terms of which supplies we buy for our recipes is intrinsic to factors such as the healthiness of the food we make to the price you pay for it. That's why on our menus you find the origins of each of our ingredients.
		</p>
	</article>
</section>

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

<section id="events" class="white-section">
	<article>
		<header class="medium-header">Our Events</header>
		<p>
			In our Philosophy, a restaurant is not only a place where to eat but also to communicate and know new people. For these reasons we organize various events every month.
		</p>
	</article>
</section>

<section class="brown-section">
	<article>
		<header class="large-header"><b>Upcoming Events</b></header>
		<div class="upcoming-events">
			
			<?php $dishPosts = new WP_Query('post_type=event&posts_per_page=3&order=desc&meta_key=event_date&orderby=event_date');
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
			
			<?php $dishPosts = new WP_Query('post_type=event&posts_per_page=4&order=desc&meta_key=event_date&orderby=event_date&offset=3');
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

<section id="contacts" name="contacts" class="white-section">
	<article>
		<header class="medium-header">Contact us</header>
		<p>Feel free to contact us for any kind of issues or questions</p>
		<form class="contact-form" method="post" action="#">
			<div id="nameemail">
				<input type="text" placeholder="Name" />
				<input type="text" placeholder="Email" />
			</div>
			<textarea name="message" placeholder="Message"></textarea>
			<ul>
				<li><input type="submit" value="Send Message" /></li>
				<li><input type="reset" value="Clear Form" /></li>
			</ul>
		</form>
	</article>
</section>

<section class="image-section" id="bookATableSection" style="background-image: url(wp-content/themes/laplace/images/book-table.jpg)">
	<article class="book-a-table-form-container">
		<header class="medium-header">Book a table</header>
		<div>
			<div>
				<form class="book-a-table-form" method="post" action="#">
					<div style="-webkit-column-count: 2; -moz-column-count: 2; column-count: 2;">
						<div class=""><input type="text" placeholder="Name" /></div>
						<div><input type="text" placeholder="Phone" /></div>
					</div>
					<div style="-webkit-column-count: 2; -moz-column-count: 2; column-count: 2;">
						<div><input type="text" placeholder="Date" /></div>
						<div><input type="text" placeholder="Time" /></div>
					</div>
					<div>
						<div><textarea name="message" placeholder="Message"></textarea></div>
					</div>
					</br>
					<input id="btn-book" type="submit" value="Book" />
				</form>
			</div>
		</div>
	</article>
</section>

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