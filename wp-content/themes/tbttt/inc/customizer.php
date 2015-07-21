<?php
/**
 * Sensible Theme Customizer
 *
 * @package sensible
 */
 
function sensible_theme_customizer( $wp_customize ) {
	
	//allows donations
    class Sensible_Info extends WP_Customize_Control {
     
        public $label = '';
        public function render_content() {
        ?>

        <?php
        }
    }	
	

	// Fonts  
    $wp_customize->add_section(
        'sensible_typography',
        array(
            'title' => __('Google Fonts', 'sensible' ),   
            'priority' => 40,
    ));
	
    $font_choices = 
        array(
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Oswald:400,700' => 'Oswald',
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Rokkitt:400' => 'Rokkitt',
    );
    
    $wp_customize->add_setting(
        'headings_fonts',
        array(
            'sanitize_callback' => 'sensible_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'headings_fonts',
        array(
            'type' => 'select',
            'description' => __('Select your desired font for the headings. Open Sans is the default Heading font.', 'sensible'),
            'section' => 'sensible_typography',
            'choices' => $font_choices
    ));
    
    $wp_customize->add_setting(
        'body_fonts',
        array(
            'sanitize_callback' => 'sensible_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'body_fonts',
        array(
            'type' => 'select',
            'description' => __( 'Select your desired font for the body. Open Sans is the default Body font.', 'sensible' ), 
            'section' => 'sensible_typography',  
            'choices' => $font_choices 
    )); 

	
	//Animations
	//$wp_customize->add_section( 'sensible_animations' , array(  
	 //   'title'       => __( 'Animations', 'sensible' ),
	 //   'priority'    => 22, 
	 //   'description' => 'We can make things fly across the screen.',
	//));
	
//  $wp_customize->add_setting(
    //    'sensible_animate',
    //    array(
    //        'sanitize_callback' => 'sensible_sanitize_checkbox',
    //        'default' => 0,
    //));
	
    //$wp_customize->add_control( 
    //    'sensible_animate',
    //    array(
    //        'type' => 'checkbox',
    //        'label' => __('Check this box if you want to disable the animations.', 'sensible'),
    //        'section' => 'sensible_animations',  
   //         'priority' => 1,           
   // ));

    // Logo upload
    $wp_customize->add_section( 'sensible_logo_section' , array(  
	    'title'       => __( 'Logo and Icons', 'sensible' ),
	    'priority'    => 21, 
	    'description' => 'Upload a logo to replace the default site name and description in the header. Also, upload your site favicon and Apple Icons.',
	));

	$wp_customize->add_setting( 'sensible_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sensible_logo', array( 
		'label'    => __( 'Logo', 'sensible' ),
		'section'  => 'sensible_logo_section', 
		'settings' => 'sensible_logo',
		'priority' => 1,
	))); 
	
	// Logo Width
	$wp_customize->add_setting( 'logo_size', array(
	    'sanitize_callback' => 'sensible_sanitize_text',
		'default'	        => '200'  
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'logo_size', array( 
		'label'    => __( 'Change the width of the Logo in PX.', 'sensible' ),
		'description'    => __( 'Only enter numeric value', 'sensible' ),
		'section'  => 'sensible_logo_section', 
		'settings' => 'logo_size',  
		'priority'   => 2 
	)));
	
	//Favicon Upload
	$wp_customize->add_setting(
		'site_favicon',
		array(
			'default' => (get_stylesheet_directory_uri( 'stylesheet_directory') . '/img/favicon.png'), 
			'sanitize_callback' => 'esc_url_raw',
	));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'site_favicon',
            array(
               'label'          => __( 'Upload your favicon (16x16 pixels)', 'sensible' ),
			   'type' 			=> 'image',
               'section'        => 'sensible_logo_section',
               'settings'       => 'site_favicon',
               'priority' => 2,
    )));
	
    //Apple touch icon 144
    $wp_customize->add_setting(
        'apple_touch_144',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_144',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (144x144 pixels)', 'sensible' ),
               'type'           => 'image',
               'section'        => 'sensible_logo_section',
               'settings'       => 'apple_touch_144',
               'priority'       => 11,
    )));
	
    //Apple touch icon 114
    $wp_customize->add_setting(
        'apple_touch_114',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw', 
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_114',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (114x114 pixels)', 'sensible' ),
               'type'           => 'image',
               'section'        => 'sensible_logo_section',
               'settings'       => 'apple_touch_114',
               'priority'       => 12,
    )));
	
    //Apple touch icon 72
    $wp_customize->add_setting(
        'apple_touch_72',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_72',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (72x72 pixels)', 'sensible' ),
               'type'           => 'image',
               'section'        => 'sensible_logo_section',
               'settings'       => 'apple_touch_72',
               'priority'       => 13,
    )));
	
    //Apple touch icon 57
    $wp_customize->add_setting(
        'apple_touch_57',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_57',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (57x57 pixels)', 'sensible' ),
               'type'           => 'image',
               'section'        => 'sensible_logo_section',
               'settings'       => 'apple_touch_57',
               'priority'       => 14,
    )));
	
	// Slider Section
	$wp_customize->add_section( 'sensible_slider_section', array(
		'title'          => 'Slider',
		'priority'       => 24,
		'description' => 'Edit your Slider' 
	));
	
	$wp_customize->add_setting('active_slider',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control(
    'active_slider', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Slider',  
        'section' => 'sensible_slider_section', 
		'priority'   => 1
    )); 
	
	// Home Social Panel
	$wp_customize->add_panel( 'social_panel', array(
    'priority'       => 25,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Home Social Section',
    'description'    => 'Edit your home page social media icons',
	));
	
	// Social Section 
	$wp_customize->add_section( 'sensible_settings', array(
            'title'          => 'Social Media Icons',
            'priority'       => 38,
			'panel' => 'social_panel',  
    ) );
	
	// Home Social Section 
	$wp_customize->add_setting('active_social',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control( 
    'active_social', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Home Social Section',  
        'section' => 'sensible_settings', 
		'priority'   => 1
    ));
	
	// Social Text
		$wp_customize->add_setting( 'social_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	    )); 

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_text', array(
		'label'    => __( 'Socials Heading', 'sensible' ),
		'section'  => 'sensible_settings',
		'settings' => 'social_text',
		'priority'   => 1
		) ) ); 
	
	// Facebook
	$wp_customize->add_setting( 'sensible_fb',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_fb', array(
		'label'    => __( 'Facebook URL:', 'sensible' ),
		'section'  => 'sensible_settings', 
		'settings' => 'sensible_fb',
		'priority'   => 2
	))); 
	
	// Twitter
	$wp_customize->add_setting( 'sensible_twitter',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_twitter', array(
		'label'    => __( 'Twitter URL:', 'sensible' ),
		'section'  => 'sensible_settings', 
		'settings' => 'sensible_twitter',
		'priority'   => 3
	))); 
	
	// LinkedIn
	$wp_customize->add_setting( 'sensible_linked',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_linked', array(
		'label'    => __( 'LinkedIn URL:', 'sensible' ),
		'section'  => 'sensible_settings', 
		'settings' => 'sensible_linked',
		'priority'   => 4
	)));
	
	// Google Plus
	$wp_customize->add_setting( 'sensible_google',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_google', array(
		'label'    => __( 'Google Plus URL:', 'sensible' ),
		'section'  => 'sensible_settings', 
		'settings' => 'sensible_google',
		'priority'   => 5
	)));
	
	// Instagram
	$wp_customize->add_setting( 'sensible_instagram',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_instagram', array(
		'label'    => __( 'Instagram URL:', 'sensible' ),
		'section'  => 'sensible_settings', 
		'settings' => 'sensible_instagram',
		'priority'   => 6 
	)));
	
	// Flickr
	$wp_customize->add_setting( 'sensible_flickr',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_flickr', array(
		'label'    => __( 'Flickr URL:', 'sensible' ),
		'section'  => 'sensible_settings', 
		'settings' => 'sensible_flickr',
		'priority'   => 7
	)));
	
	// Pinterest
	$wp_customize->add_setting( 'sensible_pinterest',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_pinterest', array(
		'label'    => __( 'Pinterest URL:', 'sensible' ),
		'section'  => 'sensible_settings', 
		'settings' => 'sensible_pinterest',
		'priority'   => 8
	)));
	
	// Youtube
	$wp_customize->add_setting( 'sensible_youtube',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_youtube', array(
		'label'    => __( 'YouTube URL:', 'sensible' ),
		'section'  => 'sensible_settings', 
		'settings' => 'sensible_youtube',  
		'priority'   => 9
	)));
	
	// Vimeo
	$wp_customize->add_setting( 'sensible_vimeo',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_vimeo', array(
		'label'    => __( 'Vimeo URL:', 'sensible' ),
		'section'  => 'sensible_settings', 
		'settings' => 'sensible_vimeo',
		'priority'   => 10
	)));
	
	// Tumblr
	$wp_customize->add_setting( 'sensible_tumblr',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_tumblr', array(
		'label'    => __( 'Tumblr URL:', 'sensible' ),
		'section'  => 'sensible_settings', 
		'settings' => 'sensible_tumblr', 
		'priority'   => 11 
	)));
	
	// Dribbble
	$wp_customize->add_setting( 'sensible_dribbble',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_dribbble', array(
		'label'    => __( 'Dribbble URL:', 'sensible' ),
		'section'  => 'sensible_settings', 
		'settings' => 'sensible_dribbble',
		'priority'   => 12
	)));
	
	// RSS
	$wp_customize->add_setting( 'sensible_rss',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_rss', array(
		'label'    => __( 'RSS URL:', 'sensible' ),
		'section'  => 'sensible_settings', 
		'settings' => 'sensible_rss',
		'priority'   => 13 
	)));
	
	// Home Intro Panel
	$wp_customize->add_panel( 'intro_panel', array(
    'priority'       => 26,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Home Intro Section',
    'description'    => 'Edit your home page intro settings',
	));
	
	// Home Intro Section
	$wp_customize->add_section( 'sensible_intro_section', array(
		'title'          => 'Home Intro Section',
		'priority'       => 10,
		'description' => 'Edit your home page Intro section content',
		'panel' => 'intro_panel',
	));
	
	// Home Intro Section
	$wp_customize->add_setting('active_intro',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	); 
	
	$wp_customize->add_control( 
    'active_intro', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Home Intro Section',  
        'section' => 'sensible_intro_section', 
		'priority'   => 1  
    ));
	
	// Intro Text
	$wp_customize->add_setting( 'intro_text' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'intro_text', array(
		'label'    => __( 'Intro Title Text', 'sensible' ),
		'section'  => 'sensible_intro_section', 
		'settings' => 'intro_text', 
		'priority'   => 2
	)));
	
	// Intro Text Box
	$wp_customize->add_setting( 'intro_textbox' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'intro_textbox', array( 
    'label' => __( 'Intro Text Box', 'sensible' ), 
    'section' => 'sensible_intro_section',
    'settings' => 'intro_textbox', 
	'type'     => 'textarea', 
	'priority'   => 3
	)));
	
	// Home Services Panel
	$wp_customize->add_panel( 'services_panel', array(
    'priority'       => 27,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Home Services Section',
    'description'    => 'Edit your home page Services settings. Upgrade to <a href="http://modernthemes.net/wordpress-themes/sensible-pro/" target="_blank">Sensible Pro</a> and receive 3 additional service boxes.',
	) );
	
	// Home Services Section
	$wp_customize->add_section( 'sensible_services_section', array(
		'title'          => 'Home Services Content',
		'priority'       => 10,
		'description' => 'Edit your home page Services content. Upgrade to <a href="http://modernthemes.net/wordpress-themes/sensible-pro/" target="_blank">Sensible Pro</a> and receive 3 additional service boxes.', 
		'panel' => 'services_panel',  
	));

	$wp_customize->add_setting('active_services', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'active_services', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Services Section',  
        'section' => 'sensible_services_section', 
		'priority'   => 1
    ));
	
	// Services Text
	$wp_customize->add_setting( 'services_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	    ) 
	); 

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_text', array(
		'label'    => __( 'Services Title Text', 'sensible' ),
		'section'  => 'sensible_services_section', 
		'settings' => 'services_text', 
		'priority'   => 2
	) ) );
	
	// Number of Services 
	$wp_customize->add_setting( 'sensible_services_numbers', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'sensible_sanitize_service_content', 
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_services_numbers', array(
		'label'    => __( 'Number of services to display', 'sensible' ),
		'section'  => 'sensible_services_section',
		'settings' => 'sensible_services_numbers',
		'type'     => 'radio',
		'priority'   => 3, 
		'choices'  => array(
			'option1' => 'All',
			'option2' => '2', 
			'option3' => '1', 
			),
	)));
	
	// Home Service Box 1 Section
	$wp_customize->add_section( 'sensible_services_box_1', array(
		'title'          => 'Services Box 1',
		'priority'       => 20,
		'description' => 'Edit your home page services box 1. Choose from any of <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">these icons</a>. Example: "fa-arrow-right".',
		'panel' => 'services_panel', 
	));
	
	$wp_customize->add_setting('active_service_1', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'active_service_1', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Service Box 1',  
        'section' => 'sensible_services_box_1', 
		'priority'   => 1
    ));
	
	// Service Icon 1
	$wp_customize->add_setting( 'service_icon_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service_icon_1', array(
		'label'    => __( 'Service Icon 1', 'sensible' ),
		'section'  => 'sensible_services_box_1', 
		'settings' => 'service_icon_1', 
		'priority'   => 2
	)));
	
	// Service Title 1
	$wp_customize->add_setting( 'service_title_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service_title_1', array(
		'label'    => __( 'Service Title 1', 'sensible' ),
		'section'  => 'sensible_services_box_1',
		'settings' => 'service_title_1', 
		'priority'   => 3
	)));
	
	// Service Text 1
	$wp_customize->add_setting( 'service_text_1' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service_text_1', array( 
    'label' => __( 'Service Text Box 1', 'sensible' ), 
    'section' => 'sensible_services_box_1',
    'settings' => 'service_text_1', 
	'type'     => 'textarea', 
	'priority'   => 4
	)));
	
	// Home Service Box 2 Section
	$wp_customize->add_section( 'sensible_services_box_2', array(
		'title'          => 'Services Box 2',
		'priority'       => 30,
		'description' => 'Edit your home page services box 2. Choose from any of <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">these icons</a>. Example: "fa-arrow-right".',
		'panel' => 'services_panel', 
	));
	
	$wp_customize->add_setting('active_service_2', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'active_service_2', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Service Box 2',  
        'section' => 'sensible_services_box_2', 
		'priority'   => 1
    ));
	
	// Service Icon 2
	$wp_customize->add_setting( 'service_icon_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service_icon_2', array(
		'label'    => __( 'Service Icon 2', 'sensible' ),
		'section'  => 'sensible_services_box_2', 
		'settings' => 'service_icon_2', 
		'priority'   => 2
	)));
	
	// Service Title 2
	$wp_customize->add_setting( 'service_title_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service_title_2', array(
		'label'    => __( 'Service Title 2', 'sensible' ),
		'section'  => 'sensible_services_box_2',
		'settings' => 'service_title_2', 
		'priority'   => 3
	)));
	
	// Service Text 2
	$wp_customize->add_setting( 'service_text_2' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service_text_2', array( 
    'label' => __( 'Service Text Box 2', 'sensible' ), 
    'section' => 'sensible_services_box_2',
    'settings' => 'service_text_2', 
	'type'     => 'textarea', 
	'priority'   => 4
	)));
	
	// Home Service Box 3 Section
	$wp_customize->add_section( 'sensible_services_box_3', array(
		'title'          => 'Services Box 3',
		'priority'       => 40,
		'description' => 'Edit your home page services box 3. Choose from any of <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">these icons</a>. Example: "fa-arrow-right".',
		'panel' => 'services_panel',  
	));
	
	$wp_customize->add_setting('active_service_3', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'active_service_3', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Service Box 3',
        'section' => 'sensible_services_box_3', 
		'priority'   => 1
    ));
	
	// Service Icon 3
	$wp_customize->add_setting( 'service_icon_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service_icon_3', array(
		'label'    => __( 'Service Icon 3', 'sensible' ),
		'section'  => 'sensible_services_box_3', 
		'settings' => 'service_icon_3', 
		'priority'   => 2
	)));
	
	// Service Title 3
	$wp_customize->add_setting( 'service_title_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service_title_3', array(
		'label'    => __( 'Service Title 3', 'sensible' ),
		'section'  => 'sensible_services_box_3',
		'settings' => 'service_title_3', 
		'priority'   => 3
	)));
	
	// Service Text 3
	$wp_customize->add_setting( 'service_text_3' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'service_text_3', array( 
    'label' => __( 'Service Text Box 3', 'sensible' ), 
    'section' => 'sensible_services_box_3',
    'settings' => 'service_text_3',
	'type'     => 'textarea', 
	'priority'   => 4
	))); 
	
	// Blog Panel
	$wp_customize->add_panel( 'blog_panel', array(
    'priority'       => 28,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Home Blog Section',
    'description'    => 'Edit your home page blog settings',
	));
	
	// Home Blog Section
	$wp_customize->add_section( 'sensible_blog_section', array(
		'title'          => 'Home Blog Section',
		'priority'       => 10,
		'description' => 'Edit your home page Blog section',
		'panel' => 'blog_panel', 
	));

	$wp_customize->add_setting('active_blog',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	));
	
	$wp_customize->add_control( 
    'active_blog', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Blog Section',  
        'section' => 'sensible_blog_section',
		'priority'   => 1 
    ));
	
	// Blog Text
	$wp_customize->add_setting( 'blog_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blog_text', array(
		'label'    => __( 'Blog Title Text', 'sensible' ),
		'section'  => 'sensible_blog_section', 
		'settings' => 'blog_text', 
		'priority'   => 2
	)));
	
	// Blog CTA
	$wp_customize->add_setting( 'blog_cta', array(
	    'sanitize_callback' => 'sensible_sanitize_text',
	)); 

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blog_cta', array(
		'label'    => __( 'Blog Call-to-Action', 'sensible' ),
		'section'  => 'sensible_blog_section', 
		'settings' => 'blog_cta', 
		'priority'   => 2 
	)));
	
	// Team Panel
	$wp_customize->add_panel( 'team_panel', array(
    'priority'       => 29,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Home Team Member Section',
    'description'    => 'Edit your home page team member settings',
	));
	
	// Home Team Section
	$wp_customize->add_section( 'sensible_team_section', array(
		'title'          => 'Home Team Section', 
		'priority'       => 10,
		'description' => 'Edit your home page Team section',
		'panel' => 'team_panel',   
	));

	$wp_customize->add_setting('active_team',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	));
	
	$wp_customize->add_control( 
    'active_team', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Team Section Content',   
        'section' => 'sensible_team_section',
		'priority'   => 1 
    ));
	
	// Team Text
	$wp_customize->add_setting( 'team_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team_text', array(
		'label'    => __( 'Team Title Text', 'sensible' ),
		'section'  => 'sensible_team_section', 
		'settings' => 'team_text', 
		'priority'   => 2 
	))); 

	$wp_customize->add_setting('active_team',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	));
	
	// Number of Team Members
	$wp_customize->add_setting( 'sensible_member_numbers', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'sensible_sanitize_member_content',   
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_member_numbers', array(
		'label'    => __( 'Number of team members to display', 'sensible' ),
		'section'  => 'sensible_team_section',
		'settings' => 'sensible_member_numbers',
		'type'     => 'radio', 
		'priority'   => 3, 
		'choices'  => array(
			'option1' => 'All', 
			'option2' => '2', 
			'option3' => '1' 
			),
	)));
	
	// Home Team Member 1
	$wp_customize->add_section( 'sensible_team_member_1', array(
		'title'          => 'Team Member 1',  
		'priority'       => 20,
		'description' => 'Edit your Team Member 1',
		'panel' => 'team_panel',   
	));
	
	$wp_customize->add_setting('active_member_1', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'active_member_1', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Member Box 1',  
        'section' => 'sensible_team_member_1', 
		'priority'   => 1
    ));
	
	// Team Member Picture 1
	$wp_customize->add_setting( 'member_image_1', array(    
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'member_image_1', array( 
		'label'    => __( 'Team Member Image 1', 'sensible' ), 
		'section'  => 'sensible_team_member_1',  
		'settings' => 'member_image_1',  
		'priority'   => 2
	))); 
	
	// Team Member Name 1
	$wp_customize->add_setting( 'member_name_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_name_1', array(
		'label'    => __( 'Team Member Name 1', 'sensible' ),
		'section'  => 'sensible_team_member_1', 
		'settings' => 'member_name_1',
		'priority'   => 3
	))); 
	
	// Team Member Text 1
	$wp_customize->add_setting( 'member_text_1' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_text_1', array( 
    'label' => __( 'Team Member Text Box 1', 'sensible' ), 
    'section' => 'sensible_team_member_1',
    'settings' => 'member_text_1', 
	'type'     => 'textarea', 
	'priority'   => 4
	)));
	
	// Team Member Facebook 1
	$wp_customize->add_setting( 'member_fb_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_fb_1', array(
		'label'    => __( 'Team Member Facebook 1', 'sensible' ),
		'section'  => 'sensible_team_member_1', 
		'settings' => 'member_fb_1',
		'priority'   => 5
	))); 
	
	// Team Member Twitter 1
	$wp_customize->add_setting( 'member_twitter_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_twitter_1', array(
		'label'    => __( 'Team Member Twitter 1', 'sensible' ),
		'section'  => 'sensible_team_member_1', 
		'settings' => 'member_twitter_1',
		'priority'   => 6
	))); 
	
	// Team Member LinkedIn 1
	$wp_customize->add_setting( 'member_linked_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_linked_1', array(
		'label'    => __( 'Team Member LinkedIn 1', 'sensible' ),
		'section'  => 'sensible_team_member_1', 
		'settings' => 'member_linked_1',
		'priority'   => 7
	))); 
	
	// Team Member Google 1
	$wp_customize->add_setting( 'member_google_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_google_1', array(
		'label'    => __( 'Team Member Google 1', 'sensible' ),
		'section'  => 'sensible_team_member_1', 
		'settings' => 'member_google_1',
		'priority'   => 8
	))); 
	
	// Team Member Email 1
	$wp_customize->add_setting( 'member_email_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_email_1', array(
		'label'    => __( 'Team Member Email 1', 'sensible' ),
		'section'  => 'sensible_team_member_1', 
		'settings' => 'member_email_1',
		'priority'   => 9
	)));  
	
	// Home Team Member 2
	$wp_customize->add_section( 'sensible_team_member_2', array(
		'title'          => 'Team Member 2',  
		'priority'       => 30,
		'description' => 'Edit your Team Member 2',
		'panel' => 'team_panel',   
	));
	
	$wp_customize->add_setting('active_member_2', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'active_member_2', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Member Box 2',  
        'section' => 'sensible_team_member_2', 
		'priority'   => 1
    ));
	
	// Team Member Picture 2
	$wp_customize->add_setting( 'member_image_2', array(    
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'member_image_2', array( 
		'label'    => __( 'Team Member Image 2', 'sensible' ), 
		'section'  => 'sensible_team_member_2',  
		'settings' => 'member_image_2',  
		'priority'   => 2
	))); 
	
	// Team Member Name 2
	$wp_customize->add_setting( 'member_name_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_name_2', array(
		'label'    => __( 'Team Member Name 2', 'sensible' ),
		'section'  => 'sensible_team_member_2', 
		'settings' => 'member_name_2',
		'priority'   => 3
	))); 
	
	// Team Member Text 2
	$wp_customize->add_setting( 'member_text_2' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_text_2', array( 
    'label' => __( 'Team Member Text Box 2', 'sensible' ), 
    'section' => 'sensible_team_member_2',
    'settings' => 'member_text_2', 
	'type'     => 'textarea', 
	'priority'   => 4
	)));
	
	// Team Member Facebook 2
	$wp_customize->add_setting( 'member_fb_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_fb_2', array(
		'label'    => __( 'Team Member Facebook 2', 'sensible' ),
		'section'  => 'sensible_team_member_2', 
		'settings' => 'member_fb_2',
		'priority'   => 5
	))); 
	
	// Team Member Twitter 2
	$wp_customize->add_setting( 'member_twitter_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_twitter_2', array(
		'label'    => __( 'Team Member Twitter 2', 'sensible' ),
		'section'  => 'sensible_team_member_2', 
		'settings' => 'member_twitter_2',
		'priority'   => 6
	))); 
	
	// Team Member LinkedIn 2
	$wp_customize->add_setting( 'member_linked_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_linked_2', array(
		'label'    => __( 'Team Member LinkedIn 2', 'sensible' ),
		'section'  => 'sensible_team_member_2', 
		'settings' => 'member_linked_2',
		'priority'   => 7
	))); 
	
	// Team Member Google 2
	$wp_customize->add_setting( 'member_google_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_google_2', array(
		'label'    => __( 'Team Member Google 2', 'sensible' ),
		'section'  => 'sensible_team_member_2', 
		'settings' => 'member_google_2',
		'priority'   => 8
	))); 
	
	// Team Member Email 2
	$wp_customize->add_setting( 'member_email_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_email_2', array(
		'label'    => __( 'Team Member Email 2', 'sensible' ),
		'section'  => 'sensible_team_member_2', 
		'settings' => 'member_email_2',
		'priority'   => 9
	)));  
	
	// Home Team Member 3
	$wp_customize->add_section( 'sensible_team_member_3', array(
		'title'          => 'Team Member 3',  
		'priority'       => 40,
		'description' => 'Edit your Team Member 3',
		'panel' => 'team_panel',   
	));
	
	$wp_customize->add_setting('active_member_3', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'active_member_3', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Member Box 3', 
        'section' => 'sensible_team_member_3', 
		'priority'   => 1
    ));
	
	// Team Member Picture 3
	$wp_customize->add_setting( 'member_image_3', array(    
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'member_image_3', array( 
		'label'    => __( 'Team Member Image 3', 'sensible' ), 
		'section'  => 'sensible_team_member_3',  
		'settings' => 'member_image_3',  
		'priority'   => 2
	))); 
	
	// Team Member Name 3
	$wp_customize->add_setting( 'member_name_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_name_3', array(
		'label'    => __( 'Team Member Name 3', 'sensible' ),
		'section'  => 'sensible_team_member_3', 
		'settings' => 'member_name_3',
		'priority'   => 3
	))); 
	
	// Team Member Text 3
	$wp_customize->add_setting( 'member_text_3' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_text_3', array( 
    'label' => __( 'Team Member Text Box 3', 'sensible' ), 
    'section' => 'sensible_team_member_3',
    'settings' => 'member_text_3', 
	'type'     => 'textarea', 
	'priority'   => 4
	)));
	
	// Team Member Facebook 3
	$wp_customize->add_setting( 'member_fb_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_fb_3', array(
		'label'    => __( 'Team Member Facebook 3', 'sensible' ),
		'section'  => 'sensible_team_member_3', 
		'settings' => 'member_fb_3',
		'priority'   => 5
	))); 
	
	// Team Member Twitter 3
	$wp_customize->add_setting( 'member_twitter_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_twitter_3', array(
		'label'    => __( 'Team Member Twitter 3', 'sensible' ),
		'section'  => 'sensible_team_member_3', 
		'settings' => 'member_twitter_3',
		'priority'   => 6
	))); 
	
	// Team Member LinkedIn 3
	$wp_customize->add_setting( 'member_linked_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_linked_3', array(
		'label'    => __( 'Team Member LinkedIn 3', 'sensible' ),
		'section'  => 'sensible_team_member_3', 
		'settings' => 'member_linked_3',
		'priority'   => 7
	))); 
	
	// Team Member Google 3
	$wp_customize->add_setting( 'member_google_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_google_3', array(
		'label'    => __( 'Team Member Google 3', 'sensible' ),
		'section'  => 'sensible_team_member_3', 
		'settings' => 'member_google_3',
		'priority'   => 8
	))); 
	
	// Team Member Email 3
	$wp_customize->add_setting( 'member_email_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'member_email_3', array(
		'label'    => __( 'Team Member Email 3', 'sensible' ),
		'section'  => 'sensible_team_member_3', 
		'settings' => 'member_email_3',
		'priority'   => 9 
	)));  
	
	// Widget Panel
	$wp_customize->add_panel( 'widget_panel', array(
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Home Widget Section',
    'description'    => 'Edit your home page widget settings',
	));
	
	// Home Widget Section
	$wp_customize->add_section( 'sensible_widget_section', array(
		'title'          => 'Home Widget Section', 
		'priority'       => 10,
		'description' => __( 'Customize the home widget area. Choose from any of <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">these icons</a>. Example: "fa-arrow-right". The main body of the widget area can be edited under the Widgets section below.', 'sensible' ),
		'panel' => 'widget_panel', 
	));
	
	// Main Image
	$wp_customize->add_setting( 'widget_bg_image', array(
		'default' => (get_stylesheet_directory_uri( 'stylesheet_directory') . '/img/keyboard-bg.jpg'),     
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'widget_bg_image', array( 
		'label'    => __( 'Background Image', 'sensible' ), 
		'section'  => 'sensible_widget_section',  
		'settings' => 'widget_bg_image',  
		'priority'   => 2
	))); 
	
	// Icon
	$wp_customize->add_setting( 'home_widget_icon' , array( 
		'default' => 'fa-paper-plane',
	    'sanitize_callback' => 'sensible_sanitize_text'
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_widget_icon', array( 
    	'label' => __( 'Widget Icon', 'sensible' ),  
    	'section' => 'sensible_widget_section',
    	'settings' => 'home_widget_icon',
		'priority'   => 3
	))); 

	// hide section
	$wp_customize->add_setting('active_home_widget',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	));
	
	$wp_customize->add_control( 
    'active_home_widget', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Widget Section',  
        'section' => 'sensible_widget_section',
		'priority'   => 1
    ));
	
	// Widget Text
	$wp_customize->add_setting( 'widget_button_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'widget_button_text', array(
		'label'    => __( 'Widget Button Text', 'sensible' ),
		'section'  => 'sensible_widget_section', 
		'settings' => 'widget_button_text',
		'priority'   => 4 
	))); 
	
	// Page Drop Downs 
	$wp_customize->add_setting('widget_button_url', array( 
		'capability' => 'edit_theme_options', 
        'sanitize_callback' => 'sensible_sanitize_int' 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'widget_button_url', array( 
    	'label' => __( 'Widget Button URL', 'sensible' ), 
    	'section' => 'sensible_widget_section', 
		'type' => 'dropdown-pages',
    	'settings' => 'widget_button_url',
		'priority'   => 5 
	)));
	 
	// Add Footer Section
	$wp_customize->add_section( 'footer-custom' , array(
    	'title' => __( 'Footer', 'sensible' ),
    	'priority' => 32,
    	'description' => __( 'Customize your footer area', 'sensible' )
	) );
	
	// Footer Social Section 
	$wp_customize->add_setting('active_footer_social',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control( 
    'active_footer_social', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Footer Social Section',  
        'section' => 'footer-custom', 
		'priority'   => 10
    ));
	
	// Social Text
		$wp_customize->add_setting( 'footer_social_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	    )); 

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social_text', array(
		'label'    => __( 'Footer Social Heading', 'sensible' ),
		'section'  => 'footer-custom',
		'settings' => 'footer_social_text', 
		'priority'   => 11
		) ) ); 
	
	// Phone Text
	$wp_customize->add_setting( 'footer_title_text',
	array(
	    'sanitize_callback' => 'sensible_sanitize_text',
	) 
	);

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_title_text', array(
		'label'    => __( 'Footer Title Text', 'sensible' ),
		'section'  => 'footer-custom', 
		'settings' => 'footer_title_text', 
		'priority'   => 20
	) ) );
	
	// Bottom Footer Icon 1
	$wp_customize->add_setting( 'bottom_footer_icon_1', array( 
		'default' => 'fa-map-marker',
	    'sanitize_callback' => 'sensible_sanitize_text',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bottom_footer_icon_1', array(  
    'label' => __( 'First Icon', 'sensible' ),  
    'section' => 'footer-custom', 
    'settings' => 'bottom_footer_icon_1', 
	'priority'   => 30 
	)));
	
	// Address Text
	$wp_customize->add_setting( 'first_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'first_text', array(
		'label'    => __( 'Footer First Text', 'sensible' ),
		'section'  => 'footer-custom', 
		'settings' => 'first_text', 
		'priority'   => 40
	)));
	
	// Footer Address
	$wp_customize->add_setting( 'sensible_footer_first',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_footer_first', array( 
    'label' => __( 'Footer First Column', 'sensible' ),
    'section' => 'footer-custom',
    'settings' => 'sensible_footer_first', 
	'type'     => 'textarea', 
	'priority'   => 50
	) ) );
	
	// Bottom Footer Icon 2
	$wp_customize->add_setting( 'bottom_footer_icon_2' , array( 
		'default' => 'fa-mobile',
	    'sanitize_callback' => 'sensible_sanitize_text'
	)); 
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bottom_footer_icon_2', array(  
    'label' => __( 'Second Icon', 'sensible' ),  
    'section' => 'footer-custom',
    'settings' => 'bottom_footer_icon_2',
	'priority'   => 60
	)));
	
	// Phone Text
	$wp_customize->add_setting( 'second_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));
		
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'second_text', array(
		'label'    => __( 'Footer Second Text', 'sensible' ),
		'section'  => 'footer-custom', 
		'settings' => 'second_text', 
		'priority'   => 70
	)));
	
	// Footer Phone
	$wp_customize->add_setting( 'sensible_footer_second',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_footer_second', array(
    'label' => __( 'Footer Second Column', 'sensible' ),
    'section' => 'footer-custom',
    'settings' => 'sensible_footer_second',
	'type'     => 'textarea',   
	'priority'   => 80
	)));
	
	// Bottom Footer Icon 3
	$wp_customize->add_setting( 'bottom_footer_icon_3' , array( 
		'default' => 'fa-envelope-o', 
		'sanitize_callback' => 'sensible_sanitize_text' 
	));   
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bottom_footer_icon_3', array(  
    'label' => __( 'Third Icon', 'sensible' ), 
    'section' => 'footer-custom',
    'settings' => 'bottom_footer_icon_3',
	'priority'   => 90
	)));
	
	// Email Text
	$wp_customize->add_setting( 'third_text',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'third_text', array(
		'label'    => __( 'Footer Third Text', 'sensible' ),
		'section'  => 'footer-custom',   
		'settings' => 'third_text', 
		'priority'   => 100
	)));
	
	// Footer Contact
	$wp_customize->add_setting( 'sensible_footer_third',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_footer_third', array(
    'label' => __( 'Footer Third Column', 'sensible' ),
    'section' => 'footer-custom',
    'settings' => 'sensible_footer_third',  
	'type'     => 'textarea',   
	'priority'   => 110
	)));

	// Footer Byline Text 
	$wp_customize->add_setting( 'sensible_footerid',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_footerid', array(
    'label' => __( 'Footer Byline Text', 'sensible' ),
    'section' => 'footer-custom', 
    'settings' => 'sensible_footerid',
	'priority'   => 120
	))); 

    // Choose excerpt or full content on blog
    $wp_customize->add_section( 'sensible_layout_section' , array( 
	    'title'       => __( 'Layout', 'sensible' ),
	    'priority'    => 45, 
	    'description' => 'Change how sensible displays posts', 
	));

	$wp_customize->add_setting( 'sensible_post_content', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'sensible_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_post_content', array(
		'label'    => __( 'Post content', 'sensible' ),
		'section'  => 'sensible_layout_section',
		'settings' => 'sensible_post_content',
		'type'     => 'radio',
		'choices'  => array(
			'option1' => 'Excerpts',
			'option2' => 'Full content',
			),
	)));
	
	//Excerpt
    $wp_customize->add_setting(
        'exc_length',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '30',
    ));
	
    $wp_customize->add_control( 'exc_length', array( 
        'type'        => 'number',
        'priority'    => 2, 
        'section'     => 'sensible_layout_section',
        'label'       => __('Excerpt length', 'sensible'),
        'description' => __('Choose your excerpt length here. Default: 30 words', 'sensible'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 200,
            'step'  => 5,
            'style' => 'padding: 15px;',
        ), 
	));
	
	// Page Services Panel
	$wp_customize->add_panel( 'services_page_panel', array(
    'priority'       => 36,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Services Page Section',
    'description'    => 'Edit your Services page settings. Upgrade to <a href="http://modernthemes.net/wordpress-themes/sensible-pro/" target="_blank">Sensible Pro</a> and receive 3 additional service boxes.',
	) );
	
	// Services Page Section
	$wp_customize->add_section( 'sensible_services_page_section', array(
		'title'          => 'Services Page Content',
		'priority'       => 10,
		'description' => 'Edit your home page Services content. Upgrade to <a href="http://modernthemes.net/wordpress-themes/sensible-pro/" target="_blank">Sensible Pro</a> and receive 3 additional service boxes.', 
		'panel' => 'services_page_panel',  
	));
	
	// Number of Services 
	$wp_customize->add_setting( 'sensible_page_services_numbers', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'sensible_sanitize_service_content', 
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_page_services_numbers', array(
		'label'    => __( 'Number of services to display on your page', 'sensible' ),
		'section'  => 'sensible_services_page_section',
		'settings' => 'sensible_page_services_numbers',
		'type'     => 'radio',
		'priority'   => 3, 
		'choices'  => array(
			'option1' => 'All',
			'option2' => '2',
			'option3' => '1', 
			),
	)));
	
	// Page Service Box 1 Section
	$wp_customize->add_section( 'sensible_page_services_box_1', array(
		'title'          => 'Services Page Box 1',
		'priority'       => 20,
		'description' => 'Edit your services page box 1. Choose from any of <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">these icons</a>. Example: "fa-arrow-right".',
		'panel' => 'services_page_panel', 
	));
	
	$wp_customize->add_setting('active_page_service_1', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'active_page_service_1', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Service Page Box 1',  
        'section' => 'sensible_page_services_box_1',
		'priority'   => 1
    ));
	
	// Page Service Icon 1
	$wp_customize->add_setting( 'page_service_icon_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_service_icon_1', array(
		'label'    => __( 'Service Page Icon 1', 'sensible' ),
		'section'  => 'sensible_page_services_box_1', 
		'settings' => 'page_service_icon_1', 
		'priority'   => 2
	)));
	
	// Service Page Title 1
	$wp_customize->add_setting( 'page_service_title_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_service_title_1', array(
		'label'    => __( 'Service Page Title 1', 'sensible' ),
		'section'  => 'sensible_page_services_box_1',
		'settings' => 'page_service_title_1', 
		'priority'   => 3
	)));
	
	// Service Page Text 1
	$wp_customize->add_setting( 'page_service_text_1' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_service_text_1', array( 
    'label' => __( 'Service Page Text Box 1', 'sensible' ), 
    'section' => 'sensible_page_services_box_1',
    'settings' => 'page_service_text_1', 
	'type'     => 'textarea', 
	'priority'   => 4
	)));
	
	// Service Page Box 2 Section
	$wp_customize->add_section( 'sensible_page_services_box_2', array(
		'title'          => 'Services Page Box 2',
		'priority'       => 30,
		'description' => 'Edit your services page box 2. Choose from any of <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">these icons</a>. Example: "fa-arrow-right".',
		'panel' => 'services_page_panel', 
	));
	
	$wp_customize->add_setting('active_page_service_2', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'active_page_service_2', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Service Page Box 2',  
        'section' => 'sensible_page_services_box_2', 
		'priority'   => 1
    ));
	
	// Service Page Icon 2
	$wp_customize->add_setting( 'page_service_icon_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_service_icon_2', array(
		'label'    => __( 'Service Page Icon 2', 'sensible' ),
		'section'  => 'sensible_page_services_box_2', 
		'settings' => 'page_service_icon_2', 
		'priority'   => 2
	)));
	
	// Service Page Title 2
	$wp_customize->add_setting( 'page_service_title_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_service_title_2', array(
		'label'    => __( 'Service Page Title 2', 'sensible' ),
		'section'  => 'sensible_page_services_box_2',
		'settings' => 'page_service_title_2', 
		'priority'   => 3
	)));
	
	// Service Page Text 2
	$wp_customize->add_setting( 'page_service_text_2' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_service_text_2', array( 
    'label' => __( 'Service Page Text Box 2', 'sensible' ), 
    'section' => 'sensible_page_services_box_2',
    'settings' => 'page_service_text_2', 
	'type'     => 'textarea', 
	'priority'   => 4
	)));
	
	// Service Page Box 3 Section
	$wp_customize->add_section( 'sensible_page_services_box_3', array(
		'title'          => 'Services Page Box 3',
		'priority'       => 40,
		'description' => 'Edit your services page box 3. Choose from any of <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">these icons</a>. Example: "fa-arrow-right".',
		'panel' => 'services_page_panel',   
	));
	
	$wp_customize->add_setting('active_page_service_3', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'active_page_service_3', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Service Page Box 3',  
        'section' => 'sensible_page_services_box_3', 
		'priority'   => 1
    ));
	
	// Service Page Icon 3
	$wp_customize->add_setting( 'page_service_icon_3', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_service_icon_3', array(
		'label'    => __( 'Service Page Icon 3', 'sensible' ),
		'section'  => 'sensible_page_services_box_3', 
		'settings' => 'page_service_icon_3',
		'priority'   => 2
	)));
	
	// Service Page Title 3
	$wp_customize->add_setting( 'page_service_title_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_service_title_3', array(
		'label'    => __( 'Service Page Title 3', 'sensible' ),
		'section'  => 'sensible_page_services_box_3',
		'settings' => 'page_service_title_3', 
		'priority'   => 3
	)));
	
	// Service Page Text 3
	$wp_customize->add_setting( 'page_service_text_3' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_service_text_3', array( 
    'label' => __( 'Service Page Text Box 3', 'sensible' ), 
    'section' => 'sensible_page_services_box_3',
    'settings' => 'page_service_text_3',
	'type'     => 'textarea', 
	'priority'   => 4
	)));
	
	// Team Page Panel
	$wp_customize->add_panel( 'page_team_panel', array(
    'priority'       => 37,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Team Member Page Section', 
    'description'    => 'Edit your team member page settings. Upgrade to <a href="http://modernthemes.net/wordpress-themes/sensible-pro/" target="_blank">Sensible Pro</a> and receive 3 additional team member boxes.', 
	)); 
	
	// Team Page Section
	$wp_customize->add_section( 'page_sensible_team_section', array(
		'title'          => 'Team Page Section', 
		'priority'       => 10,
		'description' => 'Edit your Team page section. Upgrade to <a href="http://modernthemes.net/wordpress-themes/sensible-pro/" target="_blank">Sensible Pro</a> and receive 3 additional team member boxes.',
		'panel' => 'page_team_panel',   
	));
	
	// Page Number of Team Members
	$wp_customize->add_setting( 'sensible_page_member_numbers', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'sensible_sanitize_member_page_content', 
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sensible_page_member_numbers', array( 
		'label'    => __( 'Number of team members to display on Team Page', 'sensible' ),
		'section'  => 'page_sensible_team_section',
		'settings' => 'sensible_page_member_numbers',
		'type'     => 'radio', 
		'priority'   => 3, 
		'choices'  => array(
			'option1' => 'All', 
			'option2' => '2', 
			'option3' => '1' 
			),
	)));
	
	// Page Team Member 1
	$wp_customize->add_section( 'page_sensible_team_member_1', array(
		'title'          => 'Team Member 1',  
		'priority'       => 20,
		'description' => 'Edit your page - Team Member 1',
		'panel' => 'page_team_panel',   
	));
	
	$wp_customize->add_setting('page_active_member_1', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'page_active_member_1', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Member Box 1',  
        'section' => 'page_sensible_team_member_1', 
		'priority'   => 1
    ));
	
	// Page - Team Member Picture 1
	$wp_customize->add_setting( 'page_member_image_1', array(    
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'page_member_image_1', array( 
		'label'    => __( 'Team Member Image 1', 'sensible' ), 
		'section'  => 'page_sensible_team_member_1',  
		'settings' => 'page_member_image_1',  
		'priority'   => 2
	))); 
	
	// Page - Team Member Name 1
	$wp_customize->add_setting( 'page_member_name_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_name_1', array(
		'label'    => __( 'Team Member Name 1', 'sensible' ),
		'section'  => 'page_sensible_team_member_1', 
		'settings' => 'page_member_name_1',
		'priority'   => 3
	))); 
	
	// Page - Team Member Text 1
	$wp_customize->add_setting( 'page_member_text_1' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_text_1', array( 
    'label' => __( 'Team Member Text Box 1', 'sensible' ), 
    'section' => 'page_sensible_team_member_1',
    'settings' => 'page_member_text_1', 
	'type'     => 'textarea', 
	'priority'   => 4
	)));
	
	// Page - Team Member Facebook 1
	$wp_customize->add_setting( 'page_member_fb_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_fb_1', array(
		'label'    => __( 'Team Member Facebook 1', 'sensible' ),
		'section'  => 'page_sensible_team_member_1', 
		'settings' => 'page_member_fb_1',
		'priority'   => 5
	))); 
	
	// Page - Team Member Twitter 1
	$wp_customize->add_setting( 'page_member_twitter_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_twitter_1', array(
		'label'    => __( 'Team Member Twitter 1', 'sensible' ),
		'section'  => 'page_sensible_team_member_1', 
		'settings' => 'page_member_twitter_1',
		'priority'   => 6
	))); 
	
	// Page - Team Member LinkedIn 1
	$wp_customize->add_setting( 'page_member_linked_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_linked_1', array(
		'label'    => __( 'Team Member LinkedIn 1', 'sensible' ),
		'section'  => 'page_sensible_team_member_1', 
		'settings' => 'page_member_linked_1',
		'priority'   => 7
	))); 
	
	// Page - Team Member Google 1
	$wp_customize->add_setting( 'page_member_google_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_google_1', array(
		'label'    => __( 'Team Member Google 1', 'sensible' ),
		'section'  => 'page_sensible_team_member_1', 
		'settings' => 'page_member_google_1',
		'priority'   => 8
	))); 
	
	// Page - Team Member Email 1
	$wp_customize->add_setting( 'page_member_email_1',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_email_1', array(
		'label'    => __( 'Team Member Email 1', 'sensible' ),
		'section'  => 'page_sensible_team_member_1', 
		'settings' => 'page_member_email_1',
		'priority'   => 9
	)));  
	
	// Page - Home Team Member 2
	$wp_customize->add_section( 'page_sensible_team_member_2', array(
		'title'          => 'Team Member 2',  
		'priority'       => 30,
		'description' => 'Edit your Team Member 2',
		'panel' => 'page_team_panel',   
	));
	
	$wp_customize->add_setting('page_active_member_2', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'page_active_member_2', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Member Box 2',  
        'section' => 'page_sensible_team_member_2', 
		'priority'   => 1
    ));
	
	// Page - Team Member Picture 2
	$wp_customize->add_setting( 'page_member_image_2', array(    
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'page_member_image_2', array( 
		'label'    => __( 'Team Member Image 2', 'sensible' ), 
		'section'  => 'page_sensible_team_member_2',  
		'settings' => 'page_member_image_2',  
		'priority'   => 2
	))); 
	
	// Page - Team Member Name 2
	$wp_customize->add_setting( 'page_member_name_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_name_2', array(
		'label'    => __( 'Team Member Name 2', 'sensible' ),
		'section'  => 'page_sensible_team_member_2', 
		'settings' => 'page_member_name_2',
		'priority'   => 3
	))); 
	
	// Page - Team Member Text 2
	$wp_customize->add_setting( 'page_member_text_2' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_text_2', array( 
    'label' => __( 'Team Member Text Box 2', 'sensible' ), 
    'section' => 'page_sensible_team_member_2',
    'settings' => 'page_member_text_2', 
	'type'     => 'textarea', 
	'priority'   => 4
	)));
	
	// Page - Team Member Facebook 2
	$wp_customize->add_setting( 'page_member_fb_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_fb_2', array(
		'label'    => __( 'Team Member Facebook 2', 'sensible' ),
		'section'  => 'page_sensible_team_member_2', 
		'settings' => 'page_member_fb_2',
		'priority'   => 5
	))); 
	
	// Page - Team Member Twitter 2
	$wp_customize->add_setting( 'page_member_twitter_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_twitter_2', array(
		'label'    => __( 'Team Member Twitter 2', 'sensible' ),
		'section'  => 'page_sensible_team_member_2', 
		'settings' => 'page_member_twitter_2',
		'priority'   => 6
	))); 
	
	// Page - Team Member LinkedIn 2
	$wp_customize->add_setting( 'page_member_linked_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_linked_2', array(
		'label'    => __( 'Team Member LinkedIn 2', 'sensible' ),
		'section'  => 'page_sensible_team_member_2', 
		'settings' => 'page_member_linked_2',
		'priority'   => 7
	))); 
	
	// Page - Team Member Google 2
	$wp_customize->add_setting( 'page_member_google_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_google_2', array(
		'label'    => __( 'Team Member Google 2', 'sensible' ),
		'section'  => 'page_sensible_team_member_2', 
		'settings' => 'page_member_google_2',
		'priority'   => 8
	))); 
	
	// Page - Team Member Email 2
	$wp_customize->add_setting( 'page_member_email_2',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_email_2', array(
		'label'    => __( 'Team Member Email 2', 'sensible' ),
		'section'  => 'page_sensible_team_member_2', 
		'settings' => 'page_member_email_2',
		'priority'   => 9
	)));  
	
	// Page - Home Team Member 3
	$wp_customize->add_section( 'page_sensible_team_member_3', array(
		'title'          => 'Team Member 3',  
		'priority'       => 40,
		'description' => 'Edit your Team Member 3',
		'panel' => 'page_team_panel',   
	));
	
	$wp_customize->add_setting('page_active_member_3', 
	    array(
	        'sanitize_callback' => 'sensible_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'page_active_member_3', 
    array(
        'type' => 'checkbox',
        'label' => 'Hide Member Box 3',   
        'section' => 'page_sensible_team_member_3', 
		'priority'   => 1
    ));
	
	// Page - Team Member Picture 3
	$wp_customize->add_setting( 'page_member_image_3', array(    
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'page_member_image_3', array( 
		'label'    => __( 'Team Member Image 3', 'sensible' ), 
		'section'  => 'page_sensible_team_member_3',  
		'settings' => 'page_member_image_3',  
		'priority'   => 2
	))); 
	
	// Page - Team Member Name 3
	$wp_customize->add_setting( 'page_member_name_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_name_3', array(
		'label'    => __( 'Team Member Name 3', 'sensible' ),
		'section'  => 'page_sensible_team_member_3', 
		'settings' => 'page_member_name_3',
		'priority'   => 3
	))); 
	
	// Page - Team Member Text 3
	$wp_customize->add_setting( 'page_member_text_3' ,
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_text_3', array( 
    'label' => __( 'Team Member Text Box 3', 'sensible' ), 
    'section' => 'page_sensible_team_member_3',
    'settings' => 'page_member_text_3', 
	'type'     => 'textarea', 
	'priority'   => 4
	)));
	
	// Page - Team Member Facebook 3
	$wp_customize->add_setting( 'page_member_fb_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_fb_3', array(
		'label'    => __( 'Team Member Facebook 3', 'sensible' ),
		'section'  => 'page_sensible_team_member_3', 
		'settings' => 'page_member_fb_3',
		'priority'   => 5
	))); 
	
	// Page - Team Member Twitter 3
	$wp_customize->add_setting( 'page_member_twitter_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_twitter_3', array(
		'label'    => __( 'Team Member Twitter 3', 'sensible' ),
		'section'  => 'page_sensible_team_member_3', 
		'settings' => 'page_member_twitter_3',
		'priority'   => 6
	))); 
	
	// Page - Team Member LinkedIn 3
	$wp_customize->add_setting( 'page_member_linked_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_linked_3', array(
		'label'    => __( 'Team Member LinkedIn 3', 'sensible' ),
		'section'  => 'page_sensible_team_member_3',  
		'settings' => 'page_member_linked_3',
		'priority'   => 7
	))); 
	
	// Page - Team Member Google 3
	$wp_customize->add_setting( 'page_member_google_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_google_3', array(
		'label'    => __( 'Team Member Google 3', 'sensible' ),
		'section'  => 'page_sensible_team_member_3', 
		'settings' => 'page_member_google_3',
		'priority'   => 8
	))); 
	
	// Page - Team Member Email 3
	$wp_customize->add_setting( 'page_member_email_3',
	    array(
	        'sanitize_callback' => 'sensible_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_member_email_3', array(
		'label'    => __( 'Team Member Email 3', 'sensible' ),
		'section'  => 'page_sensible_team_member_3', 
		'settings' => 'page_member_email_3', 
		'priority'   => 9 
	)));  

	// Set site name and description to be previewed in real-time
	$wp_customize->get_setting('blogname')->transport='postMessage';
	$wp_customize->get_setting('blogdescription')->transport='postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Move sections up 
	$wp_customize->get_section('static_front_page')->priority = 10;
	$wp_customize->get_section('nav')->priority = 11; 

	// Enqueue scripts for real-time preview
	wp_enqueue_script( 'sensible_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
 

}
add_action('customize_register', 'sensible_theme_customizer');


