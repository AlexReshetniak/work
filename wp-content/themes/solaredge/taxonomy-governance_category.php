<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Digital_Allies
 */

get_header();
?>

  <div id="primary" class="content-area tax-governance">
    <main id="main" class="site-main">
      <div class="container">
        <?php if ( have_posts() ) : ?>
          <header class="page-header">
            <?php $cat_title = single_cat_title( '', false ); ?>
            <h1 class="entry-title">
              <?php echo $cat_title; ?>
            </h1>
          </header><!-- .page-header -->

          <?php if ( function_exists( 'yoast_breadcrumb' ) ) {
            yoast_breadcrumb( '<p class="breadcrumb" id="breadcrumbs">', '</p>' );
          } ?>

          <h2>
            <?php _e( 'Meet our', 'bishop-wilkinson' ); ?>
            <span class="taxonomy-name" >
              <?php echo $cat_title; ?>
            </span>
          </h2>

          <div class="tax-governance__inner">
            <?php
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', get_post_type() );
              endwhile;
            else :
              get_template_part( 'template-parts/content', 'none' );
            endif; ?>
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
    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
