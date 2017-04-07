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
    <!-- Footer -->
    <footer>
        <ul>
            <li>&copy; <?php bloginfo('name'); ?>, <?=date('Y');?>. All rights reserved.</li>
            <li>Design: ETH Zurich, Globis Group</li>
	   <br/>
<li><?php bloginfo('description'); ?></li>
    </footer>

	<?php wp_footer(); ?>
</body>
</html>