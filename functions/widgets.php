<?php
/**
* register sidebars
*/
add_action( 'widgets_init', 'wp_maturana_register_sidebars' );
function wp_maturana_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Register the 'footer' widgets. */
    register_sidebar(
        array(
            'id'            => 'footer-1',
            'name'          => __( 'Footer widget 1' ),
            'description'   => __( 'Footer widget 1' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'footer-2',
            'name'          => __( 'Footer widget 2' ),
            'description'   => __( 'Footer widget 2' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'footer-3',
            'name'          => __( 'Footer widget 3' ),
            'description'   => __( 'Footer widget 3' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}