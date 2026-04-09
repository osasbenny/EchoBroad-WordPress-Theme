<?php
/**
 * EchoBroad Theme Functions
 */

if ( ! function_exists( 'echobroad_setup' ) ) :
    function echobroad_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'menu-1' => esc_html__( 'Primary', 'echobroad' ),
        ) );

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add support for core custom logo.
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );

        // Add support for Elementor and Block Editor
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );
    }
endif;
add_action( 'after_setup_theme', 'echobroad_setup' );

/**
 * Enqueue scripts and styles.
 */
function echobroad_scripts() {
    // Enqueue the main CSS file from assets
    wp_enqueue_style( 'echobroad-style', get_template_directory_uri() . '/assets/index-BmJKvE7q.css', array(), '1.0.0' );
    
    // Only enqueue the React app on the front-end and NOT in the editor/Elementor
    if ( ! is_admin() && ! is_customize_preview() && ! isset( $_GET['elementor-preview'] ) ) {
        // Enqueue the main JS file from assets as a module
        wp_enqueue_script( 'echobroad-script', get_template_directory_uri() . '/assets/index-D_DrbjYX.js', array(), '1.0.0', true );
        
        // Add type="module" to the script tag
        add_filter('script_loader_tag', 'echobroad_add_module_to_script', 10, 3);
    }

    // Enqueue Paystack script
    wp_enqueue_script( 'paystack-inline', 'https://js.paystack.co/v1/inline.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'echobroad_scripts' );

/**
 * Filter to add type="module" to the script tag
 */
function echobroad_add_module_to_script($tag, $handle, $src) {
    if ('echobroad-script' === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}

/**
 * Fix for "Not a valid JSON response" error
 * This can be caused by the theme outputting something unexpected during REST API calls.
 */
function echobroad_fix_rest_api_json_error() {
    // Ensure no extra output before REST API responses
    if ( defined( 'REST_REQUEST' ) && REST_REQUEST ) {
        // You can add specific REST API fixes here if needed
    }
}
add_action( 'rest_api_init', 'echobroad_fix_rest_api_json_error' );
