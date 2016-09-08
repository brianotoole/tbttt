<?php 
//part-news 

$args = array(
'category_name' => 'news',
'orderby' => 'date',
'order'   => 'DESC',
'posts_per_page'  => 4,
'post_type' 	  => 'post',
'post_status'     => 'publish'
);

$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0];
$query = new WP_Query($args); 
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>

<div class="col-sm-6 news-item">
  <div class="news-meta">
    <h3><?php the_title(); ?></h3>
    <p><?php the_excerpt() ?></p>
    <a href="<?php the_permalink() ?>" class="read-more" title="Click to Read Full Article">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
  </div><!--/.news-meta-->
</div><!--/.col-->

<?php endwhile; 
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'There are no recent news articles at this time.' ); ?></p>
<?php endif; ?>