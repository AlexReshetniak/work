<?php
/*
Template Name: Annual Report Page
*/
get_header();
?>
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->
<?php
if ( function_exists( 'yoast_breadcrumb' ) ) {
  yoast_breadcrumb( '<p class="breadcrumb" id="breadcrumbs">', '</p>' );
}
?>
  <div class="annual-report-list m-listing">
    <div class="container">
      <?php $annual_reports_posts = get_posts( array(
        'numberposts'      => 9,
        'category'         => 0,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'annual_reports',
        'suppress_filters' => true,
      ) );

      if ( $annual_reports_posts ): ?>
        <div class="annual-report-list-wrapper m-listing__wrapper">
          <?php foreach ( $annual_reports_posts as $post ):
            setup_postdata( $post );
            if ( wp_is_mobile() ) {
              $image = get_the_post_thumbnail( $post->ID, 'bwcet_140-195' );
            } else {
              $image = get_the_post_thumbnail( $post->ID, 'bwcet_160-220' );
            }
            ?>
            <div class="annual-report-list__item m-listing__item">
              <div class="annual-report-list__item-image m-listing__item-image">
                <?php echo $image; ?>
              </div>
              <div class="annual-report-list__item-title m-listing__item-title">
                <?php the_title(); ?>
              </div>
              <div class="annual-report-list__description m-listing__item-description">
                <?php echo get_the_excerpt(); ?>
              </div>

              <?php
              $pdf_file = get_field( 'pdf_file', $post->ID );
              if ( ! empty( $pdf_file ) ): ?>
                <div class="download-pdf">
                  <a href="<?php echo esc_html( wp_get_attachment_url( $pdf_file ) ); ?>"
                     class="download-pdf__block-btn posts-href" download>
                    <i>
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 18.9 22.1" enable-background="new 0 0 18.9 22.1" xml:space="preserve">
                          <g>
                            <path fill="#003D72" d="M16.9,0H6.5C6.3,0,6.1,0.1,6,0.2L0.2,5.9C0.1,6,0,6.2,0,6.4v13.7c0,1.1,0.9,2,2,2l14.9,0c1.1,0,2-0.9,2-2V2
                              C18.9,0.9,18,0,16.9,0z M5.8,2.4v3.3H2.4L5.8,2.4z M17.5,20.1c0,0.3-0.3,0.6-0.6,0.6H2c-0.3,0-0.6-0.3-0.6-0.6v-13h5.1
                              c0.4,0,0.7-0.3,0.7-0.7v-5h9.7c0.3,0,0.6,0.3,0.6,0.6V20.1z"/>
                            <path fill="#003D72"
                                  d="M10.4,16.7h-6c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7h6c0.4,0,0.7-0.3,0.7-0.7S10.8,16.7,10.4,16.7z"/>
                            <path fill="#003D72" d="M14.5,13h-10c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7h10c0.4,0,0.7-0.3,0.7-0.7
                              C15.2,13.3,14.9,13,14.5,13z"/>
                            <path fill="#003D72" d="M14.5,9.2h-10c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7h10c0.4,0,0.7-0.3,0.7-0.7
                              C15.2,9.5,14.9,9.2,14.5,9.2z"/>
                          </g>
                          </svg>
                    </i>
                    <?php _e( 'DOWNLOAD PDF', 'bishop-wilkinson' ); ?>
                  </a>
                </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="pagination">
    <div class="container">
      <div class="pagination-wrapper">
        <div class="pagination__item pagination__item--first">
          <img src="/wp-content/themes/bishop-wilkinson/src/assets/images/arrow-start.svg" alt="">
          First
        </div>
        <div class="pagination__item pagination__item--prev">
          <img src="/wp-content/themes/bishop-wilkinson/src/assets/images/arrow-left.svg" alt="">
          Prev
        </div>
        <div class="pagination__item pagination__item--page active">
          1
        </div>
        <div class="pagination__item pagination__item--page">
          2
        </div>
        <div class="pagination__item pagination__item--page">
          3
        </div>
        <div class="pagination__item pagination__item--next">
          Next
          <img src="/wp-content/themes/bishop-wilkinson/src/assets/images/arrow-right.svg" alt="">
        </div>
        <div class="pagination__item pagination__item--last">
          Last
          <img src="/wp-content/themes/bishop-wilkinson/src/assets/images/arrow-end.svg" alt="">
        </div>
      </div>
    </div>
  </div>
<?php
get_sidebar();
get_footer();
