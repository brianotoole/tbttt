<?php
/**
 * The template for displaying 404 pages (not found).
 */
 
get_header(); ?> 
<META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
<META NAME="ROBOTS" CONTENT="INDEX, NOFOLLOW">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <header class="entry-header">
		</header><!-- .entry-header -->

		<div class="page-title container full bg-maroon">
			<div class="row" id="container">
				<div class="col-sm-12">
				  <h1 class="entry-title">Page Not Found</h1>
				</div><!--/.col-->
			</div><!--/.row-->
		</div>
        
    
	<div class="grid grid-pad">
		<div id="primary" class="content-area col-1-1">
			<main id="main" class="site-main" role="main">
			<div class="entry-content">
				<h2>This Page Does Not Exist - 404.</h2>
				<p>Please <a href="<?php bloginfo('url'); ?>">click here to return to the homepage</a>.</p>
				<br />
			</div>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid -->
<?php get_footer(); ?>

