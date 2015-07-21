<?php
/**
 * functions and definitions
 */
 

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'sensible_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sensible_setup() {


	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'home-blog', 400, 250, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sensible' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sensible_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // sensible_setup
add_action( 'after_setup_theme', 'sensible_setup' );

/**
 * Load Google Fonts.
 */
function load_fonts() {
            wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Lato|Merriweather:400,300,400italic,600,700', array(), '1.0');
            wp_enqueue_style( 'googleFonts');
        }
    
    add_action('wp_print_styles', 'load_fonts');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function sensible_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'sensible' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	//register_sidebar( array(
	//	'name'          => __( 'Home Widget', 'sensible' ),
	//	'id'            => 'home-widget',
	//	'description'   => 'The  area for your home page.', 
	//	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	//	'after_widget'  => '</aside>',  
	//	'before_title'  => '<h6>',
	//	'after_title'   => '</h6>', 
	//) );
	
	//Register the sidebar widgets   
	register_widget( 'sensible_Video_Widget' ); 
	//register_widget( 'sensible_Contact_Info' ); 
	
}
add_action( 'widgets_init', 'sensible_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sensible_scripts() {
	wp_enqueue_style( 'sass', get_stylesheet_uri(), array(), '1.0');
	
	
	
	//wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/flexslider.css' );
	//wp_enqueue_style( 'jPushMenu', get_template_directory_uri() . '/css/jPushMenu.css' );
	
	if ( get_theme_mod('sensible_animate') != 1 ) {
		
		wp_enqueue_script( 'wowjs', get_template_directory_uri() . '/js/wow.js', array('jquery'), true );
		wp_enqueue_style( 'animations', get_stylesheet_directory_uri() . '/css/animate.css', array() );
		wp_enqueue_script( 'wow-init', get_template_directory_uri() .  '/js/wow-init.js', array( 'jquery' ), true );
	}
	
	if ( is_admin() ) { 
    //wp_enqueue_style( 'control', get_template_directory_uri() . '/js/sensible_control.js', array(), false, true );  
	} 
	
	
	//wp_enqueue_script('jquery');
	wp_enqueue_script( 'site-scripts', get_template_directory_uri() . '/js/site.js', array(), '1.0', true );
	

	//wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true );
	//wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	//wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/parallax.js', array('jquery'), false, false );
	
	//TO DO: flex slider if...
	//wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '1.0', true );
	//wp_enqueue_script( 'pushmenu', get_template_directory_uri() . '/js/jPushMenu.js', array('jquery'), false, true );
	//wp_enqueue_script( 'sensible-placeholder', get_template_directory_uri() . '/js/jquery.placeholder.js', array('jquery'), false, true); 
 	//wp_enqueue_script( 'sensible-placeholdertext', get_template_directory_uri() . '/js/placeholdertext.js', array('jquery'), false, true);

	//wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/sensible.scripts.js', array(), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		//wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sensible_scripts' );

/**
 * Load html5shiv
 */
function sensible_html5shiv() {
    echo '<!--[if lt IE 9]>' . "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/js/html5shiv.js' ) . '"></script>' . "\n";
    echo '<![endif]-->' . "\n";
}
add_action( 'wp_head', 'sensible_html5shiv' ); 

/**
 * Change the excerpt length
 */
function sensible_excerpt_length( $length ) {
	
	$excerpt = get_theme_mod('exc_length', '30');
	return $excerpt; 

}

add_filter( 'excerpt_length', 'sensible_excerpt_length', 999 ); 

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Include additional custom admin panel features. 
 */
require get_template_directory() . '/panel/functions-admin.php';
require get_template_directory() . '/panel/sensiblewp-admin_page.php';

/**
 * Google Fonts  
 */
require get_template_directory() . '/inc/gfonts.php';  

/**
 * custom widgets
 */ 
//require get_template_directory() . "/widgets/contact-info.php";
require get_template_directory() . "/widgets/video-widget.php";



/**
 * Add checkboxes to posts
 */ 
function featured_metaboxes( $meta_boxes ) {
    $prefix = '_sn_'; // Prefix for all fields 
    $meta_boxes['featured'] = array(
        'id' => 'featured',
        'title' => 'Feature this post?',
        'pages' => array('post'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
    			'name' => 'Feature as Home Page Slider', 
    			'desc' => 'Check this box to feature this story on the main slider.',
    			'id' => $prefix . 'primary_checkbox', 
    			'type' => 'checkbox'
				),
			array(
    			'name' => 'Button URL', 
    			'desc' => 'Enter the URL you want this slide to link to.',
    			'id' => $prefix . 'primary_url', 
    			'type' => 'text_url', 
				),
			array(
    			'name' => 'Button Text', 
    			'desc' => 'Enter the text for your slide button.',
    			'id' => $prefix . 'primary_button_text', 
    			'type' => 'text',
				),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'featured_metaboxes' );

/**
 * Initialize custom meta 
 */
add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
function be_initialize_cmb_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
        require_once( 'meta/init.php' );
    }
} 


//* Remove header junk
/*Removes RSD, XMLRPC, WLW, WP Generator, ShortLink and Comment Feed links*/
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3 );

/*Removes prev and next article links*/
add_filter( 'index_rel_link', '__return_false' );
add_filter( 'parent_post_rel_link', '__return_false' );
add_filter( 'start_post_rel_link', '__return_false' );
add_filter( 'previous_post_rel_link', '__return_false' );
add_filter( 'next_post_rel_link', '__return_false' );
