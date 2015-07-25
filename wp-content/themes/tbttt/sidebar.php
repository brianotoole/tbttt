<?php
/**
 * The sidebar containing the main widgets
 */

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		return;
	}
	?>

	<div id="secondary" class="widget-area col-3-12" role="complementary">
	  <?php if( get_field('event_register_button') )://if event register link is added...?>
	  <h1 class="widget-title">Register for this Event</h1>
	  <div class="event-link">
	  	<a href="<?php the_field('event_register_button'); ?>" target="_blank">Register Now</a>
	  </div>
	  <?php else: //no event register link is added...?> 
      <?php endif; ?>
	  <h1 class="widget-title">Share this Event</h1>
	  <div class="social-share">
		  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="window.open(this.href, '', 'height=400,width=575'); return false;" class="facebook">
		  <span unselectable="on"></span><span>Share on Facebook</span>
		  </a>
		  <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?> - <?php the_permalink(); ?>" class="twitter" target="_blank">
		  <span unselectable="on"></span><span>Share on Twitter</span>
		  </a>
	  </div><!--/.social-share-->
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary --> 
