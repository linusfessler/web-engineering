<!DOCTYPE HTML>

<html>
<head>
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" initial-scale="1" />
    <link href="https://fonts.googleapis.com/css?family=Kreon" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="wp-content/themes/laplace/script.js" type="text/javascript"></script>
	
	<?php wp_head(); ?>
</head>


<body>
    <!-- Spaceholder for navbar -->
    <div style="height: 100px"></div>


    <!-- Header -->
    <div class="menu-wrapper">
        <nav>
            <ul>
                <li><a href="#first">About</a></li>
                <li><a href="#menu">Menu</a></li>
				
                <li class="logo">
					<?php $logo=get_option('logo', IMAGES.'/logo.png'); ?>
					<img src="<?php print $logo; ?>" alt="<?php bloginfo('name'); ?>">
				</li>
                <li><a href="#events">Events</a></li>
                <li><a href="#contacts">Contacts</a></li>
            </ul>
        </nav>
    </div>

	<?php if (get_theme_mod('header_picture')) : ?>
	
    <div class="title-wrapper" style="background: url('<?php echo get_theme_mod('header_picture'); ?>') no-repeat center")>

	<?php else : ?>
	
    <div class="title-wrapper">
		
	<?php endif; ?>
        <header id="title">LaPlace - Zurich</header>
        <a href="#book" id="bookATable">Book a Table</a>
    </div>