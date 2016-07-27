<?php
/**
Template Name: Page, MAIN - Login protected
 */
get_header('no-hero'); 

while ( have_posts() ) : the_post(); 
			
if (is_user_logged_in()) {
  get_template_part( 'content', 'members-landing' );
}
else {
  echo '<h3>You must login to view this content.</h3>';
  echo '<div class="f">' . wp_login_form() . ' </div>';
};

endwhile; // end of the loop. 
			
//get_footer(); 
?>