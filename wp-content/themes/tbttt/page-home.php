<?php
/**
Template Name: Home
 *
 */
get_header(); ?>



		<?php if( get_theme_mod( 'active_slider' ) == '') : ?>

 		<div class="flexslider"> 
          <ul class="slides">
          		<?php query_posts( array ( 'post_type' => 'post', 'posts_per_page' => 3, 'meta_key' => '_sn_primary_checkbox' ) );
			
					while ( have_posts() ) : the_post(); ?> 
                
                	<li>
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?>	
                    <section id="hero-header" data-speed="8" data-type="background" style="background: url('<?php echo $url?>')  50% 0 no-repeat fixed;">
                		<div class="slide-content-container">
                			<div class="slide-content">
                            <span>
               				<h2 class="animated fadeInDown"><?php the_title(); ?></h2> 
                            
                            <?php if (get_post_meta( $post->ID, '_sn_primary_button_text', true ) ): ?> 
                        	
                            <a href="<?php if (get_post_meta( $post->ID, '_sn_primary_url', true ) ): global $post; $text = get_post_meta( $post->ID, '_sn_primary_url', true ); echo $text;  else : the_permalink(); endif; ?>" class="featured-link"><button class="animated fadeInDown"><?php global $post; $text = get_post_meta( $post->ID, '_sn_primary_button_text', true ); echo $text; ?></button></a> 
                            
                            <?php endif; ?>
                               	  
                			</span> 
                			</div><!-- slide-content --> 
                		</div><!-- slide-content-container -->
                	</section><!-- hero-header --> 
  					</li>
        
				<?php endwhile; // end of the loop. ?> 
                  
          </ul><!-- slides -->
        </div><!-- flexslider -->
        
<?php else : ?> 
<!--hero--> 
<section class="hero" data-speed="" data-type="" style=""> 
  <div class="hero" id="container">                      
   <h2 class="animated delay">Dance. Sing. Act.</h2>
  </div><!--/.hero #container --> 
</section>

<?php endif; ?>
<?php // end if ?>  

<div class="sec1">
	<div class="intro" id="contain">
	<h3 class="">Our Mission</h3> 
		<p class="intro">To promote and encourage the advancement of education and cultural development of the performing arts by creating, furthering and producing opportunities for the youth of our community regardless of age or background.</p>
	</div><!--/.intro-->
</div>



<div class="sec2">
	<div class="intro" id="contain">
	<div class="row squeeze-in">
		<div class="col-sm-6 b-right">
			<h3><i class="fa fa-university"></i></h3>
			<h3>Provide Scholarships</h3> 
			<p>To promote and encourage the advancement of education and cultural development of the performing arts by creating, furthering and.</p>
		</div><hr class="visible-xs">
		<div class="col-sm-6">
			<h3><i class="fa fa-heart"></i></h3>
			<h3>Inspire Community</h3> 
			<p>To promote and encourage the advancement of education and cultural development of the performing arts by creating, furthering and.</p>
		</div><hr class="visible-xs">
		
		<div class="col-sm-6 b-right">
			<h3><i class="fa fa-video-camera"></i></h3>
			<h3>Develop Performing Arts</h3> 
			<p>To promote and encourage the advancement of education and cultural development of the performing arts by creating, furthering and.</p>
		</div><hr class="visible-xs">
		<div class="col-sm-6">
			<h3><i class="fa fa-check-circle-o"></i></h3>
			<h3>Inspire Community</h3> 
			<p>To promote and encourage the advancement of education and cultural development of the performing arts by creating, furthering and.</p>
		</div>
    </div><!--/.row-->
	</div><!--/.intro-->
</div>
	
	


<div class="home-cta">
    <div class="grid grid-pad no-top">
		<h2>Upcoming Events</h2>
    </div>
</div>
<div class="home-team">
    <div class="grid grid-pad no-top">
		<p>fadsfdsafadsfads</p>
    </div>
