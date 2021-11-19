<?php
/**
 * Governed Block Template.
 *
 * @param array $block The block settings and attributes.
 */

$id        = 'governed_block-' . $block['id'];
$className = 'governed_block';

if ( ! empty( $block['anchor'] ) ) {
  $id = $block['anchor'];
}

if ( ! empty( $block['className'] ) ) {
  $className .= ' ' . $block['className'];
}

if ( ! empty( $block['align'] ) ) {
  $className .= ' align' . $block['align'];
}
?>
<section id="<?php echo esc_attr( $id ); ?>" class="governed_block__block <?php echo esc_attr( $className ); ?>">
  <div class="governed-description">
    <div class="governed-description__col">
      <?php if ( ! empty( get_field( 'bwcet_left_heading' ) ) ) : ?>
        <div class="description-title">
          <?php the_field( 'bwcet_left_heading' ); ?>
        </div>
      <?php endif; ?>
      <?php if ( ! empty( get_field( 'bwcet_left_content' ) ) ) : ?>
        <div class="description-content">
          <?php the_field( 'bwcet_left_content' ); ?>
        </div>
      <?php endif; ?>
      <div class="description-members">
        <?php if ( ! empty( get_field( 'bwcet_left_profile_heading' ) ) ) : ?>
          <div class="description-members__title">
            <?php the_field( 'bwcet_left_profile_heading' ); ?>
          </div>
        <?php endif; ?>
        <?php $bwcet_left_profile_lists = get_field( 'bwcet_left_profile_list' );
        if ( $bwcet_left_profile_lists ): ?>
          <?php foreach ( $bwcet_left_profile_lists as $left_profile_list ) : ?>
            <div class="description-members__item">
              <?php echo get_the_title( $left_profile_list->ID ); ?>
              <a href="<?php the_permalink( $left_profile_list->ID ); ?>"><?php _e( 'view profile', 'bishop-wilkinson' ) ?></a>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="governed-description__col">
      <?php if ( ! empty( get_field( 'bwcet_right_heading' ) ) ) : ?>
        <div class="description-title">
          <?php the_field( 'bwcet_right_heading' ); ?>
        </div>
      <?php endif; ?>
      <?php if ( ! empty( get_field( 'bwcet_right_content' ) ) ) : ?>
        <div class="description-content">
          <?php the_field( 'bwcet_right_content' ); ?>
        </div>
      <?php endif; ?>
      <div class="description-members">
        <?php if ( ! empty( get_field( 'bwcet_right_profile_heading' ) ) ) : ?>
          <div class="description-members__title">
            <?php the_field( 'bwcet_right_profile_heading' ); ?>
          </div>
        <?php endif; ?>
        <?php $bwcet_right_profile_lists = get_field( 'bwcet_right_profile_list' );
        if ( $bwcet_right_profile_lists ): ?>
          <?php foreach ( $bwcet_right_profile_lists as $right_profile_list ) : ?>
            <div class="description-members__item">
              <?php echo get_the_title( $right_profile_list->ID ); ?>
              <a href="<?php the_permalink( $right_profile_list->ID ); ?>"><?php _e( 'view profile', 'bishop-wilkinson' ) ?></a>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
