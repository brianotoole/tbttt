<?php
/**
Template Name: Page - Fullwidth
 * uses var $selectedBg to set random img, declared in header.php file
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
