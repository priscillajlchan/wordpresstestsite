<?php get_header(); ?>

<!-- start content -->

<div class="container">
	<div class="row">
       
    <div <?php post_class(array('pin-article', suevafree_template('span') , suevafree_template('sidebar'))); ?> >
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
		<?php get_template_part( 'post-formats/standard' ); ?>
	        
        <div style="clear:both"></div>
        
    </div>

	<?php if ( ( is_active_sidebar(suevafree_postmeta('suevafree_sidebar')) ) && ( suevafree_template('span') == "span8" ) ) : ?>
        
        <section id="sidebar" class="pin-article span4">
            <div class="sidebar-box">
            	<?php dynamic_sidebar(suevafree_postmeta('suevafree_sidebar')) ?>
            </div>
        </section>
    
	<?php endif; ?>

	<?php endwhile; get_template_part('pagination'); endif;?>
           
    </div>
</div>

<?php get_footer(); ?>