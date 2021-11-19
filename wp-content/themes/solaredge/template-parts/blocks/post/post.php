<div class="posts-common">
  <div class="container">
    <?php if(!empty(get_field('bwcet_title'))):?>
      <h2><?php the_field('bwcet_title');?></h2>
    <?php endif; ?>


    <?php
    $featured_posts = get_field('bwcet_post_types');
    if( $featured_posts ): ?>

    <div class="swiper-container js-posts-slider">
      <div class="swiper-wrapper">
        <?php foreach( $featured_posts as $post ):
          setup_postdata($post);
          if( wp_is_mobile() ) {
            $image = get_the_post_thumbnail( $post->ID, 'bwcet_290-210' );
          } else {
            $image = get_the_post_thumbnail( $post->ID, 'bwcet_255-170' );
          }
          ?>
          <div class="swiper-slide">
          <li>
            <div class="posts-image"><?php echo $image; ?></div>
            <div class="posts-date"><?php echo get_the_date('jS F Y'); ?></div>
            <a class="posts-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <div class="posts-description"><?php echo get_the_excerpt(); ?></div>
            <a class="posts-href" href="<?php the_permalink(); ?>"><?php _e( 'Read more', 'bishop-wilkinson' ); ?></a>
          </li>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php wp_reset_postdata(); ?>
    <div class="js-posts-pg posts-pagitanion"></div>
    <?php endif; ?>
    <div class="posts-link">
      <?php
      $link = get_field('bwcet_button');
      if( $link ):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ?: '_self';
        ?>
        <a href="<?php echo esc_url( $link_url ); ?>" class="btn" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
    </div>  </div>
</div>
