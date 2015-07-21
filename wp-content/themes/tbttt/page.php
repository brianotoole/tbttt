<?php
/**
Default inteior pg
 *
 */

get_header(); ?> 

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
            
    	<header class="featured-img-header" data-speed="8" data-type="background" style="background: url('<?php echo $image; ?>') 50% 0 no-repeat fixed;">
		</header><!-- .entry-header --> 
		<div class="sec1">
			<div class="intro" id="contain">
			<h3 class="h-title"><span><?php the_title(); ?></span></h3> 
				<?php if( get_field('interior_callout') ): //if field is entered...?>
				 <p class="intro"><?php the_field('interior_callout'); ?></p>
				<?php else: //no field is entered...?> 
				<p class="intro-no-p"></p>
				<?php endif; ?>
			</div><!--/.intro-->
		</div><!--/.sec1-->
    
		<?php else : ?>
        
        <header class="entry-header">
		</header><!-- .entry-header -->

		<div class="sec1">
			<div class="intro" id="contain">
			<h3 class="h-title"><span><?php the_title(); ?></span></h3> 
				<?php if( get_field('interior_callout') ): //if field is entered...?>
				 <p class="intro"><?php the_field('interior_callout'); ?></p>
				<?php else: //no field is entered...?> 
				<p class="intro-no-p"></p>
				<?php endif; ?>
			</div><!--/.intro-->
		</div><!--/.sec1-->
        
	<?php endif; ?>
    
	<div class="grid grid-pad">
		<div id="primary" class="content-area col-1-1">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'page' ); ?>
				
				<?php if (is_page('events')) { ?>
				  <?php get_template_part( 'part', 'events' ); ?>
				<?php } else { ?>
				<?php } ?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid -->
<?php get_footer(); ?>
