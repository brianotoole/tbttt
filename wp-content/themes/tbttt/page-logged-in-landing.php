<?php
/**
Template Name: Page, MAIN - Login protected
 */

if (is_user_logged_in()) {
  get_header('members-landing'); 
  get_template_part( 'content', 'members-landing' );
}
else {
  get_header(); 
  get_template_part( 'content', 'force-login' );
  get_footer(); 
};

while ( have_posts() ) : the_post(); 	

endwhile; // end of the loop. 
			
?>