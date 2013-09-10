<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
<script type='text/javascript' src='https://apis.google.com/js/plusone.js?ver=3.4.2'></script>

<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo __( "en_EN","wip"); ?>/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


<div class="social-icons">
        
	<div class="social-button facebook-box <?php echo __( "en","wip"); ?>">
          
		<div class="fb-like" data-href="<?php echo get_permalink($post->ID);?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="true"></div>

	</div>

	<div class="social-button twitter-box">
			
		<a href="https://twitter.com/share" data-counturl="<?php echo get_permalink($post->ID);?>" data-url="<?php echo get_permalink($post->ID);?>" class="twitter-share-button" data-lang="<?php echo __( "en","wip"); ?>" data-dnt="true" data-text="<?php echo get_the_title(); ?>">Tweet</a>
			
	</div>

	<div class="social-button google-plus">
            
		<div class="g-plusone" data-size="medium" data-href="<?php echo get_permalink($post->ID);?>"></div>
                
	</div>
            
	<div class="social-button pinterest">
<?php
$image_url = wp_get_attachment_image_src(get_post_thumbnail_id());
$image_url = $image_url[0];
?>



		<a href="//pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo urlencode($image_url); ?>&description=<?php the_title(); ?>" data-pin-do="buttonPin" data-pin-config="above"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
                
	</div>
            
</div>    

<div class="clear"></div>

