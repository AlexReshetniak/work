<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Digital_Allies
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
    if ( is_singular() ) :
      the_title( '<h1 class="entry-title">', '</h1>' );
    else :
      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    endif;
    ?>
    <?php
    if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb( '<p class="breadcrumb" id="breadcrumbs">','</p>' );
    }
    ?>

    <div class="entry-meta">
      <?php
      digitalallies_posted_on();
      ?>
    </div><!-- .entry-meta -->

    <span class="post-title"><?php the_title(); ?></span>

  </header><!-- .entry-header -->

  <?php digitalallies_post_thumbnail(); ?>

  <span class="post-sub">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</span>

  <div class="entry-content">
    <?php
    the_content( sprintf(
      wp_kses(
      /* translators: %s: Name of current post. Only visible to screen readers */
        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'digitalallies' ),
        array(
          'span' => array(
            'class' => array(),
          ),
        )
      ),
      get_the_title()
    ) );

    wp_link_pages( array(
      'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'digitalallies' ),
      'after'  => '</div>',
    ) );
    ?>

    <div class="post-social">
      <span>Share</span>
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo str_replace('http://','', get_the_permalink()); ?>" target="_blank">
        <i>
          <svg xmlns="http://www.w3.org/2000/svg" width="9.775" height="17.593" viewBox="0 0 9.775 17.593"><g transform="translate(0 0)"><path d="M35.774,71.943c0-.578.368-1.013.7-1.013h2.791V67.871H36.472a4.144,4.144,0,0,0-3.992,4.4v1.69H29.491v2.875H32.48v8.63h3.294v-8.63h2.963l.529-2.875H35.774Z" transform="translate(-29.491 -67.871)" fill="#2e2e2d"/></g></svg>
        </i>
      </a>
      <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo str_replace('http://','', get_the_permalink()); ?>" target="_blank">
        <i>
          <svg xmlns="http://www.w3.org/2000/svg" width="17.594" height="17.348" viewBox="0 0 17.594 17.348"><rect width="3.76" height="12.103" transform="translate(0.099 5.246)" fill="#2e2e2d"/><path d="M106.911,78.776c0-3.562-1.856-5.22-4.33-5.22a4.352,4.352,0,0,0-3.737,1.954h-.075L98.6,73.829H95.33c.051,1.088.1,2.35.1,3.861v8.241h3.763V78.954a2.679,2.679,0,0,1,.125-.941,2.066,2.066,0,0,1,1.929-1.409c1.36,0,1.905,1.06,1.905,2.621v6.707h3.759Z" transform="translate(-89.318 -68.584)" fill="#2e2e2d"/><path d="M89.033,66.691a1.884,1.884,0,1,0,1.979,1.879A1.867,1.867,0,0,0,89.033,66.691Z" transform="translate(-87.028 -66.691)" fill="#2e2e2d"/></svg>
        </i>
      </a>
      <a href="https://twitter.com/share?url=<?php echo str_replace('http://','', get_the_permalink()); ?>" target="_blank">
        <i>
          <svg xmlns="http://www.w3.org/2000/svg" width="17.828" height="14.492" viewBox="0 0 17.828 14.492"><path d="M166.024,70.665a7.358,7.358,0,0,1-2.322.887,3.658,3.658,0,0,0-6.328,2.5,3.611,3.611,0,0,0,.094.836,10.4,10.4,0,0,1-7.538-3.824,3.666,3.666,0,0,0,1.132,4.887,3.648,3.648,0,0,1-1.658-.458v.045a3.66,3.66,0,0,0,2.934,3.586,3.681,3.681,0,0,1-.964.128,3.753,3.753,0,0,1-.687-.064,3.667,3.667,0,0,0,3.417,2.538,7.333,7.333,0,0,1-4.542,1.564,7.078,7.078,0,0,1-.873-.049A10.4,10.4,0,0,0,164.7,74.477c0-.154,0-.313-.009-.471h0a7.413,7.413,0,0,0,1.824-1.894,7.375,7.375,0,0,1-2.1.578A3.678,3.678,0,0,0,166.024,70.665Z" transform="translate(-148.69 -70.395)" fill="#2e2e2d"/></svg>
        </i>
      </a>
    </div>
  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

<div class="posts-common post-type">
  <div class="container">
    <h2>
      <?php if(get_post_type() == 'results_and_awards') { ?>
        <?php _e( 'Results, awards and performance', 'bishop-wilkinson' ); ?>
      <?php } else {?>
        <?php _e( 'Related news', 'bishop-wilkinson' ); ?>
      <?php } ?>
    </h2>
    <div class="swiper-container js-posts-slider">
      <div class="swiper-wrapper">

        <?php
$result = wp_get_recent_posts( [
	'numberposts'      => 3,
	'offset'           => 0,
	'category'         => 0,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => get_post_type(),
	'post_status'      => 'publish',
	'suppress_filters' => true,
], OBJECT );
foreach( $result as $post ){
	setup_postdata( $post );
  if( wp_is_mobile() ) {
    $image = get_the_post_thumbnail( $post->ID, 'bwcet_290-210' );
  } else {
    $image = get_the_post_thumbnail( $post->ID, 'bwcet_255-170' );
  }
	?>
        <div class="swiper-slide">
          <li>
            <div class="posts-image">
              <?php echo $image; ?>
            </div>
            <div class="posts-date"><?php echo get_the_date('jS F Y'); ?></div>
            <a class="posts-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <div class="posts-description"><?php echo get_the_excerpt(); ?></div>
            <a class="posts-href" href="<?php the_permalink(); ?>"><?php _e( 'Read more', 'bishop-wilkinson' ); ?></a>
          </li>
        </div>
  <?php
}
        wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="js-posts-pg posts-pagitanion"></div>
    <div class="posts-link">
    </div>  </div>
</div>

