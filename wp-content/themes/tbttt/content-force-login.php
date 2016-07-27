<?php
/**
Force login
*/

?>

<div class="sec1">
  <div class="intro" id="contain">
    <h3 class="h-title"><span>You must login to view this content.</span></h3> 
	<p class="intro">Please enter the Member username / password you were provided in the form below.</p>
  </div><!--/.intro-->
</div><!--/.sec1-->

<div class="grid grid-pad">
  <div id="primary" class="content-area col-1-1">
    <main id="main" class="site-main" role="main">
    
      <form id="form-force-login" action="login" method="post">
	    <p class="status"></p>
	    <label for="username">Username</label>
	    <input id="username" type="text" name="username">
	    <label for="password">Password</label>
	    <input id="password" type="password" name="password">
	    <input class="submit_button" type="submit" value="Login" name="submit">
	     <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
	  </form><!--/#login-->
	  
    </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- grid -->
