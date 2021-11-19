<?php get_header(); ?>
  <div class="job">

    <div class="container">

      <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </header><!-- .entry-header -->

      <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p class="breadcrumb" id="breadcrumbs">','</p>' );
      } ?>

      <?php
      $vacancy_info = get_field('bwcet_vacancy_info');
      if ( ! empty( $vacancy_info ) ) : ?>
        <div class="job-descr__bg">
          <span class="job-descr__bg-title"><?php echo $vacancy_info['heading'] ?></span>
          <div class="job-descr__bg-column">
            <?php echo $vacancy_info['left_column'] ?>
          </div>
          <div class="job-descr__bg-column">
            <?php echo $vacancy_info['right_column'] ?>
          </div>
        </div>
      <?php endif; ?>

      <div class="job-main__descr">
        <?php the_content(); ?>
      </div>
    </div>

  </div>
<?php
get_sidebar();
get_footer();
