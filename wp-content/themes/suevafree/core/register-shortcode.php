<?php

function icon_function($atts,  $content = null) 
{
	extract(shortcode_atts(array(
		'name' => '',
	), $atts));

	$icon = '<i class="'.$name.'"></i> '; 
	
	return do_shortcode($icon.$content);
}

add_shortcode('icon','icon_function');

function columns_function($atts,  $content = null) 
{

	$content = "<div class='container-fluid'><div class='row-fluid'>" . do_shortcode($content) . "</div></div>" ;
	
	return do_shortcode($content);
}

add_shortcode('columns','columns_function');

function fourcolumns($atts,  $content = null) 
{
	extract(shortcode_atts(array(
		'title' => '',
		'icon' => '',
		'span' => 'true'
	), $atts));

	if ($icon) { $icon = '<i class="'.$icon.'"></i>'; } 

	if ($title) { $title = '<h3 class="title">'.$icon.$title.'</h3>'; }
	
	$content = "<div class='span3'>" . $title .  $content . "</div>" ;
	
	return do_shortcode($content);
}

add_shortcode('four_columns','fourcolumns');


function threecolumns($atts,  $content = null) 
{
	extract(shortcode_atts(array(
		'title' => '',
		'icon' => '',
		'span' => 'true'
	), $atts));

	if ($icon) { $icon = '<i class="'.$icon.'"></i>'; } 

	if ($title) { $title = '<h3 class="title">'.$icon.$title.'</h3>'; }
	
	$content = "<div class='span4'>" . $title .  $content . "</div>" ;
	
	return do_shortcode($content);
}

add_shortcode('three_columns','threecolumns');


function twocolumns($atts,  $content = null) 
{
	extract(shortcode_atts(array(
		'title' => '',
		'icon' => '',
		'span' => 'true'
	), $atts));

	if ($icon) { $icon = '<i class="'.$icon.'"></i>'; } 

	if ($title) { $title = '<h3 class="title">'.$icon.$title.'</h3>'; }
	
	$content = "<div class='span6'>" . $title .  $content . "</div>" ;
	
	return do_shortcode($content);
}


add_shortcode('two_columns','twocolumns');


function onecolumn($atts,  $content = null) 
{
	extract(shortcode_atts(array(
		'title' => '',
		'icon' => '',
		'span' => 'true'
	), $atts));

	if ($icon) { $icon = '<i class="'.$icon.'"></i>'; } 

	if ($title) { $title = '<h3 class="title">'.$icon.$title.'</h3>'; }
	
	$content = "<div class='span12'>" . $title .  $content . "</div>" ;
	
	return do_shortcode($content);
}

add_shortcode('one_column','onecolumn');

function highlightcode($atts,  $content = null) 
{
	extract(shortcode_atts(array(
		'background' => '',
		'color' => '',

	), $atts));

	$content = '<span style="background:' . $background . '; color:'. $color .'">' . $content . '</span>' ;
	
	return $content;
}

add_shortcode('highlight','highlightcode');


function list_code ($atts,  $content = null) {
	
	extract(shortcode_atts(array(
		'icon' => '',
	), $atts));
	
	$content = str_replace('<li>','<li><i class="' . $icon . '"></i>',$content);
	
	$html =  '<ul class="icons">' . $content . '</ul>';
	
	return $html;

}

add_shortcode('list','list_code');

function dropcap_code ($atts,  $content = null) {
	
	$html =  '<p class="dropcap">' . $content . '</p>';
	
	return $html;

}

add_shortcode('dropcap','dropcap_code');


remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 12);


?>