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
  <div class="content-area col-1-1" id="primary">
    <main class="site-main" id="main" role="main">
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