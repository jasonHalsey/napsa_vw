<?php

/*  Remove Admin Bar
/* ------------------------------------ */ 
	add_filter('show_admin_bar', '__return_false');

/*  Menu Support
/* ------------------------------------ */ 

  add_action( 'init', 'my_custom_menus' );
    function my_custom_menus() {
       register_nav_menus(
          array(
        'primary-menu' => __( 'vw_menu' ),
        'secondary-menu' => __( 'Secondary Menu' )
                  )
           );
    }

/*  Add Custom Footers
/* ------------------------------------ */ 
function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'your-theme-domain' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

function aboutfooter_widgets_init() {

  register_sidebar( array(
    'name'          => 'About Section Footer',
    'id'            => 'about_footer',
    'before_widget' => '<div class="aboutfooter-content">',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="aboutfooter-title">',
    'after_title' => '</h3>',
  ) );

}
add_action( 'widgets_init', 'aboutfooter_widgets_init' );

function infofooter_widgets_init() {

  register_sidebar( array(
    'name'          => 'Info Section Footer',
    'id'            => 'info_footer',
    'before_widget' => '<div class="infofooter-content">',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="infotfooter-title">',
    'after_title' => '</h3>',
  ) );

}
add_action( 'widgets_init', 'infofooter_widgets_init' );


/*  Add Custom JS
/* ------------------------------------ */ 
function wpb_adding_scripts() {

  $vars = "value";

  wp_register_script('app', get_stylesheet_directory_uri() . '/js/napsa_vw-custom.js');

  wp_enqueue_style( 'style', get_stylesheet_uri() );

  wp_enqueue_script('app');

  }
  add_action( 'wp_footer', 'wpb_adding_scripts' ); 

/*  Create Videos Post Type
/* ------------------------------------ */
add_action('init', 'post_type_napsavid');
function post_type_napsavid() 
{
  $labels = array(
    'name' => _x('Workshop Video', 'post type general name'),
    'singular_name' => _x('Workshop Video', 'post type singular name'),
    'add_new' => _x('Add New Workshop Video', 'napsavid'),
    'add_new_item' => __('Add New Workshop Video')
  );
 
 $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'napsavid' ),
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title')
    ); 
  register_post_type('napsavid',$args);
  flush_rewrite_rules();
}; 

/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB directory)
 *
 * @category NAPSA - VW
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

require_once 'cmb/init.php';

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field object $field Field object
 *
 * @return bool                     True if metabox should show
 */
function cmb2_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}
	return true;
}

add_filter( 'cmb2_meta_boxes', 'cmb2_napsa_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb2_napsa_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb2_';

  /**
   * Video Metabox Layout
   */
  $meta_boxes['napsavid_metabox'] = array(
    'id'            => 'napsavid_metabox',
    'title'         => __( 'Workshop Video', 'cmb2' ),
    'object_types'  => array( 'napsavid' ), // Post type
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    'fields'        => array(
      array(
        'name'    => __( 'YouTube Embed Code', 'cmb2' ),
        'desc' => __( 'iframe code', 'cmb2' ),
        'id'      => $prefix . 'video_url',
        'type' => 'textarea_code',
      ),
      array(
        'name'    => __( 'Full Description/ chat enabled', 'cmb2' ),
        'id'      => $prefix . 'full_description',
        'type' => 'wysiwyg',
      ),
      array(
        'name' => __( 'Video Placeholder Image', 'cmb2' ),
        'desc' => __( 'Upload a Placeholder Image - .png/.jpg/.gif - Max Size 400px X 400px', 'cmb2' ),
        'id'   => $prefix . 'placholder_image',
        'type' => 'file',
      ),
      array(
        'name'    => __( 'Short Description', 'cmb2' ),
        'id'      => $prefix . 'short_description',
        'type' => 'textarea',
      ),
      array(
        'name'    => __( 'Organization', 'cmb2' ),
        'id'      => $prefix . 'organization',
        'type' => 'text_medium',
      ),
    )
  );
	return $meta_boxes;
}


add_action( 'init', 'create_tag_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ), 
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Tags' ),
  ); 

  register_taxonomy('tag','napsavid',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));
}

?>