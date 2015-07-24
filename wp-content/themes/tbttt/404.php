<?php
/**
 * The template for displaying 404 pages (not found).
 */
 
get_header(); ?> 
<META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
<META NAME="ROBOTS" CONTENT="INDEX, NOFOLLOW">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

		<div class="sec1">
			<div class="intro" id="contain">
			<h3 class="h-title"><span>This Page Does Not Exist - 404</span></h3> 
				 <p class="intro-no-p"></p>
			</div><!--/.intro-->
		</div><!--/.sec1-->
        
	<div class="grid grid-pad">
		<div id="primary" class="content-area col-1-1">
			<main id="main" class="site-main" role="main">
			<div class="entry-content text-center">
				<p>Please <a href="<?php bloginfo('url'); ?>">click here to return to the homepage</a>.</p>
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
			</div>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid -->
<?php get_footer(); ?>

