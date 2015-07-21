<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sensible
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

	<?php get_sidebar(); ?>
	</div><!-- grid -->
	<?php get_footer(); ?>
