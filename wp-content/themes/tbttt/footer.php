<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sensible
 */
?>

	</section><!-- #content --> 
    
    
    <?php if( get_theme_mod( 'active_footer_social' ) == '') : ?>
        
        	<div class="social-bar"> 
        		<div class="grid grid-pad">
        			<div class="col-1-1">
                
                	<?php if ( get_theme_mod( 'footer_social_text' ) ) : ?>
        			  	<span class="wow animated fadeIn"><?php echo get_theme_mod( 'footer_social_text' ); ?></span>
                	<?php else : ?>  
					<?php endif; ?> 
              			<div class="wow animated fadeIn">
                        	<ul class='social-media-icons'>
                            	<?php if ( get_theme_mod( 'sensible_fb' ) ) : ?>
                                	<li>
                                    <a href="<?php echo get_theme_mod( 'sensible_fb' ); ?>">
                                    <i class="fa fa-facebook"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'sensible_twitter' ) ) : ?>
                                	<li>
                                    <a href="<?php echo get_theme_mod( 'sensible_twitter' ); ?>">
                                    <i class="fa fa-twitter"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'sensible_linked' ) ) : ?>
                                	<li>
                                    <a href="<?php echo get_theme_mod( 'sensible_linked' ); ?>">
                                    <i class="fa fa-linkedin"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'sensible_google' ) ) : ?>
                                	<li>
                                    <a href="<?php echo get_theme_mod( 'sensible_google' ); ?>">
                                    <i class="fa fa-google-plus"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'sensible_instagram' ) ) : ?>
                                	<li>
                                    <a href="<?php echo get_theme_mod( 'sensible_instagram' ); ?>">
                                    <i class="fa fa-instagram"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'sensible_flickr' ) ) : ?>
                                	<li>
                                    <a href="<?php echo get_theme_mod( 'sensible_flickr' ); ?>">
                                    <i class="fa fa-flickr"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'sensible_pinterest' ) ) : ?>
                                	<li>
                                    <i class="fa fa-pinterest"></i>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'sensible_youtube' ) ) : ?>
                                	<li>
                                    <a href="<?php echo get_theme_mod( 'sensible_youtube' ); ?>">
                                    <i class="fa fa-youtube"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'sensible_vimeo' ) ) : ?>
                                	<li>
                                    <a href="<?php echo get_theme_mod( 'sensible_vimeo' ); ?>">
                                    <i class="fa fa-vimeo-square"></i>
                                    </a>
                                    </li> 
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'sensible_tumblr' ) ) : ?>
                                	<li>
                                    <a href="<?php echo get_theme_mod( 'sensible_tumblr' ); ?>">
                                    <i class="fa fa-tumblr"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'sensible_dribbble' ) ) : ?>
                                	<li>
                                    <a href="<?php echo get_theme_mod( 'sensible_dribbble' ); ?>">
                                    <i class="fa fa-dribbble"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'sensible_rss' ) ) : ?>
                                	<li>
                                    <a href="<?php echo get_theme_mod( 'sensible_rss' ); ?>"> 
                                    <i class="fa fa-rss"></i>
                                    </a>
                                    </li>   
								<?php endif; ?> 
                        	</ul>
                        </div>   
                
                	</div><!-- col-1-1 -->
        		</div><!-- grid -->
        	</div><!-- social-bar -->
        
        <?php else : ?>  
		<?php endif; ?>
		<?php // end if ?>
    
<div class="footer-cta">
	<div class="grid grid-pad">
		<div class="col-1-1">
			<h2>Stay Connected</h2> 
		</div><!-- col-1-1 --> 
	</div><!-- grid -->
</div>

<div class="footer-contact">
	<div class="grid grid-pad row">
		<div class="col-sm-4 col-xs-12 b-right">
			<h3>Directions</h3>
			<iframe class="visible-lg visible-md visible-sm" src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1436829367014!6m8!1m7!1s63pv_7or4kXc-Qkmm9iRYg!2m2!1d28.098447!2d-82.504927!3f351!4f0!5f0.7820865974627469" width="335" height="215" frameborder="0" style="border:0" allowfullscreen></iframe>
			<a href="#" class="visible-xs button maroon">Open Maps</a>
		</div><hr class="visible-xs">
		
		<div class="col-sm-4 col-xs-12 b-right">
			<h3>Contact</h3>
			<div class="item">
				<strong>Tampa Bay Triple Threat Theatre, T3</strong>
				<p>15906 Mapledale Dr., Tampa, FL 33624</p>
				<p>PH: <a href="tel:813-969-0240<">813-969-0240</a></p>
			</div>
			<div class="item">
				<strong>Executive Director</strong>
				<p>First Lastname<br><a href="mailto:ttt@mjpaa.com" target="_blank">ttt@mjpaa.com</a></p>
			</div>
			<div class="social-page-links">
			
		</div><hr class="visible-xs">
		</div>
		<div class="col-sm-4 col-xs-12">
			<h3>Donate</h3>
			<p>We are only as strong as our community.</p>
			<a href="#" class="button maroon">Donate</a>
		</div>
	</div><!-- grid -->
</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="grid grid-pad">
			<div class="site-info col-1-1">
				<?php if ( get_theme_mod( 'sensible_footerid' ) ) : ?> 
        			<?php echo get_theme_mod( 'sensible_footerid' ); // footer id ?>  
				<?php else : ?>  
				<?php endif; ?>
			</div><!-- .site-info -->
        </div><!-- grid --> 
	</footer><!-- #colophon -->

</div><!-- #page --> 

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<?php wp_footer(); ?>

</body>
</html>
