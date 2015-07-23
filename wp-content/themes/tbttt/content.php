<div class="events">
  
<div class="col-sm-12 no-padding">
	<div class="col-sm-2 no-padding img">
	  <?php if (has_post_thumbnail( $post->ID ) ): // if featured image is uploaded, show it ?>
	  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
	  <img class="thumbnail" src="<?php echo $image; ?>">
	  <?php else : //if no featured image is uploaded, show default ?>
	  <div class="thumbnail default"></div>
	  <?php endif; ?>
	</div>
	<div class="col-sm-8 descrip">
	  <h3><a href="<?php the_permalink() ?>" title="Click to View: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	  <p><em><?php the_time( 'F jS, Y' ); ?></em></p>
	  <p><?php the_excerpt() ?></p>
	</div>
	<div class="col-sm-2 no-padding pull-right">
		<div class="more">
	      <p class="view"><a href="<?php the_permalink() ?>" title="Click to View: <?php the_title_attribute(); ?>">View Event</a></p>
	    </div>
	</div>
	<div class="clear"></div>
	<hr>
</div>


</div><!--/.events-->