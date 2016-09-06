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

	wp_enqueue_script( 'logical-solutions-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'logical-solutions-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

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


/*--- Meta box creation---*/
add_action('admin_init','inner_page_meta_init');

function inner_page_meta_init() {
  // add a meta box for WordPress pages
  add_meta_box('inner_page_meta', 'Header Info', 'show_inner_page_meta_box', 'page', 'normal', 'low');
  // add a callback function to save any data a user enters in
  add_action('save_post','save_inner_page_meta');
}

$prefix = 'custom_';
$inner_page_meta_field = array(
  array(
    'label' => 'Header Blurb',
    'desc'  => 'Displays the main text found just below the title of the page.',
    'id'    => $prefix.'description',
    'type'  => 'text'
  )
);

// The Callback
function show_inner_page_meta_box() {
  global $inner_page_meta_field, $post;
  // Use nonce for verification
  echo '<input type="hidden" name="inner_page_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

  // Begin the field table and loop
  echo '<table class="form-table">';
  foreach ($inner_page_meta_field as $field) {
    // get value of this field if it exists for this post
    $meta = get_post_meta($post->ID, $field['id'], true);
    // begin a table row with
    echo '<tr>
            <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
          <td>';
    switch($field['type']) {
      // text
      case 'text':
        echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="100" /><br />
              <span class="description">'.$field['desc'].'</span>';
      break;
    } //end switch
    echo '</td></tr>';
  } // end foreach
  echo '</table>'; // end table
}

function save_inner_page_meta($post_id) {
  global $inner_page_meta_field;

  // verify nonce
  if (!wp_verify_nonce($_POST['inner_page_meta_box_nonce'], basename(__FILE__)))
    return $post_id;
  // check autosave
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    return $post_id;
  // check permissions
  if ('page' == $_POST['post_type']) {
      if (!current_user_can('edit_page', $post_id))
          return $post_id;
  } elseif (!current_user_can('edit_post', $post_id)) {
      return $post_id;
  }

  // loop through fields and save the data
  foreach ($inner_page_meta_field as $field) {
    $old = get_post_meta($post_id, $field['id'], true);
    $new = $_POST[$field['id']];
    if ($new && $new != $old) {
      update_post_meta($post_id, $field['id'], $new);
    } elseif ('' == $new && $old) {
      delete_post_meta($post_id, $field['id'], $old);
    }
  } // end foreach
}

add_action('save_post', 'save_inner_page_meta');

/*--- #end custom meta box creation ---*/
