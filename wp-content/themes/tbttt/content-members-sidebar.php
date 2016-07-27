<div class="sec1">
  <div class="intro" id="contain">
    <h3 class="h-title">
      <span><?php the_title(); ?></span>
    </h3>
    <?php if( get_field('interior_callout') ): //if field is entered...?>
    <p class="intro">
      <?php the_field('interior_callout'); ?>
    </p>
    <?php else: //no field is entered...?>
    <p class="intro-no-p"></p>
    <?php endif; ?>
  </div><!--/.intro-->
</div><!--/.sec1-->
<div class="grid grid-pad">
  <div class="content-area col-9-12" id="primary">
    <main class="site-main" id="main" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>
      <?php endwhile; // end of the loop. ?>
    </main><!--/#main -->
  </div><!--/#primary -->
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="secondary" class="widget-area col-3-12" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
  <?php endif; ?>
</div><!--/.grid -->