<?php
/**
Template Name: Page, Full - Login protected
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

			<?php 
			while ( have_posts() ) : the_post(); 
			
			   if (is_user_logged_in()) {
			    
				  get_template_part( 'content', 'page' );
				    if (is_page('events')) { 
				      get_template_part( 'part', 'events' );
				    }
				  
				}
				  else {
				    echo '<h3>You must login to view this content.</h3>';
				    echo '<div class="f">' . wp_login_form() . ' </div>';
				};

			endwhile; // end of the loop. 
			
			?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid -->
<?php get_footer(); ?>
