<?php 
		
	if ( has_post_thumbnail() ) { ?>
        
		 <div class="pin-container">
			<?php the_post_thumbnail('blog'); ?>
		</div>
        
<?php } ?>
    
<article class="article">

    <h1 class="title"><?php the_title(); ?></h1>
    
    <div class="line"></div>

	<?php the_content(); ?>

</article>