<?php
/**
 * Configure responsive images sizes
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 2.6.0
 */

// Add featured image sizes
//
// Sizes are optimized and cropped for landscape aspect ratio
// and optimized for HiDPI displays on 'small' and 'medium' screen sizes.
add_image_size( 'featured-small', 640, 200, true ); // name, width, height, crop
add_image_size( 'featured-medium', 1280, 400, true );
add_image_size( 'featured-large', 1440, 400, true );
add_image_size( 'featured-xlarge', 1920, 400, true );

// Add additional image sizes
add_image_size( 'fp-small', 640 );
add_image_size( 'fp-medium', 1024 );
add_image_size( 'fp-large', 1200 );
add_image_size( 'fp-xlarge', 1920 );


add_image_size( 'bwcet_255-170', 255, 170, true );
add_image_size( 'bwcet_290-210', 290, 210, true );
add_image_size( 'bwcet_386-280', 386, 280, true );
add_image_size( 'bwcet_140-195', 140, 195, true );
add_image_size( 'bwcet_160-220', 160, 220, true );
add_image_size( 'bwcet_610-462', 610, 462, true );
add_image_size( 'bwcet_255-255', 255, 255, true );
add_image_size( 'bwcet_290-195', 290, 195, true );
