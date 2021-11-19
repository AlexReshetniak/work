<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Digital_Allies
 */
?>
<div class="profile">
  <div class="profile__inner">
    <div class="profile__column m-photo">
      <div class="profile__photo">
        <?php echo get_the_post_thumbnail( get_the_ID() ); ?>
      </div>
      <div class="posts-title-wrapper">
        <span class="posts-title"><?php the_title(); ?></span>
        <span class="posts-title"><?php the_field( 'bwcet_job_title' ); ?></span>
      </div>
      <a class="posts-href" href="<?php the_permalink(); ?>">
        <?php _e( 'Read more', 'bishop-wilkinson' ); ?>
      </a>
    </div>
  </div>
</div>