</div>


        
        <?php if( get_theme_mod( 'active_services' ) == '') : ?>    
        		
        	<div class="home-services">
            	
				<?php if ( get_theme_mod( 'services_text' ) ) : ?>
        			<div class="grid grid-pad">
            			<div class="col-1-1"><h6 class="wow animated fadeIn"><?php echo get_theme_mod( 'services_text' ); ?></h6></div>
            		</div><!-- grid --> 
                <?php else : ?>  
				<?php endif; ?>
                
                <?php
    			$service_sections = get_theme_mod( 'sensible_services_numbers' );
    			if( $service_sections != '' ) {
        		switch ( $service_sections ) { 
            	case 'option1':
                	// Do nothing. all services are displayed. 
                	break;
            	case 'option2':
                	echo '<style type="text/css">';
                	echo '.sbox-3 { display:none }'; 
                	echo '</style>';
                	break;
            	case 'option3':
                	echo '<style type="text/css">';
                	echo '.sbox-3, .sbox-2 { display:none }';
                	echo '</style>';   
                	break;
        			}
    				} 
				?>
                
        		<div class="grid grid-pad no-top"> 
                    
					<div class="col-1-3 tri-clear wow animated fadeIn" data-wow-delay="0.25s"> 
    					<div class="service sbox-1">
                        
                        <?php if( get_theme_mod( 'active_service_1' ) == '') : ?>
                        
                        	<?php if ( get_theme_mod( 'service_icon_1' ) ) : ?>
                				<i class="fa <?php echo get_theme_mod( 'service_icon_1' ); ?>"></i>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_title_1' ) ) : ?>
              					<h5><?php echo get_theme_mod( 'service_title_1' ); ?></h5>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_text_1' ) ) : ?>
              					<p class="member-description"><?php echo get_theme_mod( 'service_text_1' ); ?></p>
                            <?php endif; ?>
                            
                        <?php endif; ?>  
                             
  						</div><!-- member --> 
					</div><!-- col-1-3 --> 
                    
                    <div class="col-1-3 tri-clear wow animated fadeIn" data-wow-delay="0.25s"> 
    					<div class="service sbox-2">
                        
                        <?php if( get_theme_mod( 'active_service_2' ) == '') : ?>
                        
                        	<?php if ( get_theme_mod( 'service_icon_2' ) ) : ?>
                				<i class="fa <?php echo get_theme_mod( 'service_icon_2' ); ?>"></i>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_title_2' ) ) : ?>
              					<h5><?php echo get_theme_mod( 'service_title_2' ); ?></h5>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_text_2' ) ) : ?>
              					<p class="member-description"><?php echo get_theme_mod( 'service_text_2' ); ?></p>
                            <?php endif; ?> 
                            
                        <?php endif; ?> 
                             
  						</div><!-- member --> 
					</div><!-- col-1-3 --> 
     
                    <div class="col-1-3 tri-clear wow animated fadeIn" data-wow-delay="0.25s"> 
    					<div class="service sbox-3">
                        
                         <?php if( get_theme_mod( 'active_service_3' ) == '') : ?>
                        
                        	<?php if ( get_theme_mod( 'service_icon_3' ) ) : ?>
                				<i class="fa <?php echo get_theme_mod( 'service_icon_3' ); ?>"></i>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_title_3' ) ) : ?>
              					<h5><?php echo get_theme_mod( 'service_title_3' ); ?></h5>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_text_3' ) ) : ?>
              					<p class="member-description"><?php echo get_theme_mod( 'service_text_3' ); ?></p>
                            <?php endif; ?> 
                            
                        <?php endif; ?> 
                             
  						</div><!-- member --> 
					</div><!-- col-1-3 -->    
  
        		</div><!-- grid -->
        	</div><!-- home-services -->
              
		<?php else : ?>  
		<?php endif; ?>
		<?php // end if ?>  
        
        
        <?php if( get_theme_mod( 'active_blog' ) == '') : ?> 
        
        	<div class="home-news">
                
				<?php if ( get_theme_mod( 'blog_text' ) ) : ?>
                	<div class="grid grid-pad">
            			<div class="col-1-1">
                    		<h6 class="wow animated fadeIn"><?php echo get_theme_mod( 'blog_text' ); ?></h6>
                    	</div><!-- col-1-1 -->  
                    </div><!-- grid -->
                <?php else : ?> 
				<?php endif; ?> 
           	    	
            	<div class="grid grid-pad no-top">
                	<?php
						global $post;
						$args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'meta_query' => array(
        					'relation' => 'OR',
        					array(
            					'key' => '_sn_primary_checkbox',
            					'value' => false,
            					'type' => 'BOOLEAN'
        					),
        					array(
            					'key' => '_sn_primary_checkbox',
            					'compare' => 'NOT EXISTS'
        					)
    						)); 
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :	setup_postdata($post); ?>
              
                        <div class="col-1-3 tri-clear wow animated fadeInUp" data-wow-delay="0.25s">
            
            			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-blog'); ?></a>
						<h5><?php the_title(); ?></h5>
                        <p><?php $content = get_the_content(); echo wp_trim_words( $content , '20' ); ?> <a href="<?php the_permalink(); ?>"> Read More</a></p>
                        
                        </div><!-- col-1-3 -->

					<?php endforeach; ?>
        		</div><!-- grid -->
        	</div><!-- home-news -->
        	
            <?php if ( get_theme_mod( 'blog_cta' ) ) : ?>
        		
                <div class="home-blog-cta">
        			<div class="grid grid-pad">
            			<div class="col-1-1">
                			<a href="<?php if( get_option( 'show_on_front' ) == 'page' ) echo get_permalink( get_option('page_for_posts' ) );
