<?php
	
/* Load support files 
-------------------------------------------------------------- */
require_once( 'functions/supersimple_shortcodes.php' );
require_once( 'functions/cleanup.php' );



// Set up the content width value based on the theme's design and stylesheet
if ( ! isset( $content_width ) ) $content_width = 900;



/* Register javascript and stylesheets
-------------------------------------------------------------- */
if ( !function_exists( 'supersimple_theme_scripts' ) ) : function supersimple_theme_scripts() {


	// load comments stylesheet and javascript only if it is needed
	if ( is_singular() and ( comments_open() or get_comments_number() ) ) : 
		
			wp_enqueue_style ( 'comments', get_template_directory_uri() . '/css/comments.css' );
			if ( comments_open() and get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
			
	endif;
	
	
	// Stylesheets
	// load stylesheets the WordPress way
	wp_enqueue_style ( 'html', get_template_directory_uri() . '/css/html.css' );
	wp_enqueue_style ( 'base', get_template_directory_uri() . '/css/base.css' );
	wp_enqueue_style ( 'type', get_template_directory_uri() . '/css/type.css' );
	wp_enqueue_style ( 'menu', get_template_directory_uri() . '/css/menu.css' );
	wp_enqueue_style ( 'main', get_template_directory_uri() . '/css/main.css' );
	
	
	// load style.css only if this is a child theme
	if ( is_child_theme() ) wp_enqueue_style ( 'style', get_stylesheet_directory_uri() . '/style.css' );


	// load some javascript into the footer but only for admins
	if( is_user_logged_in() ) wp_enqueue_script( 'admin', get_template_directory_uri() . '/inc/admin.js', array(), false, true );


} endif;
add_action( 'wp_enqueue_scripts', 'supersimple_theme_scripts', 5 );



/* Register Theme Features 
-------------------------------------------------------------- */
function supersimple_theme_features() {


	// Menus
	register_nav_menu( 'primary', 'Primary menu' );
	register_nav_menu( 'social', 'Social menu' );


	// Editor stylesheet
	add_editor_style ( 'css/type.css' );


	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	
	
	// allow WordPress to control the title tag
	add_theme_support( 'title-tag' );
	
	// add support for featured images
	add_theme_support( 'post-thumbnails' ); 
	
	
	// allow WooCommerce
	add_theme_support( 'woocommerce' );


	// Disable custom font sizes
	add_theme_support( 'disable-custom-font-sizes' );


	// new alignments
	add_theme_support( 'align-wide' );


	// Add support for editor styles
	add_theme_support( 'editor-styles' );


	// Enqueue editor styles
	add_editor_style( 'css/type.css' );


}
add_action( 'after_setup_theme', 'supersimple_theme_features' );



/* Register widget areas
-------------------------------------------------------------- */
function supersimple_theme_widgets() {


	register_sidebar( array(
		'name'			=> 'Sidebar Widgets',
		'id'			=> 'sidebar',
		'description'	=> 'These are widgets for all sidebars.',
		'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</div><!-- widget -->',
		'before_title'	=> '<h3 class="title">',
		'after_title'	=> '</h3>'
	));


}
add_action( 'widgets_init', 'supersimple_theme_widgets' );