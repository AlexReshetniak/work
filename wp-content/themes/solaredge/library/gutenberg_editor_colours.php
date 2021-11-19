<?php

if ( ! function_exists( 'digitalallies_gutenberg_support' ) ) :
	function digitalallies_gutenberg_support() {

    // Add foundation color palette to the editor
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Black', 'digitalallies' ),
            'slug' => 'black',
            'color' => '#000000',
        ),
        array(
            'name' => __( 'Pink', 'digitalallies' ),
            'slug' => 'pink',
            'color' => '#eecec5',
        ),
        array(
            'name' => __( 'Blue', 'digitalallies' ),
            'slug' => 'blue',
            'color' => '#96d4df',
        ),
        array(
            'name' => __( 'Mint', 'digitalallies' ),
            'slug' => 'mint',
            'color' => '#a9ddc6',
        ),
        array(
            'name' => __( 'Yellow', 'digitalallies' ),
            'slug' => 'yellow',
            'color' => '#f6d257',
        ),
        array(
            'name' => __( 'Peach', 'digitalallies' ),
            'slug' => 'peach',
            'color' => '#f57460',
        ),
        array(
            'name' => __( 'Tan', 'digitalallies' ),
            'slug' => 'tan',
            'color' => '#d1ae93',
        )
    ) );

	}

	add_action( 'after_setup_theme', 'digitalallies_gutenberg_support' );
endif;
