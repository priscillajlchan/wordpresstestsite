<div class="container">
	<div class="row">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="pin-article span12">
    
				<?php get_template_part( 'post-formats/standard' ); ?>
        
                <div style="clear:both"></div>
            
            </div>
		
		<?php endwhile; else: endif; ?>
           
    </div>
</div>