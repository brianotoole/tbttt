<?php
/**
Template Name: Page - Team Members
 */

get_header(); ?> 

        <header class="entry-header">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        		</div><!-- .col-1-1 -->
        	</div><!-- .grid -->
		</header><!-- .entry-header -->

	<div id="primary" class="content-area team-page">
		<main id="main" class="site-main" role="main">
		
        <div class="grid grid-pad">
        
        <?php
    			$page_member_sections = get_theme_mod( 'sensible_page_member_numbers' ); 
    			if( $page_member_sections != '' ) {
        		switch ( $page_member_sections ) {  
            	case 'option1':
                	// Do nothing. All members are displayed.
                	break;
            	case 'option2':
                	echo '<style type="text/css">';
                	echo '.page-tbox-3 { display:none }'; 
                	echo '</style>';
                	break;
            	case 'option3':
                	echo '<style type="text/css">';
                	echo '.page-tbox-3, .page-tbox-2 { display:none }';
                	echo '</style>';
                	break;
        			} 
    				} 
				?>

				<div class="page-tbox-1"> 
					<div class="col-1-3 tri-clear wow animated fadeInLeft" data-wow-delay="0.15s">
    					<div class="member">
                        
                        <?php if( get_theme_mod( 'page_active_member_1' ) == '') : ?>
                        
             	 			<?php if ( get_theme_mod( 'page_member_image_1' ) ) : ?>
        						<img src="<?php echo esc_url( get_theme_mod( 'page_member_image_1' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							<?php endif; ?>
                            
                            <?php if ( get_theme_mod( 'page_member_name_1' ) ) : ?>
              					<h5><?php echo get_theme_mod( 'page_member_name_1' ); ?></h5>
                            <?php endif; ?>
                            
                            <?php if ( get_theme_mod( 'page_member_text_1' ) ) : ?>
              					<p class="member-description"><?php echo get_theme_mod( 'page_member_text_1' ); ?></p>
                            <?php endif; ?> 
                    
                    		<?php if ( get_theme_mod( 'page_member_fb_1' ) ) : ?>
                    			<a href="<?php echo get_theme_mod( 'page_member_fb_1' ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'page_member_twitter_1' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'page_member_twitter_1' ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'page_member_linked_1' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'page_member_linked_1' ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'page_member_google_1' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'page_member_google_1' ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'page_member_email_1' ) ) : ?>
                    		<a href="mailto:<?php echo get_theme_mod( 'page_member_email_1' ); ?>" target="_blank"><i class="fa fa-envelope-o"></i></a>
                    		<?php endif; ?>
                            
                        <?php endif; ?> 
                    	
  						</div><!-- member --> 
					</div><!-- col-1-3 -->
                </div>
                
                <div class="page-tbox-2">    
                    <div class="col-1-3 tri-clear wow animated fadeInLeft" data-wow-delay="0.15s">
    					<div class="member">
                        
                        <?php if( get_theme_mod( 'page_active_member_2' ) == '') : ?>
                        
             	 			<?php if ( get_theme_mod( 'page_member_image_2' ) ) : ?>
        						<img src="<?php echo esc_url( get_theme_mod( 'page_member_image_2' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							<?php endif; ?>
                            
                            <?php if ( get_theme_mod( 'page_member_name_2' ) ) : ?>
              					<h5><?php echo get_theme_mod( 'page_member_name_2' ); ?></h5>
                            <?php endif; ?>
                            
                            <?php if ( get_theme_mod( 'page_member_text_2' ) ) : ?>
              					<p class="member-description"><?php echo get_theme_mod( 'page_member_text_2' ); ?></p>
                            <?php endif; ?> 
                    
                    		<?php if ( get_theme_mod( 'page_member_fb_2' ) ) : ?>
                    			<a href="<?php echo get_theme_mod( 'page_member_fb_2' ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'page_member_twitter_2' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'page_member_twitter_2' ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'page_member_linked_2' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'page_member_linked_2' ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'page_member_google_2' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'page_member_google_2' ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'page_member_email_2' ) ) : ?>
                    		<a href="mailto:<?php echo get_theme_mod( 'page_member_email_2' ); ?>" target="_blank"><i class="fa fa-envelope-o"></i></a>
                    		<?php endif; ?>
                             
                    	<?php endif; ?>
                        
  						</div><!-- member --> 
					</div><!-- col-1-3 -->
                 </div>
                    
                 <div class="page-tbox-3">
                    <div class="col-1-3 tri-clear wow animated fadeInLeft" data-wow-delay="0.15s">
    					<div class="member"> 
                        
                        <?php if( get_theme_mod( 'page_active_member_3' ) == '') : ?> 
                        
             	 			<?php if ( get_theme_mod( 'page_member_image_3' ) ) : ?>
        						<img src="<?php echo esc_url( get_theme_mod( 'page_member_image_3' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							<?php endif; ?>
                            
                            <?php if ( get_theme_mod( 'page_member_name_3' ) ) : ?>
              					<h5><?php echo get_theme_mod( 'page_member_name_3' ); ?></h5>
                            <?php endif; ?>
                            
                            <?php if ( get_theme_mod( 'page_member_text_3' ) ) : ?>
              					<p class="member-description"><?php echo get_theme_mod( 'member_text_3' ); ?></p>
                            <?php endif; ?> 
                    
                    		<?php if ( get_theme_mod( 'page_member_fb_3' ) ) : ?>
                    			<a href="<?php echo get_theme_mod( 'page_member_fb_3' ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'page_member_twitter_3' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'page_member_twitter_3' ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'page_member_linked_3' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'page_member_linked_3' ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'page_member_google_3' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'page_member_google_3' ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'page_member_email_3' ) ) : ?>
                    		<a href="mailto:<?php echo get_theme_mod( 'page_member_email_3' ); ?>" target="_blank"><i class="fa fa-envelope-o"></i></a> 
                    		<?php endif; ?>
                             
                    	<?php endif; ?>
  						
                        </div><!-- member -->  
					</div><!-- col-1-3 -->
                </div> 
                    
            <div class="grid grid-pad">
				<div class="content-area col-1-1">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'page' ); ?> 

					<?php endwhile; // end of the loop. ?>

				</div><!-- col-1-1 -->
			</div><!-- grid --> 
		
        </div><!-- .grid -->  

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
