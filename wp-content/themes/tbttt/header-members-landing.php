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
			  echo('<li>Logged in as: &nbsp;' . $current_user->user_firstname . '</li>');
			  echo '<li class="member-link-logout"><a href="'. wp_logout_url() .'">Logout</a></li>';
			}
			  else {
			  echo '<li id="member-login" class="member-link-login"><a href="#">Member Login</a> <i class="fa fa-caret-down" aria-hidden="true"></i></li>';
			};
			?>
	          
	      </ul>
	    </div>
	    
	    <div class="login-dropdown">
	      <div class="grid">
	        <form id="form-member-login" action="login" method="post">
              <p class="status"></p>
              <label for="username">Username</label>
              <input id="username" type="text" name="username">
              <label for="password">Password</label>
              <input id="password" type="password" name="password">
              <input class="submit_button" type="submit" value="Login" name="submit">
              <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
            </form><!--/#login-->
	      </div><!--/.grid-->
	    </div><!--/.login-dropdown-->
	    
	  </div><!--/.top-bar-->
	  
	  <div class="choose-bar">
	    <div class="grid">
          <div class="intro text-center">
            <h1 class="title">Choose Your Program:</h1>
          </div><!--/.intro--> 
	    </div><!--/.grid--> 
	  </div><!--/.choose-bar--> 

	</div><!--/grid-->        
    </header><!-- #masthead -->
    
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
		<h3>Menu</h3>  
		<?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>
	</nav>

