<?php
/**
Template Name: Page - Fullwidth
 *
 */

get_header(); ?> 

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
            
    	<header class="featured-img-header" data-speed="8" data-type="background" style="background: url('<?php echo $image; ?>') 50% 0 no-repeat fixed;">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        		</div>
        	</div>
		</header><!-- .entry-header --> 
		<div class="page-title container full">
			<div class="row" id="container">
				<div class="col-sm-12">
				  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div><!--/.col-->
			</div><!--/.row-->
		</div>
    
		<?php else : ?>
        
        <header class="entry-header">
		</header><!-- .entry-header -->

		<div class="page-title container full bg-maroon">
			<div class="row" id="container">
				<div class="col-sm-12">
				  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div><!--/.col-->
			</div><!--/.row-->
		</div>
        
	<?php endif; ?>
    
	<div class="grid grid-pad">
		<div id="primary" class="content-area col-1-1">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid -->
<?php get_footer(); ?>
