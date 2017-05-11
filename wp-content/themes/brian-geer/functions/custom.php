<?php 
/* 
====================
	CUSTOM PHP HERE
====================
*/

// Main SLider Image Sizing

add_image_size( 'slider-image-small', 960, 582, true );
add_image_size( 'slider-image', 1280, 775, true );
add_image_size( 'slider-image-retina', 1920, 1163, true );

add_image_size( 'sub-page', 1920 , 424, true );

add_image_size( 'gallery-large', 1000, 1000, true );
add_image_size( 'gallery-medium', 650, 650, true );


// change image quailty
add_filter( 'jpeg_quality', 'smashing_jpeg_quality' );
function smashing_jpeg_quality() {
    return 70;
}




// Create Portfolio Custom Post Type
add_action( 'init', 'gallery_init' );

function gallery_init() {
    $labels = array(
        'name'               => 'Gallery',
        'singular_name'      => 'Gallery',
        'menu_name'          => 'Gallery',
        'name_admin_bar'     => 'Gallery',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Gallery',
        'new_item'           => 'New Gallery',
        'edit_item'          => 'Edit Gallery Item',
        'view_item'          => 'View Gallery',
        'all_items'          => 'All Gallery Items',
        'search_items'       => 'Search Gallerys',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-format-gallery',
        'supports'           => array( 'title')
    );

    register_post_type( 'gallery', $args );

}


// Add Options Field For Gallery Post Type

if ( function_exists( 'acf_add_options_sub_page' ) ){
    acf_add_options_sub_page(array(
        'title'      => 'Gallery Settings',
        'parent'     => 'edit.php?post_type=gallery',
        'capability' => 'manage_options'
    ));
}




// Add Current Menu Item Class To Custom Post Types

add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );

function add_current_nav_class($classes, $item) {

    // Getting the current post details
    global $post;

    // Getting the post type of the current post
    $current_post_type = get_post_type_object(get_post_type($post->ID));
    $current_post_type_slug = $current_post_type->rewrite['slug'];

    // Getting the URL of the menu item
    $menu_slug = strtolower(trim($item->url));

    // If the menu item URL contains the current post types slug add the current-menu-item class
    if (strpos($menu_slug,$current_post_type_slug) !== false) {

        $classes[] = 'current-menu-item';

    }

    // Return the corrected set of classes to be added to the menu item
    return $classes;

}
