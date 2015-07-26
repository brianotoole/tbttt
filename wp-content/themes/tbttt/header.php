<?php
/**
 * The header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/ico">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- GA -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64721160-2', 'auto');
  ga('send', 'pageview');
</script>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sensible' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
    	<div class="grid grid-pad head-overflow">
			<div class="site-branding">
				
				<?php if ( get_theme_mod( 'sensible_logo' ) ) : ?>    
    				<div class="site-logo"> 
       					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'sensible_logo' ) ); ?>' <?php if ( get_theme_mod( 'logo_size' ) ) : ?>width="<?php echo get_theme_mod( 'logo_size' ); ?>"<?php endif; ?> alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a> 
    				</div><!-- site-logo -->
				<?php else : ?>
    				<hgroup> 
       					<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
    				</hgroup>
				<?php endif; ?> 
			
            </div><!-- site-branding -->
			<div class="navigation-container">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle toggle-menu menu-right push-body"><?php _e( '<i class="fa fa-bars"></i> Menu', 'sensible' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
        	</div><!-- navigation-container -->
        </div>
	</div><!--/grid-->        
    </header><!-- #masthead -->
    
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
		<h3>Menu</h3>  
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav>

	<section id="content" class="site-content">
	
<?php //random page headers
$bg = array( //create array of images 
''.site_url('/wp-content/uploads/2015/07/ttt_hero1.jpg').'', //cindy fairies
''.site_url('/wp-content/uploads/2015/07/annie_interior.jpg').'', //annie
''.site_url('/wp-content/uploads/2015/07/wizard_hero.jpg').'' //wizard of oz
 );
$i = rand(0, count($bg)-1); //generate random number of the array 
$selectedBg = "$bg[$i]"; //create & set variable equal to which random image was chosen 
?>

<?php if (is_archive() || is_category() ): //category or archive, random header ?>
<header class="entry-header" style="background: url('<?php echo $selectedBg; ?>') center center no-repeat; background-size:cover;">
</header><!-- .entry-header -->

<?php elseif (has_post_thumbnail( $post->ID ) ): //if featured img is uploaded, show it as header ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>   
<header class="entry-header" style="background: url('<?php echo $image; ?>') center center no-repeat;background-size:cover;">
</header><!-- .entry-header --> 

<?php elseif (is_front_page() ): //is front page, do front page template stuff (nothing here) ?>
<?php else : //no featured img is uploaded, random header again... called last as override ?>	
<header class="entry-header" style="background: url('<?php echo $selectedBg; ?>') center center no-repeat;background-size:cover;">
</header><!-- .entry-header -->

<?php endif; ?>