<div class="events">
<?php 
// Events are posts, but event start/end date != post date
// use function "get_events_between()" to query by dates >= than current day 
$args_limit = array(
'posts_per_page'  => 8,
'category_name'   => 'event',
'orderby'         => 'date',
'order'	          => 'DESC',
'post_status'     => 'publish'
);
$args_all = array(
'posts_per_page'  => -1,
'category_name'   => 'event',
'post_status'     => 'publish'
);


if(is_front_page() ) { 
  $query = new WP_Query($args_limit);
} else {
  $query = new WP_Query($args_all); 
} 
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>

<a href="<?php the_permalink() ?>" title="Click to View: <?php the_title_attribute(); ?>">  
<div class="col-sm-12 no-padding">
	<div class="col-sm-2 no-padding img">
	  <?php if (has_post_thumbnail( $post->ID ) ): //if featured image is uploaded... ?>
	  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
	  <img class="thumbnail" src="<?php echo $image; ?>">
	  <?php elseif( get_field('event_img')): //if event thumb is entered...?>
	  <img class="thumbnail" src="<?php the_field('event_img'); ?>">
	  <?php else: //if no featured image is uploaded, show default icon img ?>
	  <div class="thumbnail default"></div>
	  <?php endif; ?>
	</div>
	<div class="col-sm-8 descrip">
	  <h3><?php the_title(); ?></h3>
	  <p><em>
	  <?php if( get_field('event_start_date') && !get_field('event_end_date') )://if only start is entered..?>
	  <?php the_field('event_start_date'); ?>
	  
	  <?php elseif( get_field('event_start_date') && get_field('event_end_date') ): //start & end date...?> 
      <?php the_field('event_start_date'); ?> - <?php the_field('event_end_date'); ?>

      <?php else: //no event date is entered...?> 
      <?php endif; ?></em></p>  
	  <p><?php the_excerpt() ?></p>
	</div>
	<a href="<?php the_permalink() ?>" title="Click to View: <?php the_title_attribute(); ?>">
	  <div class="col-sm-2 no-padding pull-right">
		<div class="more">
	      <p class="view">View Event</p>
	    </div>
	  </div>
	</a>
	<div class="clear"></div>
	<hr>
</div>
</a>

<?php endwhile; 
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'There are no upcoming events at this time.' ); ?></p>
<?php endif; ?>
 
<?php if(is_front_page() ) { //if homepage, show "View All Events" if there are 5 or more ?>	
  <?php 
    $count_posts = wp_count_posts();
    $published_posts = $count_posts->publish;
      if( $published_posts > 8 ) {
        echo '<div class="col-sm-12 text-center no-padding">';
        echo '<a href="' . get_option('home') . '/events" class="button white">' . 'View All Events' . '</a>';
        echo '</div>'; 
      }
  ?>
<?php } else { ?>
<?php } ?>

</div><!--/.events-->