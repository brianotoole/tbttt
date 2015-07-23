<?php
/**
Template Name: Page - Fullwidth, Random Header 
 *
 */
get_header(); ?> 
<?php 
$bg = array( //array of images 
'//localhost/tbttt/wp-content/uploads/2015/07/test-background.jpg',
'//localhost/tbttt/wp-content/uploads/2015/07/test-background.jpg', 
'//localhost/tbttt/wp-content/uploads/2015/07/annie_tbttt_homeimg.jpg', 
'//localhost/tbttt/wp-content/uploads/2015/07/annie_tbttt_homeimg.jpg', 
'//localhost/tbttt/wp-content/uploads/2015/07/annie_tbttt_homeimg.jpg'
 );
$i = rand(0, count($bg)-1); //generate random number of the array 
$selectedBg = "$bg[$i]"; //create & set variable equal to which random image was chosen 
?>

    <header class="entry-header" data-speed="8" data-type="background" style="background: url('<?php echo $selectedBg; ?>')50% 0 no-repeat fixed;">
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
