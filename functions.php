<?php

function soldis_nmh47_theme_files() {
	// wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0','all' );
	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0','all' );
	wp_enqueue_style( 'ico-font', get_template_directory_uri() . '/assets/css/icofont.css', array(), '1.0','all' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0','all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0','all' );
	wp_enqueue_style( 'Main-CSS', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0','all' );
	wp_enqueue_style( 'responsive-CSS', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0','all' );

	wp_enqueue_style( 'soldis-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'burger-menu', get_template_directory_uri() . '/assets/js/burger-menu.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '1.0', true );
	
	
	wp_enqueue_script( 'counter-up', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/custom-isotope-filter.js', array('jquery'), '1.0', true );
	
	wp_enqueue_script( 'gmap-3', get_template_directory_uri() . '/assets/js/gmap3.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'gmap-3-link', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC7IuOflifct9IyL7WB-BcWFczbYE8cVWA', array('jquery'), '1.0', true );
	wp_enqueue_script( 'custom-dropdown', get_template_directory_uri() . '/assets/js/custom-dropdown.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'soldis-main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}
add_action('wp_enqueue_scripts','soldis_nmh47_theme_files');

function soldis_nmh47_theme_supports(){

	//loading theme textdomain
	load_theme_textdomain( 'soldis', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	//adding support for automatic title tag
	add_theme_support( 'title-tag' );

	//enabling post thumbnail support
	add_theme_support( 'post-thumbnails' );

	//enabling custom image size
	add_image_size( 'soldis-thumb', 740, 520, true );

	// regestaring primary & secondary menu
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'soldis' ),
		'menu-2' => esc_html__( 'Secondary', 'soldis' ),
	) );

	//HTML5 Support
	add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	//add custom logo
	add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	
}
add_action('after_setup_theme','soldis_nmh47_theme_supports');


//custom posts register

function soldis_nmh47_theme_custom_posts() {

	//team-members data
	register_post_type( 'team-member',
        array(
            'labels' => array(
                'name' => __( 'Team-Members' ),
                'singular_name' => __( 'team-member' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true,
            'menu_icon'   => 'dashicons-businessman',
        )
    );

    //feartures data
	register_post_type( 'feature',
        array(
            'labels' => array(
                'name' => __( 'Features' ),
                'singular_name' => __( 'feature' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true,
            'menu_icon'   => 'dashicons-awards',
        )
    );

    //feartures data
	register_post_type( 'project',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'project' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
            //'show_ui' => true,
            'menu_icon'   => 'dashicons-admin-multisite',
            //'taxonomies'  => array( 'category' ),
            
        )
    );

}
add_action( 'init','soldis_nmh47_theme_custom_posts' );

function project_custom_taxonomies() {

	//add new taxonomy hirearchy

	$labels = array(
		'name' => 'Project-Categories',
		'singular_name' => 'Project-Category',
		'search_items' => 'Search Project-Category',
		'all_items' => 'All Project-Category',
		'parent_item' => 'Parent Project-Category',
		'parent_item_colon' => 'Parent Project-Category:',
		'edit_item' => 'Edit Project-Category',
		'update_item' => 'Update Project-Category',
		'add_new_item' => 'Add New Project-Category',
		'new_item_name' => 'Project-Category Name',
		'menu_name' => 'Project-Categories',

	);

	$args = array(

		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'project-category' )

	);

	register_taxonomy( 'project-category', array('project'), $args );

}

add_action( 'init', 'project_custom_taxonomies' );



//including cs-framework
require get_template_directory(). '/inc/cs-framework/cs-framework.php';

// Custom Slug Generate
function create_slug($slug){
    $lettersNumbersSpacesHypens = '/[^\-\s\pN\pL]+/u';
    $spacesDuplicateHypens = '/[\-\s]+/';

    $slug = preg_replace($lettersNumbersSpacesHypens, '', mb_strtolower($slug, 'UTF-8'));
    $slug = preg_replace($spacesDuplicateHypens, '-', $slug);
    $slug = trim($slug, '-');

    return $slug;
}



//register widget
function soldis_nmh47_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Contact Form', 'soldis' ),
		'id'            => 'contact-form',
		'description'   => esc_html__( 'Add Contact Form widgets here.', 'soldis' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'soldis_nmh47_widgets_init' );