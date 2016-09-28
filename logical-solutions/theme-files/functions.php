<?php
/**
 * Logical Solutions functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Logical_Solutions
 */

if ( ! function_exists( 'logical_solutions_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function logical_solutions_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Logical Solutions, use a find and replace
	 * to change 'logical-solutions' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'logical-solutions', get_template_directory() . '/languages' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'logical-solutions' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'logical_solutions_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'logical_solutions_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function logical_solutions_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'logical_solutions_content_width', 640 );
}
add_action( 'after_setup_theme', 'logical_solutions_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function logical_solutions_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'logical-solutions' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'logical-solutions' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'logical_solutions_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function logical_solutions_scripts() {
	wp_enqueue_style( 'logical-solutions-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'logical_solutions_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/***** MY CUSTOM POSTS CODE *****/
add_action('init', 'new_post_types');

function new_post_types() {

  register_post_type( 'lsi_product',
      array(
        'labels'            => array(
          'name'            => 'Products',
          'singular_name'   => 'Product',
          ),
        'public'            => true,
        'has_archive'       => false,
        'menu_position'     => 5,
        'show_in_rest'      => true,
        'rest_base'         => 'products-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'          => array('title', 'thumbnail'),
				'taxonomies'        => array('category')
        )
      );

  register_post_type( 'lsi_job',
      array(
        'labels'            => array(
          'name'            => 'Jobs',
          'singular_name'   => 'Job',
          ),
        'public'            => true,
        'has_archive'       => false,
        'menu_position'     => 5,
        'show_in_rest'      => true,
        'rest_base'         => 'jobs-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
				'rewrite'           => array('slug' => 'careers'),
        'supports'          => array('title', 'thumbnail'),
        )
      );

  register_post_type( 'lsi_training_session',
      array(
        'labels'            => array(
          'name'            => 'Training Sessions',
          'singular_name'   => 'Training Session',
          ),
        'public'            => true,
        'has_archive'       => false,
        'menu_position'     => 5,
        'show_in_rest'      => true,
        'rest_base'         => 'training-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
				'rewrite'           => array('slug' => 'training'),
        'supports'          => array('title', 'thumbnail'),
        )
      );

  register_post_type( 'lsi_resource',
      array(
        'labels'            => array(
          'name'            => 'Resources',
          'singular_name'   => 'Resource',
          ),
        'public'            => true,
        'has_archive'       => false,
        'menu_position'     => 5,
        'show_in_rest'      => true,
        'rest_base'         => 'resource-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
				'rewrite'           => array('slug' => 'resources'),
        'supports'          => array('title', 'thumbnail'),
        )
      );

  register_post_type( 'lsi_capabilities',
      array(
        'labels'            => array(
          'name'            => 'Capabilities',
          'singular_name'   => 'Capability',
          ),
        'public'            => true,
        'has_archive'       => false,
        'menu_position'     => 5,
        'show_in_rest'      => true,
        'rest_base'         => 'capability-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
				'rewrite'           => array('slug' => 'capabilities'),
        'supports'          => array('title', 'thumbnail'),
        )
      );

  register_post_type( 'lsi_employees',
      array(
        'labels'            => array(
          'name'            => 'Employees',
          'singular_name'   => 'Employee',
          ),
        'public'            => true,
        'has_archive'       => false,
        'menu_position'     => 5,
        'show_in_rest'      => true,
        'rest_base'         => 'employee-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
				'rewrite'           => array('slug' => 'employees'),
        'supports'          => array('title', 'thumbnail'),
        )
      );
}

/***** MY CUSTOM TAXONOMIES CODE *****/
add_action('init', 'new_taxonomies');

function new_taxonomies() {

  /* REGISTER CUSTOM TAXONOMIES */
  register_taxonomy(
    'product-category',
    'lsi_product',
    array(
          'label'     => 'Product Category',
          'rewrite'   => array('slug' => 'product-category'),
          'hierarchical' => true,
          'show_ui'   => false,
    )
  );

  register_taxonomy(
    'job-category',
    'lsi_job',
    array(
		      'label'     => 'Job Category',
		      'rewrite'   => array('slug' => 'job-category'),
		      'hierarchical' => true,
    )
  );

  register_taxonomy(
    'training-category',
    'lsi_training_session',
    array(
          'label'     => 'Training Category',
          'rewrite'   => array('slug' => 'training-category'),
          'hierarchical' => true,
    )
  );

  register_taxonomy(
    'resource-category',
    'lsi_resource',
    array(
          'label'     => 'Resource Category',
          'rewrite'   => array('slug' => 'training-category'),
          'hierarchical' => true,
    )
  );

  register_taxonomy(
    'capability-category',
    'lsi_capability',
    array(
          'label'     => 'Capability Category',
          'rewrite'   => array('slug' => 'capability-category'),
          'hierarchical' => true,
    )
  );

  register_taxonomy(
    'employee-category',
    'lsi_employee',
    array(
          'label'     => 'Employee Category',
          'rewrite'   => array('slug' => 'employee-category'),
          'hierarchical' => true,
    )
  );

  /* CREATE PRE-BUILT TERMS -- USER CANNOT ADD FROM ADMIN PANEL*/
  wp_insert_term('hardware', 'product-category');
  wp_insert_term('software', 'product-category');

}
?>
