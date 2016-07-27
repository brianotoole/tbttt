<?php
/**
Template Name: Page, Sidebar - Login protected
*/
 
get_header(); 

if (is_user_logged_in()) { 
  get_template_part( 'content', 'members-sidebar' );
}
else {
  get_template_part( 'content', 'force-login' );
};

get_footer(); 	
	
?>