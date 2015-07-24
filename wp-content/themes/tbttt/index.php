<?php
/**
 * The main template file used to display a page when nothing more specific matches a query.
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
        
    
	  <div class="sec3">
   		 <div class="grid grid-pad no-top">
			<div id="primary" class="content-area col-9-12 blog-archive">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

					<?php endwhile; ?>

						<?php sensible_paging_nav(); ?> 

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- grid -->
     </div><!--.sec3-->

	<?php get_sidebar(); ?>
	</div><!-- grid -->
	<?php get_footer(); ?>
