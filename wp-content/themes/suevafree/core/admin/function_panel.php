<?php

function add_menu()
{
	global $themename, $adminmenuname,$optionfile;
	add_theme_page("Theme Options", "Theme Options", 'administrator',  'themeoption', 'themeoption');
	add_theme_page("Get Premium", "Get Premium", 'administrator',  'getpremium', 'getpremium');
}

add_action('admin_menu', 'add_menu'); 

function add_script() {
	
	 global $wp_version;
     wp_enqueue_style( "thickbox" );
     add_thickbox();

	 $file_dir = get_bloginfo('template_directory')."/core/admin/include";
	 
	 wp_enqueue_script( 'jquery.custom', $file_dir.'/js/jquery.custom.js',array('jquery','media-upload','thickbox'),'1.0',true ); 
	 wp_enqueue_script( 'wip_on_off', $file_dir.'/js/wip_on_off.js','3.5', true); 
	 wp_enqueue_style ( 'custom.style', $file_dir.'/css/custom.style.css' ); 
	 wp_enqueue_style ( 'wip_on_off', $file_dir.'/css/wip_on_off.css' );
}

add_action('admin_init', 'add_script');

function save_option ( $panel ) {
	
	global $message_action;
	
	$suevafree_setting = get_option( suevafree_themename() );
	
	if ( $suevafree_setting != false ) 
						
		{
			$suevafree_setting = maybe_unserialize( $suevafree_setting );
		} 
						
	else 
						
		{
			$suevafree_setting = array();
		}      
		
	if ( "Save" == suevafree_request('action') )

	{
				

		foreach ($panel as $element ) {
			
			if ( ( isset($element['tab']) )  && ( $element['tab'] == $_GET['tab'] ) ){
					
				foreach ($element as $value )
		
					{
		
						if ( $_REQUEST['element-opened'] == "Skins" )
		
							{
								require_once get_template_directory() . '/core/admin/option/skins.php';
								update_option( suevafree_themename(), array_merge( $suevafree_setting  ,$current) );
								break;
							} 
						
						else if ( ( isset( $value['id']) ) && ( isset( $_POST[$value["id"]] ) ) ) 	
			
							{	
								$current[$value["id"]] = $_REQUEST[$value["id"]]; 
								update_option( suevafree_themename(), array_merge( $suevafree_setting  ,$current) );
							}
							
								
							
						$message_action = 'Options saved successfully.';
					
					}
				
				}
		
			}
		}
}

function message () 

	{
		global $message_action;
		if (isset($message_action))
		echo '<div id="message" class="updated fade message_save voobis_message"><p><strong>'.$message_action.'</strong></p></div>';
	}


function themeoption() 

	{

		$themename = "Sueva";
		$shortname = "suevafree";
		require_once get_template_directory() . '/core/admin/option/options.php';   

	}

function getpremium() {	?>

	<a href="http://www.themeinprogress.com/?ref=panel" target="_blank" >
    	<img src="http://www.themeinprogress.com/images/suevapremium.jpg" alt="Get Premium" style="margin:15px auto" />
    </a>

<?php } ?>