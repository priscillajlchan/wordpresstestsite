<?php
		
	if ( get_post_type( get_the_ID()) == "page" ) {
		get_template_part( 'post-formats/page' );
	}

	else  {
		get_template_part( 'post-formats/standard' );
	}

?>
