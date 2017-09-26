<?php 

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );


function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Primary Menu' )			
		)
	);

}


add_action( 'init', 'register_theme_menus' );




function hmi_theme_styles() {
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css');
    

}

add_action( 'wp_enqueue_scripts', 'hmi_theme_styles' );




function hmi_theme_scripts() {
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.js', array( 'jquery' ), '2.1.3', true );
    
}
add_action( 'wp_enqueue_scripts', 'hmi_theme_scripts' );




// custom post type function

function create_posttype() {

 

    register_post_type( 'dogs',

    // CPT Options

        array(

            'labels' => array(

                'name' => __( 'Dogs' ),

                'singular_name' => __( 'Dogs' )

            ),

            'public' => true,

            'has_archive' => true,

            'rewrite' => array('slug' => 'dogs'),

        )

    );

}





/*

* Creating a function to create our CPT

*/

 

function custom_post_type() {

 

// Set UI labels for Custom Post Type

    $labels = array(

        'name'                => _x( 'Dogs', 'Post Type General Name', 'HMI' ),

        'singular_name'       => _x( 'Dogs', 'Post Type Singular Name', 'HMI' ),

        'menu_name'           => __( 'Dogs', 'HMI' ),

        'parent_item_colon'   => __( 'Parent Dogs', 'HMI' ),

        'all_items'           => __( 'All Dogs', 'HMI' ),

        'view_item'           => __( 'View Dog', 'HMI' ),

        'add_new_item'        => __( 'Add New Dog', 'HMI' ),

        'add_new'             => __( 'Add New', 'HMI' ),

        'edit_item'           => __( 'Edit Dog', 'HMI' ),

        'update_item'         => __( 'Update Dog', 'HMI' ),

        'search_items'        => __( 'Search Dog', 'HMI' ),

        'not_found'           => __( 'Not Found', 'HMI' ),

        'not_found_in_trash'  => __( 'Not found in Trash', 'HMI' ),

    );

     

// Set other options for Custom Post Type

     

    $args = array(

        'label'               => __( 'dogs', 'hmi' ),

        'description'         => __( 'Dog news and reviews', 'hmi' ),

        'labels'              => $labels,

        // Features this CPT supports in Post Editor

        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

        // You can associate this CPT with a taxonomy or custom taxonomy.

        'taxonomies'          => array( 'genres' ),

        /* A hierarchical CPT is like Pages and can have

        * Parent and child items. A non-hierarchical CPT

        * is like Posts.

        */ 

        'hierarchical'        => false,

        'public'              => true,

        'show_ui'             => true,

        'show_in_menu'        => true,

        'show_in_nav_menus'   => true,

        'show_in_admin_bar'   => true,

        'menu_position'       => 5,

        'can_export'          => true,

        'has_archive'         => true,

        'exclude_from_search' => false,

        'publicly_queryable'  => true,

        'capability_type'     => 'page',

    );

     

    // Registering your Custom Post Type

    register_post_type( 'dogs', $args );

 

}

 

/* Hook into the 'init' action so that the function

* Containing our post type registration is not

* unnecessarily executed.

*/

 

add_action( 'init', 'custom_post_type', 0 );




?>