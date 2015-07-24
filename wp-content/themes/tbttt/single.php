<?php
/**
 * The template for displaying all single posts.
 *
 */
get_header(); ?> 

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
    
 	<?php while ( have_posts() ) : the_post(); ?>
       
	<header class="single-blog-entry-header">
		<?php if( get_field('event_start_date') && !get_field('event_end_date') )://if only start is entered..?>
		<div class="entry-meta">
			<h5><?php _e( 'Event Date: ', '' ); ?> <?php the_field('event_start_date'); ?></h5>
		</div><!-- .entry-meta -->
		<?php elseif( get_field('event_start_date') && get_field('event_end_date') ): //start & end date...?> 
		<div class="entry-meta">
			<h5><?php _e( 'Event Dates: ', '' ); ?>
			<?php the_field('event_start_date'); ?> - <?php the_field('event_end_date'); ?></h5>
		</div><!-- .entry-meta -->
		<?php else: //no event date is entered...?> 
		<?php endif; ?>
	</header><!-- .entry-header -->
   
	<div class="grid grid-pad">
		<div id="primary" class="content-area col-9-12">
			<main id="main" class="site-main" role="main">

			<?php get_template_part( 'content', 'single' ); ?>  

		


		<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	<?php get_sidebar(); ?>
	</div><!-- grid -->
	<?php get_footer(); ?>
