<?php
/**
Template Name: Home
 *
 */
get_header(); ?>

<!--hero--> 
<section class="hero">
  <div class="img" style="background: url('<?php the_field('fadeshow_img1'); ?>') top center no-repeat fixed;background-size:cover;"></div> 
  <div class="img" style="background: url('<?php the_field('fadeshow_img2'); ?>') 0 0 no-repeat fixed;background-size:cover;"></div> 
  <div class="img" style="background: url('<?php the_field('fadeshow_img3'); ?>') 0 0 no-repeat fixed;background-size:cover;"></div>
  <div class="img" style="background: url('<?php the_field('fadeshow_img4'); ?>') 0 0 no-repeat fixed;background-size:cover;"></div>
     <div class="home-hero" id="container">                      
        <h2 class="hidden-xs animateSlow fadeIn"><?php the_field('fadeshow_overlay_text'); ?></h2>
        <h2 class="visible-xs"><?php the_field('fadeshow_overlay_text'); ?></h2>
      </div><!--/.hero #container --> 
</section><!--/section.hero-->


<div class="sec1">
	<div class="intro" id="contain">
	<h3 class="h-title"><span><?php the_field('homepage_sec1_title'); ?></span></h3> 
		<p class="intro"><?php the_field('homepage_sec1_callout'); ?></p>
	</div><!--/.intro-->
</div><!--/.sec1-->


<div class="sec2">
	<div class="intro" id="contain">
	<div class="row squeeze-in">
		<div class="col-sm-6 b-right">
			<h3><i class="fa fa-university"></i></h3>
			<h3><?php the_field('homepage_pillar_title_1'); ?></h3> 
			<p><?php the_field('homepage_pillar_1'); ?></p>
		</div><hr class="visible-xs">
		<div class="col-sm-6">
			<h3><i class="fa fa-heart"></i></h3>
			<h3><?php the_field('homepage_pillar_title_2'); ?></h3> 
			<p><?php the_field('homepage_pillar_2'); ?></p>
		</div><hr class="visible-xs">
		
		<div class="col-sm-6 b-right">
			<h3><i class="fa fa-video-camera"></i></h3>
			<h3><?php the_field('homepage_pillar_title_3'); ?></h3> 
			<p><?php the_field('homepage_pillar_3'); ?></p>
		</div><hr class="visible-xs">
		<div class="col-sm-6">
			<h3><i class="fa fa-music"></i></h3>
			<h3><?php the_field('homepage_pillar_title_4'); ?></h3> 
			<p><?php the_field('homepage_pillar_4'); ?></p>
		</div>
    </div><!--/.row-->
	</div><!--/.intro-->
</div><!--/.sec2-->
	

<div class="home-cta">
    <div class="grid grid-pad">
		<h2><?php the_field('homepage_sec2_title'); ?></h2>
    </div>
</div><!--/.home-cta-->
<div class="sec3">
    <div class="grid grid-pad no-top">
		<?php get_template_part( 'part', 'events' ); ?>
    </div>
</div><!--/.sec3-->


 
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
        

<?php get_footer(); ?>