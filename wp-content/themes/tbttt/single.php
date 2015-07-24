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
		<div class="entry-meta">
			<h5><?php _e( 'Event Date: ', 'sensible' ); ?> <?php the_date(); ?></h5>
		</div><!-- .entry-meta -->
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
