<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
	
	wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/slider/swiper.min.css');

	wp_enqueue_script('swiper-bundle-js', get_stylesheet_directory_uri() . '/assets/slider/swiper-bundle.min.js', array('jquery'), null, true);

	wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/script/custom.js', array(), null, true);

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function tools_slider_shortcode() {
    ob_start();
    if (locate_template('templates/tools-slider/tools-template.php')) {
        get_template_part('templates/tools-slider/tools-template');
    } else {
        echo '<p>Tools Slider template not found.</p>';
    }
    return ob_get_clean();
}

add_shortcode('tools_slider', 'tools_slider_shortcode');


function tesimonial_slider_shortcode() {
    ob_start();
    if (locate_template('templates/testimonial-slider/testimonial-template.php')) {
        get_template_part('templates/testimonial-slider/testimonial-template');
    } else {
        echo '<p>Testimonial Slider template not found.</p>';
    }
    return ob_get_clean();
}

add_shortcode('testimonial_slider', 'tesimonial_slider_shortcode');  


function images_grid_shortcode() {
    ob_start();
    if (locate_template('templates/hover-images/images-template.php')) {
        get_template_part('templates/hover-images/images-template');
    } else {
        echo '<p>Images Grid template not found.</p>';
    }
    return ob_get_clean();
}

add_shortcode('images_grid', 'images_grid_shortcode');


function client_logos_shortcode() {
    ob_start();
    if (locate_template('templates/client-logo/logos-template.php')) {
        get_template_part('templates/client-logo/logos-template');
    } else {
        echo '<p>Client Logo template not found.</p>';
    }
    return ob_get_clean();
}

add_shortcode('client_logos', 'client_logos_shortcode');  


function tooltip_shortcode() {
    ob_start();
    if (locate_template('templates/tooltip/tooltip-template.php')) {
        get_template_part('templates/tooltip/tooltip-template');
    } else {
        echo '<p>Tooltip template not found.</p>';
    }
    return ob_get_clean();
}

add_shortcode('tooltip_section', 'tooltip_shortcode');  


// Client Logo Custom Field

function create_client_logos_cpt() {
    $labels = array(
        'name'          => __( 'Client Logos' ),
        'singular_name' => __( 'Client Logo' ),
        'menu_name'     => __( 'Client Logos' ),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_nav_menus'  => false,
        'exclude_from_search'=> true,
        'has_archive'        => false,
        'supports'           => array( 'title')
    );
    
    register_post_type( 'client_logos', $args );
}
add_action( 'init', 'create_client_logos_cpt' );



// Tools slider Custom Field

function create_challenges_cpt() {
    $labels = array(
        'name'          => __( 'Challenges Slider' ),
        'singular_name' => __( 'Challenges Slider' ),
        'menu_name'     => __( 'Challenges Slider' ),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_nav_menus'  => false,
        'exclude_from_search'=> true,
        'has_archive'        => false,
        'supports'           => array( 'title', 'thumbnail', 'editor' )
    );
    
    register_post_type( 'challenges_slider', $args );
}
add_action( 'init', 'create_challenges_cpt' );


// Images Expand Grid Field

function create_images_expand_cpt() {
    $labels = array(
        'name'          => __( 'Image Grid' ),
        'singular_name' => __( 'Image Grid' ),
        'menu_name'     => __( 'Image Grid' ),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_nav_menus'  => false,
        'exclude_from_search'=> true,
        'has_archive'        => false,
        'supports'           => array( 'title', 'thumbnail', 'editor' )
    );
    
    register_post_type( 'images_expand_grid', $args );
}
add_action( 'init', 'create_images_expand_cpt' );


// Testimonial Field

function create_testimonial_cpt() {
    $labels = array(
        'name'          => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonials' ),
        'menu_name'     => __( 'Testimonials' ),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_nav_menus'  => false,
        'exclude_from_search'=> true,
        'has_archive'        => false,
        'supports'           => array( 'title', 'thumbnail', 'editor' )
    );
    
    register_post_type( 'testimonial_section', $args );
}
add_action( 'init', 'create_testimonial_cpt' );


// Tooltip Field 1

function create_tooltip_col_one_cpt() {
    $labels = array(
        'name'          => __( 'Tooltip First Row' ),
        'singular_name' => __( 'Tooltip First Row' ),
        'menu_name'     => __( 'Tooltip First Row' ),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_nav_menus'  => false,
        'exclude_from_search'=> true,
        'has_archive'        => false,
        'supports'           => array( 'title', 'thumbnail', 'editor' )
    );
    
    register_post_type( 'tooltip_col_one', $args );
}
add_action( 'init', 'create_tooltip_col_one_cpt' );


function create_tooltip_col_two_cpt() {
    $labels = array(
        'name'          => __( 'Tooltip Second Row' ),
        'singular_name' => __( 'Tooltip Second Row' ),
        'menu_name'     => __( 'Tooltip Second Row' ),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_nav_menus'  => false,
        'exclude_from_search'=> true,
        'has_archive'        => false,
        'supports'           => array( 'title', 'thumbnail', 'editor' )
    );
    
    register_post_type( 'tooltip_col_two', $args );
}
add_action( 'init', 'create_tooltip_col_two_cpt' );


// Hero Section Background Image

function create_bg_img_cpt() {
    $labels = array(
        'name'          => __( 'Hero Section Background'),
        'singular_name' => __( 'Hero Section Background'),
        'menu_name'     => __( 'Hero Section Background'),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'show_ui'            => true,
        'show_in_nav_menus'  => false,
        'exclude_from_search'=> true,
        'has_archive'        => false,
        'supports'           => array('thumbnail' )
    );
    
    register_post_type( 'hero_bg_img', $args );
}
add_action( 'init', 'create_bg_img_cpt' );



function add_dynamic_hero_bg_image() {
    // Query the latest 'hero_bg_img' post
    $args = array(
        'post_type'      => 'hero_bg_img',
        'posts_per_page' => 1,
        'post_status'    => 'publish',
    );
    
    $hero_bg_img_post = new WP_Query($args);
    
    if ($hero_bg_img_post->have_posts()) {
        $hero_bg_img_post->the_post();
        
        if (has_post_thumbnail()) {
            $thumbnail_url = get_the_post_thumbnail_url();
        }

        if (!empty($thumbnail_url)) {
            echo "
                <style>
                .main--hero-section::after {
                    background: url('{$thumbnail_url}') center center no-repeat;
                    background-size: contain;
                }
                </style>
            ";
        }

        wp_reset_postdata();
    }
}
add_action('wp_head', 'add_dynamic_hero_bg_image');

