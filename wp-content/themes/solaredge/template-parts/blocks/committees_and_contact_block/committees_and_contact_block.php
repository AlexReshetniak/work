<?php
/**
 * Local Governing Committees and contacts Block Template.
 *
 * @param array $block The block settings and attributes.
 */

$id        = 'committees_and_contact_block-' . $block['id'];
$className = 'committees_and_contact_block';

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
<section id="<?php echo esc_attr( $id ); ?>" class="committees_and_contact_block__block <?php echo esc_attr( $className ); ?>">
  <div class="governed-info">
    <div class="governed-info__col">
      <?php if ( ! empty( get_field( 'bwcet_left_heading' ) ) ) : ?>
        <div class="info-title">
          <?php the_field( 'bwcet_left_heading' ); ?>
        </div>
      <?php endif; ?>
      <?php if ( ! empty( get_field( 'bwcet_left_content' ) ) ) : ?>
        <div class="info-content">
          <?php the_field( 'bwcet_left_content' ); ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="governed-info__col">
      <div class="info-contacts">
        <?php if ( ! empty( get_field( 'bwcet_right_heading' ) ) ) : ?>
          <div class="info-contacts__title">
            <?php the_field( 'bwcet_right_heading' ); ?>
          </div>
        <?php endif; ?>
        <?php if ( have_rows( 'bwcet_right_contacts' ) ):
          while ( have_rows( 'bwcet_right_contacts' ) ) : the_row(); ?>
            <div class="info-contacts__item">
              <?php if ( ! empty( get_sub_field( 'position' ) ) ) : ?>
                <div class="info-contacts__item-position">
                  <?php the_sub_field( 'position' ); ?>
                </div>
              <?php endif; ?>
              <?php if ( ! empty( get_sub_field( 'name' ) ) ) : ?>
                <div class="info-contacts__item-name">
                  <?php the_sub_field( 'name' ); ?>
                </div>
              <?php endif; ?>
              <?php if ( ! empty( get_sub_field( 'email' ) ) ) : ?>
                <a href="mailto:<?php the_sub_field( 'email' ); ?>">
                  <?php the_sub_field( 'email' ); ?>
                </a>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
