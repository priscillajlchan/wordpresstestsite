<?php

$numbersdisplay = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25');
	
require_once get_template_directory() . '/core/widgets/search_widget.php';


if (function_exists('register_sidebar')) {
 
	register_sidebar(array(
	
		'name' => 'Sidebar',
		'id'   => 'sidebar-area',
		'description'   => 'This sidebar will be shown after the content.',
		'before_widget' => '<div class="widget-box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>'
	
	));

	register_sidebar(array(
	
		'name' => 'Category Sidebar',
		'id'   => 'category-sidebar-area',
		'description'   => 'This sidebar will be shown after the content.',
		'before_widget' => '<div class="widget-box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title">',
		'after_title'   => '</h3>'
	
	));

	register_sidebar(array(
	
		'name' => 'Bottom Sidebar',
		'id'   => 'bottom-sidebar-area',
		'description'   => 'This sidebar will be shown after the content.',
		'before_widget' => '<div class="span3"><div class="widget-box">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h4 class="title">',
		'after_title'   => '</h4>'
	
	));
	
}

function unregister_default_wp_widgets() {
	unregister_widget('WP_Widget_Search');
}

add_action('widgets_init', 'unregister_default_wp_widgets', 1);


?>