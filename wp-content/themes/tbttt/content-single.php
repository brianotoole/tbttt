<?php
/**
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<div class="entry-content">
		<?php 
		
		  the_content(); 
		
		  if( get_field('event_more_detailed_info') ): //if event additional info is entered
		     the_field('event_more_detailed_info'); 
		  else: 
		  endif; 
		  
		?>
		</div><!-- .entry-content -->

	</article><!-- #post-## -->
