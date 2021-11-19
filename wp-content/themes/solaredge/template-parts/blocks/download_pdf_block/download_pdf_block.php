<?php
/**
 * Download_PDF Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'download_pdf_block-' . $block['id'];
$className = 'download_pdf_block';

if( !empty($block['anchor']) ) {
  $id = $block['anchor'];
}

if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}
?>
<section id="<?php echo esc_attr($id); ?>" class="download-pdf__block <?php echo esc_attr($className); ?>">
  <div class="container">
    <?php if(!empty(get_field('bwcet_heading'))): ?>
      <h2 class="download-pdf__block-heading"><?php the_field('bwcet_heading');?></h2>
    <?php endif; ?>
    <?php if( have_rows('bwcet_files') ): ?>
      <?php while( have_rows('bwcet_files') ): the_row();
        $title        = get_sub_field('title');
        $pdf_file     = get_sub_field('pdf_file');
        ?>
        <div class="download-pdf__wrap">
          <?php if( !empty( $title ) && !empty( $pdf_file ) ): ?>
            <div class="download-pdf__block-title">
              <?php echo $title; ?>
            </div>
            <div class="download-pdf__block-file">
              <a href="<?php echo esc_html(wp_get_attachment_url( $pdf_file )); ?>" class="download-pdf__block-btn">
                <i>
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 18.9 22.1" enable-background="new 0 0 18.9 22.1" xml:space="preserve">
                  <g>
                    <path fill="#003D72" d="M16.9,0H6.5C6.3,0,6.1,0.1,6,0.2L0.2,5.9C0.1,6,0,6.2,0,6.4v13.7c0,1.1,0.9,2,2,2l14.9,0c1.1,0,2-0.9,2-2V2
                      C18.9,0.9,18,0,16.9,0z M5.8,2.4v3.3H2.4L5.8,2.4z M17.5,20.1c0,0.3-0.3,0.6-0.6,0.6H2c-0.3,0-0.6-0.3-0.6-0.6v-13h5.1
                      c0.4,0,0.7-0.3,0.7-0.7v-5h9.7c0.3,0,0.6,0.3,0.6,0.6V20.1z"/>
                    <path fill="#003D72" d="M10.4,16.7h-6c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7h6c0.4,0,0.7-0.3,0.7-0.7S10.8,16.7,10.4,16.7z"/>
                    <path fill="#003D72" d="M14.5,13h-10c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7h10c0.4,0,0.7-0.3,0.7-0.7
                      C15.2,13.3,14.9,13,14.5,13z"/>
                    <path fill="#003D72" d="M14.5,9.2h-10c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7h10c0.4,0,0.7-0.3,0.7-0.7
                      C15.2,9.5,14.9,9.2,14.5,9.2z"/>
                  </g>
                  </svg>
                </i>
                <span><?php _e( 'DOWNLOAD PDF', 'bishop-wilkinson' ); ?></span>
              </a>
            </div>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
