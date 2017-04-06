<?php get_header(); ?>

<?php
$pages = get_pages(array('sort_column' => 'menu_order'));
foreach ($pages as $page) :
	echo $page->post_content;
endforeach
?>

<?php get_footer(); ?>  