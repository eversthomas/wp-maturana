<?php
/**
* Dequeue jQuery Migrate script in WordPress.
*/
function wp_maturana_dequeue_jquery() {
    wp_deregister_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'wp_maturana_dequeue_jquery' );