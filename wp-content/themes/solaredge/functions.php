<?php
/**
 * Digital Allies functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Digital_Allies
 */


add_action('wp_enqueue_scripts', 'my_scripts_react');

add_action('wp_enqueue_scripts', 'enqueue_custom_slider');
function enqueue_custom_slider(){
            wp_enqueue_style( 'swiper_css',get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css' );

            wp_enqueue_script('swiper_js',get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js',array('jquery'), null , 'footer');
}

// WordPress Setup
require_once 'library/setup.php';

// Cleanup
require_once 'library/cleanup.php';

// Enqueue Scripts & Styles
require_once 'library/enqueue.php';

// Theme Support
require_once 'library/theme_support.php';

// Image Sizes
require_once 'library/image_sizes.php';

// Template tags
require_once 'library/template_tags.php';

// Add custom colours to the editor
//require_once 'library/gutenberg_editor_colours.php';


/*
 *  Add-ons to change how WP works
 */

// Clean Widgets
require_once 'library/add-ons/clean_widgets.php';

// Digital Allies Branding
require_once 'library/add-ons/digital_allies_branding.php';

// Clean up read more links
require_once 'library/add-ons/remove_read_more_ellipsis.php';

// Disable the default WP search
require_once 'library/add-ons/disable_search.php';

// Allow editors to use Gravity forms
require_once 'library/add-ons/grav_editor_permissions.php';

// Allow editors to edit menus
require_once 'library/add-ons/menus_editor_permissions.php';

// Allow editors Yoast SEO manager access
require_once 'library/add-ons/yoast_editor_permissions.php';

// Modify admin bar
require_once 'library/add-ons/modify_admin_bar.php';

// Disable search functionality
require_once 'library/add-ons/disable_search.php';

// Make embeded videos responsive
require_once 'library/add-ons/responsive_videos.php';

// Define ACF options pages
require_once 'library/add-ons/acf-options-pages.php';

// Custom navigations
require_once 'library/navigation.php';

// Custom pagination
require_once 'library/pagination.php';

// Custom Post Types
require_once 'cptui_data/post_types.php';

// Custom Post Types Taxonomy
require_once 'cptui_data/taxonomy.php';

// Add bootstrap walker
require_once 'library/class-wp-bootstrap-navwalker.php';

// Register ACF Gutenberg Blocks
require_once 'library/add-ons/acf-gutenberg-blocks.php';
/*
 *  WooCommerce options
 */

// Default placeholder image
// require_once 'library/woocommerce/default_placeholder_image.php';

add_filter('acf/settings/save_json', 'bwcet_acf_json_save_point');

function bwcet_acf_json_save_point( $path ) {
  $path = get_stylesheet_directory() . '/acf-json';
  return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
  unset($paths[0]);
  $paths[] = get_stylesheet_directory() . '/acf-json';
  return $paths;
}

/**
 * Saves post type and taxonomy data to JSON files in the theme directory.
 *
 * @param array $data Array of post type data that was just saved.
 */
function pluginize_local_cptui_data( $data = array() ) {
  $theme_dir = get_stylesheet_directory();
  // Create our directory if it doesn't exist.
  if ( ! is_dir( $theme_dir .= '/cptui_data' ) ) {
    mkdir( $theme_dir, 0755 );
  }

  if ( array_key_exists( 'cpt_custom_post_type', $data ) ) {
    // Fetch all of our post types and encode into JSON.
    $cptui_post_types = get_option( 'cptui_post_types', array() );
    $content = json_encode( $cptui_post_types );
    // Save the encoded JSON to a primary file holding all of them.
    file_put_contents( $theme_dir . '/cptui_post_type_data.json', $content );
  }

  if ( array_key_exists( 'cpt_custom_tax', $data ) ) {
    // Fetch all of our taxonomies and encode into JSON.
    $cptui_taxonomies = get_option( 'cptui_taxonomies', array() );
    $content = json_encode( $cptui_taxonomies );
    // Save the encoded JSON to a primary file holding all of them.
    file_put_contents( $theme_dir . '/cptui_taxonomy_data.json', $content );
  }
}
add_action( 'cptui_after_update_post_type', 'pluginize_local_cptui_data' );
add_action( 'cptui_after_update_taxonomy', 'pluginize_local_cptui_data' );

// Changing excerpt more
function bwcet_excerpt_more() {
  return '...';
}
add_filter('excerpt_more','bwcet_excerpt_more',11);

function bwcet_excerpt_length () {
  switch ( get_post_type() ) {
    case 'post':
    case 'results_and_awards':
      return 16;
    default:
      return 14;
  }
}

add_filter( 'excerpt_length', 'bwcet_excerpt_length' );

function custom_post_type_yoast_seo_breadcrumb_append_link( $links ) {
  $post_types_setting = get_field( 'post_types', 'options' );

  if ( ! empty( $post_types_setting ) ) {
    $breadcrumb = [];

    foreach ( $post_types_setting as $post_type_setting ) {
      $post_type   = $post_type_setting['post_type'];
      $parent_page = $post_type_setting['parent_page'];

      if ( ! empty( $post_type ) && ! empty( $parent_page ) ) {
        $parent_page_url = get_page_link( $parent_page->ID );

        if ( is_singular( $post_type ) ) {
          $breadcrumb[] = array(
            'url'  => $parent_page_url,
            'text' => $parent_page->post_title,
            'id'   => $parent_page->ID
          );
        }
      }
    }

    if ( ! empty( $breadcrumb ) ) {
      array_splice( $links, 1, - 2, $breadcrumb );
    }
  }

  return $links;
}

add_filter( 'wpseo_breadcrumb_links', 'custom_post_type_yoast_seo_breadcrumb_append_link' );

function my_scripts_react() {
  wp_enqueue_script('react', 'https://unpkg.com/react@16.7.0/umd/react.production.min.js',array('jquery'), null , 'footer');
  wp_enqueue_script('react_dom', 'https://unpkg.com/react-dom@16.7.0/umd/react-dom.production.min.js',array('jquery'), null , 'footer');
  wp_enqueue_script('react_jsx', 'https://unpkg.com/babel-standalone@6/babel.min.js',array('jquery'), null , 'footer');
	wp_enqueue_script('like_button',get_stylesheet_directory_uri() . '/assets/js/like_button.js',array('jquery'), null , 'footer');
}

function console_log($data) { 
  if(is_array($data) || is_object($data)){
  echo("<script>console.log('php_array: ".json_encode($data)."');</script>");
  } else {
  echo("<script>console.log('php_string: ".$data."');</script>");
  }
}

add_action('after_setup_theme','add_menu');

function add_menu(){
	register_nav_menu('top_menu','top_menu');
}



add_action('acf/init', 'acf_init_block_testimonial');
function acf_init_block_testimonial() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'testimonial',
            'title'             => __('Testimonial'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'library/acf_block/acf_testimonial.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));
    }
}

add_action('acf/init', 'acf_init_gallery');
function acf_init_gallery() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'gallery',
            'title'             => __('Gallery'),
            'description'       => __('A custom gallery block.'),
            'render_template'   => 'library/acf_block/acf_gallery.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'gallery', 'quote' ),
        ));
    }
}

add_action('acf/init', 'acf_init_slider_acf');
function acf_init_slider_acf() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'slider_acf',
            'title'             => __('Slider-ACF'),
            'description'       => __('A custom gallery block.'),
            'render_template'   => 'library/acf_block/acf_slider.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'slider_acf', 'quote' ),
        ));
    }
}

add_action('acf/init', 'acf_init_acf_posts');
function acf_init_acf_posts() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'acf_posts',
            'title'             => __('ACF_Posts'),
            'description'       => __('A custom gallery block.'),
            'render_template'   => 'library/acf_block/acf_posts.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'acf_posts', 'quote' ),
        ));
    }
}