else echo esc_url( home_url() );?>"><button class="outline white"><?php echo get_theme_mod( 'blog_cta' ); ?></button></a>  
        				</div><!-- col-1-1 --> 
            		</div><!-- grid -->
        		</div><!-- home-blog-cta -->
            
			<?php else : ?>  
			<?php endif; ?>
        
        <?php else : ?>  
		<?php endif; ?>
		<?php // end if ?> 
        
        <?php if( get_theme_mod( 'active_team' ) == '') : ?>   
        
        	<div class="home-team">
        		
                <?php if ( get_theme_mod( 'team_text' ) ) : ?>
                	
                    <div class="grid grid-pad">
            			<div class="col-1-1">
                        	<h6 class="wow animated fadeInRight"><?php echo get_theme_mod( 'team_text' ); ?></h6>
                        </div><!-- col-1-1 -->  
            		</div><!-- grid -->
                
				<?php else : ?>  
				<?php endif; ?>
                
                <?php
    			$member_sections = get_theme_mod( 'sensible_member_numbers' );  
    			if( $member_sections != '' ) {
        		switch ( $member_sections ) {  
            	case 'option1':
                	// Do nothing. All members are displayed.
                	break;
            	case 'option2':
                	echo '<style type="text/css">';
                	echo '.tbox-3 { display:none }'; 
                	echo '</style>';
                	break;
            	case 'option3':
                	echo '<style type="text/css">';
                	echo '.tbox-3, .tbox-2 { display:none }';
                	echo '</style>';
                	break;
        			} 
    				} 
				?>
                
        		<div class="grid grid-pad no-top">
    
					<div class="col-1-3 tri-clear wow animated fadeInLeft" data-wow-delay="0.15s">
    					<div class="member tbox-1">
                        
                        <?php if( get_theme_mod( 'active_member_1' ) == '') : ?>
                        
             	 			<?php if ( get_theme_mod( 'member_image_1' ) ) : ?>
        						<img src="<?php echo esc_url( get_theme_mod( 'member_image_1' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							<?php endif; ?>
                            
                            <?php if ( get_theme_mod( 'member_name_1' ) ) : ?>
              					<h5><?php echo get_theme_mod( 'member_name_1' ); ?></h5>
                            <?php endif; ?>
                            
                            <?php if ( get_theme_mod( 'member_text_1' ) ) : ?>
              					<p class="member-description"><?php echo get_theme_mod( 'member_text_1' ); ?></p>
                            <?php endif; ?> 
                    
                    		<?php if ( get_theme_mod( 'member_fb_1' ) ) : ?>
                    			<a href="<?php echo get_theme_mod( 'member_fb_1' ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'member_twitter_1' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'member_twitter_1' ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'member_linked_1' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'member_linked_1' ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'member_google_1' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'member_google_1' ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'member_email_1' ) ) : ?>
                    		<a href="mailto:<?php echo get_theme_mod( 'member_email_1' ); ?>" target="_blank"><i class="fa fa-envelope-o"></i></a>
                    		<?php endif; ?>
                            
                        <?php endif; ?> 
                    	
  						</div><!-- member --> 
					</div><!-- col-1-3 --> 
                    
                    <div class="col-1-3 tri-clear wow animated fadeInLeft" data-wow-delay="0.15s">
    					<div class="member tbox-2">
                        
                        <?php if( get_theme_mod( 'active_member_2' ) == '') : ?>
                        
             	 			<?php if ( get_theme_mod( 'member_image_2' ) ) : ?>
        						<img src="<?php echo esc_url( get_theme_mod( 'member_image_2' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							<?php endif; ?>
                            
                            <?php if ( get_theme_mod( 'member_name_2' ) ) : ?>
              					<h5><?php echo get_theme_mod( 'member_name_2' ); ?></h5>
                            <?php endif; ?>
                            
                            <?php if ( get_theme_mod( 'member_text_2' ) ) : ?>
              					<p class="member-description"><?php echo get_theme_mod( 'member_text_2' ); ?></p>
                            <?php endif; ?> 
                    
                    		<?php if ( get_theme_mod( 'member_fb_2' ) ) : ?>
                    			<a href="<?php echo get_theme_mod( 'member_fb_2' ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'member_twitter_2' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'member_twitter_2' ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'member_linked_2' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'member_linked_2' ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'member_google_2' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'member_google_2' ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'member_email_2' ) ) : ?>
                    		<a href="mailto:<?php echo get_theme_mod( 'member_email_2' ); ?>" target="_blank"><i class="fa fa-envelope-o"></i></a>
                    		<?php endif; ?>
                             
                    	<?php endif; ?>
                        
  						</div><!-- member --> 
					</div><!-- col-1-3 --> 
                    
                    <div class="col-1-3 tri-clear wow animated fadeInLeft" data-wow-delay="0.15s">
    					<div class="member tbox-3"> 
                        
                        <?php if( get_theme_mod( 'active_member_3' ) == '') : ?> 
                        
             	 			<?php if ( get_theme_mod( 'member_image_3' ) ) : ?>
        						<img src="<?php echo esc_url( get_theme_mod( 'member_image_3' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							<?php endif; ?>
                            
                            <?php if ( get_theme_mod( 'member_name_3' ) ) : ?>
              					<h5><?php echo get_theme_mod( 'member_name_3' ); ?></h5>
                            <?php endif; ?>
                            
                            <?php if ( get_theme_mod( 'member_text_3' ) ) : ?>
              					<p class="member-description"><?php echo get_theme_mod( 'member_text_3' ); ?></p>
                            <?php endif; ?> 
                    
                    		<?php if ( get_theme_mod( 'member_fb_3' ) ) : ?>
                    			<a href="<?php echo get_theme_mod( 'member_fb_3' ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'member_twitter_3' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'member_twitter_3' ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'member_linked_3' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'member_linked_3' ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'member_google_3' ) ) : ?>
                    		<a href="<?php echo get_theme_mod( 'member_google_3' ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                    		<?php endif; ?>
                    
                    		<?php if ( get_theme_mod( 'member_email_3' ) ) : ?>
                    		<a href="mailto:<?php echo get_theme_mod( 'member_email_3' ); ?>" target="_blank"><i class="fa fa-envelope-o"></i></a> 
                    		<?php endif; ?>
                             
                    	<?php endif; ?>
  						
                        </div><!-- member --> 
					</div><!-- col-1-3 --> 
                       
            	</div><!-- grid --> 
        	</div><!-- home-team -->
        
        <?php else : ?>  
		<?php endif; ?>
		<?php // end if ?>
        
        <?php if( get_theme_mod( 'active_home_widget' ) == '') : ?>   
        
        <div class="home-cta" style="background: url(<?php echo get_theme_mod( 'widget_bg_image' ); ?>) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">  
        	<div class="grid grid-pad"> 
            	<div class="col-1-1">  
                
                	<?php if ( get_theme_mod( 'home_widget_icon' ) ) : ?>
                		<i class="fa <?php echo get_theme_mod( 'home_widget_icon' ); ?>"></i>
                	<?php else : ?> 
					<?php endif; ?> 
                    
                    <?php if ( is_active_sidebar('home-widget') ) : ?>
    					<?php dynamic_sidebar('home-widget'); ?>    
    		 		<?php endif; ?>
    
                    
                    <?php if ( get_theme_mod( 'widget_button_url' ) ) : ?>  
    					<a href="<?php echo get_page_link(get_theme_mod('widget_button_url'))?>"><button class="outline white"><?php echo get_theme_mod( 'widget_button_text' ); ?></button></a>  
    				<?php else : ?>    
     				<?php endif; ?>
                    
                </div><!-- col-1-1 -->
            </div><!-- grid -->
        </div><!-- home-cta --> 
		
        <?php else : ?>  
		<?php endif; ?>
		<?php // end if ?>

<?php get_footer(); ?>
