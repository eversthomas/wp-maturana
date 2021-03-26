<?php
/**
 * wp_maturana's functions and definitions
 *
 * @package wp_maturana
 * @since wp_maturana 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */
 
if ( ! function_exists( 'wp_maturana_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function wp_maturana_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'wp_maturana', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'wp_maturana' ),
        'secondary' => __('Secondary Menu', 'wp_maturana' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    
    /**
     * Enable gutenberg block support
     */
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_attr__( 'strong magenta', 'themeLangDomain' ),
            'slug' => 'strong-magenta',
            'color' => '#a156b4',
        ),
        array(
            'name' => esc_attr__( 'light grayish magenta', 'themeLangDomain' ),
            'slug' => 'light-grayish-magenta',
            'color' => '#d0a5db',
        ),
        array(
            'name' => esc_attr__( 'very light gray', 'themeLangDomain' ),
            'slug' => 'very-light-gray',
            'color' => '#eee',
        ),
        array(
            'name' => esc_attr__( 'very dark gray', 'themeLangDomain' ),
            'slug' => 'very-dark-gray',
            'color' => '#444',
        ),
    ) );
    
    add_theme_support( 'wp-block-styles' );
    
    add_theme_support( 'align-wide' );
    
    add_theme_support(
    'editor-gradient-presets',
        array(
            array(
                'name'     => esc_attr__( 'Vivid cyan blue to vivid purple', 'themeLangDomain' ),
                'gradient' => 'linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)',
                'slug'     => 'vivid-cyan-blue-to-vivid-purple'
            ),
            array(
                'name'     => esc_attr__( 'Vivid green cyan to vivid cyan blue', 'themeLangDomain' ),
                'gradient' => 'linear-gradient(135deg,rgba(0,208,132,1) 0%,rgba(6,147,227,1) 100%)',
                'slug'     =>  'vivid-green-cyan-to-vivid-cyan-blue',
            ),
            array(
                'name'     => esc_attr__( 'Light green cyan to vivid green cyan', 'themeLangDomain' ),
                'gradient' => 'linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%)',
                'slug'     => 'light-green-cyan-to-vivid-green-cyan',
            ),
            array(
                'name'     => esc_attr__( 'Luminous vivid amber to luminous vivid orange', 'themeLangDomain' ),
                'gradient' => 'linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%)',
                'slug'     => 'luminous-vivid-amber-to-luminous-vivid-orange',
            ),
            array(
                'name'     => esc_attr__( 'Luminous vivid orange to vivid red', 'themeLangDomain' ),
                'gradient' => 'linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%)',
                'slug'     => 'luminous-vivid-orange-to-vivid-red',
            ),
        )
    );
    
    add_theme_support( 'editor-font-sizes', array(
        array(
            'name' => esc_attr__( 'Small', 'themeLangDomain' ),
            'size' => 12,
            'slug' => 'small'
        ),
        array(
            'name' => esc_attr__( 'Regular', 'themeLangDomain' ),
            'size' => 16,
            'slug' => 'regular'
        ),
        array(
            'name' => esc_attr__( 'Large', 'themeLangDomain' ),
            'size' => 36,
            'slug' => 'large'
        ),
        array(
            'name' => esc_attr__( 'Huge', 'themeLangDomain' ),
            'size' => 50,
            'slug' => 'huge'
        )
    ) );
    
    add_theme_support( 'editor-styles' );
    
    add_theme_support( 'responsive-embeds' );
    
    add_theme_support('custom-spacing');
    
}
endif; // wp_maturana_setup
add_action( 'after_setup_theme', 'wp_maturana_setup' );

/**
* enqueue styles and scripts
*/
function wp_maturana_scripts() {
  // wp_enqueue_style( 'style', get_stylesheet_uri() ); no need, because css is loading via sass plugin
 
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/navigation.js', array (), 1.1, true);
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.3.1', true);
 
   // if ( is_singular() &amp;amp;amp;&amp;amp;amp; comments_open() &amp;amp;amp;&amp;amp;amp; get_option( 'thread_comments' ) ) {
    //  wp_enqueue_script( 'comment-reply' );
    // }
}
add_action( 'wp_enqueue_scripts', 'wp_maturana_scripts' );

/**
* externe functions
*/
get_template_part( 'functions/widgets' ); // register sidebars

// get_template_part( 'functions/jquery' ); // dequeue jquery

// get_template_part( 'functions/emoji' ); // disable emojis

// get_template_part( 'functions/restapi' ); // disable rest api
