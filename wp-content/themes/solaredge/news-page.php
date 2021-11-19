<?php
/*
Template Name: News Page
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
  <div class="news-list m-listing">
    <div class="container">
      <?php $annual_reports_posts = get_posts( array(
        'numberposts'      => 9,
        'category'         => 0,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'suppress_filters' => true,
      ) );

      if ( $annual_reports_posts ): ?>
        <div class="news-list-wrapper m-listing__wrapper">
          <?php foreach ( $annual_reports_posts as $post ):
            setup_postdata( $post );
            if ( wp_is_mobile() ) {
              $image = get_the_post_thumbnail( $post->ID, 'bwcet_290-210' );
            } else {
              $image = get_the_post_thumbnail( $post->ID, 'bwcet_255-170' );
            }
            ?>
            <div class="post-item">
              <div class="posts-image"><?php echo $image; ?></div>
              <div class="posts-date"><?php echo get_the_date( 'jS F Y' ); ?></div>
              <div class="posts-title"><?php the_title(); ?></div>
              <div class="posts-description"><?php echo get_the_excerpt(); ?></div>
              <a class="posts-href" href="<?php the_permalink(); ?>"><?php _e( 'Read more', 'bishop-wilkinson' ); ?></a>
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
