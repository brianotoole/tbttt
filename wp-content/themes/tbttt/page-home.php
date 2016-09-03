<?php
/**
Template Name: Home
 *
 */
get_header(); ?>
<!--hero--> 
<section class="hero">
<!--<div class="video-wrapper">
  <video autoplay="" loop="" muted="" poster="#">
    <source src="#" type="video/webm">
    <source src="#" type="video/mp4">
  </video> 
</div>-->

<div class="img" style="background: url('<?php the_field('fadeshow_img1'); ?>') 50% center no-repeat;background-size:cover;"></div> 
  <div class="img" style="background: url('<?php the_field('fadeshow_img2'); ?>') top no-repeat;background-size:cover;"></div>  
  <div class="img" style="background: url('<?php the_field('fadeshow_img3'); ?>') center center no-repeat;background-size:cover;"></div>
  <div class="img" style="background: url('<?php the_field('fadeshow_img4'); ?>') center center no-repeat; background-size:cover;"></div>

    <div class="home-hero" id="container">                      
      <h2 class="hidden-xs animateSlow fadeIn"><?php the_field('fadeshow_overlay_text'); ?></h2>
    </div><!--/.hero #container --> 
</section><!--/section.hero-->

<div class="sec1">
	<div class="intro" id="contain">
	<h2 class="title">Our Mission</h2>
	<p class="intro"><?php the_field('homepage_sec1_callout'); ?></p>
	<a href="<?php bloginfo('url'); ?>/about" class="button white no-border short">Learn More</a>
	</div><!--/.intro-->
</div><!--/.sec1-->

<div class="sec-news">
<div class="intro" id="contain">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="title">Latest News</h2>
    </div><!--/.col-->
  </div><!--/.row-->
  <div class="row news-item-wrap">
    <?php get_template_part( 'part', 'news' ); ?>
  </div><!--/.news-item-wrap-->
</div><!--/.intro-->
</div><!--/.sec2-->
	
<div class="home-cta">
    <div class="grid grid-pad">
		<h2><?php the_field('homepage_sec2_title'); ?></h2>
    </div>
</div><!--/.home-cta-->
<div class="sec3">
    <div class="grid grid-pad no-top">
		<?php get_template_part( 'part', 'events-home' ); ?>
    </div>
</div><!--/.sec3-->
 
<?php get_footer(); ?>