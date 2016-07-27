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

	<header id="masthead" class="site-header post-password-required" role="banner">
	  <div class="top-bar">
	    <div class="grid">
	    
	      <ul class="links">
			<?php  if (is_user_logged_in()){
			  global $current_user; get_currentuserinfo();
			  echo('<li>Hello, &nbsp;' . $current_user->user_firstname . '</li>');
			  echo '<li><a href="'. wp_logout_url() .'">Logout</a></li>';
			}
			  else {
			  echo '<li><a href="#" id="member-login">Member Login</a>';
			};
			?>
	          <div class="login-dropdown">
			   <?php wp_login_form(); ?>
			  </div><!--/.login-container-->
	        <!--<li><a href="#">Another Link</a>-->
	      </ul>
	    </div>
	  </div><!--/.top-bar-->

	</div><!--/grid-->        
    </header><!-- #masthead -->
    
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
		<h3>Menu</h3>  
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav>

