<?php

$suevafree_sidebars = get_option('suevafree_setting');
$sidebar_list = array( "suevafree_sidebars" => "the_sidebars");

$article = array (

array( "name" => __( "General Settings","wip"),
	   "type" => "title",
	   "id" => "title",
      ),

array( "name" => __( "Metatag Title","wip"),
	   "desc" => __( "Insert the metatag title of page, use a maximum of 60 chars","wip"),
	   "id" => "suevafree_seo_title",
	   "type" => "text",
	   "std" => "",
      ),

array( "name" => __( "Metatag Description","wip"),
	   "desc" => __( "Insert the metatag description of page, use a maximum of 160 chars","wip"),
	   "id" => "suevafree_seo_description",
	   "type" => "textarea",
	   "std" => "",
      ),

array( "name" => __( "Keywords","wip"),
	   "desc" => __( "Insert the keywords separated by comma","wip"),
	   "id" => "suevafree_seo_keywords",
	   "type" => "textarea",
	   "std" => "",
      ),
	  
array( "name" => __( "Template","wip"),
	   "desc" => __( "Select a template for this page","wip"),
	   "id" => "suevafree_template",
	   "type" => "select",
	   "options" => array(
		   "full" => __( "Full Width","wip"),
	   	   "left-sidebar" =>  __( "Left Sidebar","wip"),
	   	   "right-sidebar" => __( "Right Sidebar","wip"),
      ),
 	  ),
	  
array( "name" => __( "Sidebar","wip"),
	   "desc" => __( "Select side sidebar","wip"),
	   "id" => "suevafree_sidebar",
	   "type" => "select",
	   "options" => array( "sidebar-area" => "Default"),
	   "std" => "",
      ),
);

$page = array (

array( "name" => __( "General Settings","wip"),
	   "type" => "title",
	   "id" => "title",
      ),
	  
array( "name" => __( "Metatag Title","wip"),
	   "desc" => __( "Insert the metatag title of page, use a maximum of 60 chars","wip"),
	   "id" => "suevafree_seo_title",
	   "type" => "text",
	   "std" => "",
      ),
	  
array( "name" => __( "Metatag Description","wip"),
	   "desc" => __( "Insert the metatag description of page, use a maximum of 160 chars","wip"),
	   "id" => "suevafree_seo_description",
	   "type" => "textarea",
	   "std" => "",
      ),


array( "name" => __( "Keywords","wip"),
	   "desc" => __( "Insert the keywords separated by comma","wip"),
	   "id" => "suevafree_seo_keywords",
	   "type" => "textarea",
	   "std" => "",
      ),
	  
array( "name" => __( "Template","wip"),
	   "desc" => __( "Select a template for this page","wip"),
	   "id" => "suevafree_template",
	   "type" => "select",
	   "options" => array(
		   "full" => __( "Full Width","wip"),
	   	   "left-sidebar" =>  __( "Left Sidebar","wip"),
	   	   "right-sidebar" => __( "Right Sidebar","wip"),
      ),
 	  ),
	  
array( "name" => __( "Sidebar","wip"),
	   "desc" => __( "Select side sidebar","wip"),
	   "id" => "suevafree_sidebar",
	   "type" => "select",
	   "options" => array( "sidebar-area" => "Default"),
	   "std" => "",
      ),

);

?>