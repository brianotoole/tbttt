<?php
/**
Template Name: Page, Full - Login protected
 */
 
get_header(); 

if (is_user_logged_in()) { 
  get_template_part( 'content', 'members-full' );
}
else {
  get_template_part( 'content', 'force-login' );
};

while ( have_posts() ) : the_post(); 	
endwhile; // end of the loop. 

get_footer(); 	
	
?>