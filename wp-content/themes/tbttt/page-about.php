<?php
/**
Template Name: Page - About
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
	
	<div class="sec2">
		<div class="intro" id="contain">
		<div class="row squeeze-in">
			<div class="col-sm-6 b-right">
				<h3><i class="fa fa-university"></i></h3>
				<h3><?php the_field('homepage_pillar_title_1'); ?></h3> 
				<p><?php the_field('homepage_pillar_1'); ?></p>
			</div><hr class="visible-xs">
			<div class="col-sm-6">
				<h3><i class="fa fa-heart"></i></h3>
				<h3><?php the_field('homepage_pillar_title_2'); ?></h3> 
				<p><?php the_field('homepage_pillar_2'); ?></p>
			</div><hr class="visible-xs">
			
			<div class="col-sm-6 b-right">
				<h3><i class="fa fa-video-camera"></i></h3>
				<h3><?php the_field('homepage_pillar_title_3'); ?></h3> 
				<p><?php the_field('homepage_pillar_3'); ?></p>
			</div><hr class="visible-xs">
			<div class="col-sm-6">
				<h3><i class="fa fa-music"></i></h3>
				<h3><?php the_field('homepage_pillar_title_4'); ?></h3> 
				<p><?php the_field('homepage_pillar_4'); ?></p>
			</div>
	    </div><!--/.row-->
		</div><!--/.intro-->
	</div><!--/.sec2-->
	
	<div class="home-cta">
	    <div class="grid grid-pad">
			<h2>Community Outreach</h2>
	    </div>
	</div><!--/.home-cta-->
        
 
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
