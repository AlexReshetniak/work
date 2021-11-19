<?php

add_action( 'init', 'custom_fix_thumbnail' );

function custom_fix_thumbnail() {
    add_filter( 'woocommerce_placeholder_img_src', 'custom_woocommerce_placeholder_img_src' );
    function custom_woocommerce_placeholder_img_src( $src ) {
        $src = get_template_directory_uri(). '/src/assets/images/live/placeholder.png';
        return $src;
    }
}
