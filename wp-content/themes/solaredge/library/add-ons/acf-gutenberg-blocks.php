<?php
//Register ACF Gutenberg Blocks

add_action('acf/init', 'bwcet_init_block_types');
function bwcet_init_block_types() {

  if( function_exists('acf_register_block_type') ) {

    acf_register_block_type(array(
      'name'              => 'slider',
      'title'             => __('Slider'),
      'description'       => __('Slider block'),
      'render_template'   => 'template-parts/blocks/slider/slider.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'slider' ),
    ));

    acf_register_block_type(array(
      'name'              => 'content_block',
      'title'             => __('Content block'),
      'description'       => __('Content block with many parameters'),
      'render_template'   => 'template-parts/blocks/content_block/content_block.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'content_block,content' ),
    ));

    acf_register_block_type(array(
      'name'              => 'post_types',
      'title'             => __('Post types'),
      'description'       => __('Add one of the post types'),
      'render_callback'   => 'bwcet_post_types_block_render_callback',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'slider2' ),
    ));

    acf_register_block_type(array(
      'name'              => 'download_pdf_block',
      'title'             => __('Download PDF Block'),
      'description'       => __('Repeater with download PDF'),
      'render_template'   => 'template-parts/blocks/download_pdf_block/download_pdf_block.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'pdf' ),
    ));

    acf_register_block_type(array(
      'name'              => 'accordion_block',
      'title'             => __('Accordion Block'),
      'description'       => __('Repeater accordion'),
      'render_template'   => 'template-parts/blocks/accordion_block/accordion_block.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'accordion' ),
    ));

    acf_register_block_type(array(
      'name'              => 'governed_block',
      'title'             => __('Governed Block'),
      'description'       => __('Two columns governed block'),
      'render_template'   => 'template-parts/blocks/governed_block/governed_block.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'governed' ),
    ));

    acf_register_block_type(array(
      'name'              => 'committees_and_contact_block',
      'title'             => __('Local Governing Committees and contacts'),
      'description'       => __('Two columns committees and contacts block'),
      'render_template'   => 'template-parts/blocks/committees_and_contact_block/committees_and_contact_block.php',
      'category'          => 'formatting',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'committees', 'contact' ),
    ));
  }
}

function bwcet_post_types_block_render_callback( $block, $content = '', $is_preview = false, $post_id = 0 ) {
  $post_type = get_field('bwcet_post_types');
  get_template_part('template-parts/blocks/'.$post_type[0]->post_type.'/'.$post_type[0]->post_type);
}
