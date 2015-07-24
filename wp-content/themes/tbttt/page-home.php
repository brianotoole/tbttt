<?php
/**
Template Name: Home
 *
 */
get_header(); ?>
<!--hero--> 
<section class="hero">
  <div class="img" style="background: url('<?php the_field('fadeshow_img1'); ?>') 50% center no-repeat;background-size:cover;"></div> 
  <div class="img" style="background: url('<?php the_field('fadeshow_img2'); ?>') top no-repeat;background-size:cover;"></div>  
  <div class="img" style="background: url('<?php the_field('fadeshow_img3'); ?>') center center no-repeat;background-size:cover;"></div>
  <div class="img" style="background: url('<?php the_field('fadeshow_img4'); ?>') 50% 0 no-repeat background-size:cover;"></div>
     <div class="home-hero" id="container">                      
        <h2 class="hidden-xs animateSlow fadeIn"><?php the_field('fadeshow_overlay_text'); ?></h2>
        <h2 class="visible-xs"><?php the_field('fadeshow_overlay_text'); ?></h2>
      </div><!--/.hero #container --> 
</section><!--/section.hero-->

<div class="sec1">
	<div class="intro" id="contain">
	<h3 class="h-title"><span><?php the_field('homepage_sec1_title'); ?></span></h3> 
		<p class="intro"><?php the_field('homepage_sec1_callout'); ?></p>
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
		<h2><?php the_field('homepage_sec2_title'); ?></h2>
    </div>
</div><!--/.home-cta-->
<div class="sec3">
    <div class="grid grid-pad no-top">
		<?php get_template_part( 'part', 'events' ); ?>
    </div>
</div><!--/.sec3-->
 
<?php get_footer(); ?>