/**
 * Sanitizes a hex color. Identical to core's sanitize_hex_color(), which is not available on the wp_head hook.
 *
 * Returns either '', a 3 or 6 digit hex color (with #), or null.
 * For sanitizing values without a #, see sanitize_hex_color_no_hash().
 *
 * @since 1.7
 */
function sensible_sanitize_hex_color( $color ) {
	if ( '#ea474b' === $color ) 
		return '';

	// 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
		return $color;

	return null;
}

/**
 * Sanitizes our post content value (either excerpts or full post content).
 *
 * @since 1.7
 */
function sensible_sanitize_index_content( $content ) {
	if ( 'option2' == $content ) {
		return 'option2';
	} else {
		return 'option1';
	} 
}

//services number radio
function sensible_sanitize_service_content( $input ) {
    $valid = array( 
        'option1' => 'All',
		'option2' => '1',
		'option3' => '1',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

//services page number radio
function sensible_page_services_numbers( $input ) {
    $valid = array( 
        'option1' => 'All',
		'option2' => '2',
		'option3' => '1',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

//team members number radio
function sensible_sanitize_member_content( $input ) {
    $valid = array( 
        'option1' => 'All', 
		'option2' => '2',
		'option3' => '1'  
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

//team members number radio
function sensible_sanitize_member_page_content( $input ) {
    $valid = array( 
        'option1' => 'All', 
		'option2' => '2',
		'option3' => '1'  
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}


//Checkboxes
function sensible_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

//Integers
function sensible_sanitize_int( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

//Text
function sensible_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

//Sanitizes Fonts 
function sensible_sanitize_fonts( $input ) {  
    $valid = array(
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
            'Oswald:400,700' => 'Oswald',
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',    
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Rokkitt:400' => 'Rokkitt', 
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

//No sanitize - empty function for options that do not require sanitization -> to bypass the Theme Check plugin
function sensible_no_sanitize( $input ) {
} 

