<?php
/**
 * Accordion Block Template.
 *
 * @param array $block The block settings and attributes.
 */

$id        = 'accordion_block-' . $block['id'];
$className = 'accordion_block';

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
<section id="<?php echo esc_attr( $id ); ?>" class="accordion_block__block <?php echo esc_attr( $className ); ?>">
  <div class="accordion">
    <div class="container">
      <?php if ( ! empty( get_field( 'bwcet_heading' ) ) ): ?>
        <h2><?php the_field( 'bwcet_heading' ); ?></h2>
      <?php endif; ?>
      <?php if ( have_rows( 'bwcet_accordion' ) ): ?>
        <?php $flag = 1; ?>
        <?php while ( have_rows( 'bwcet_accordion' ) ): the_row();
          $bwcet_section_heading      = get_sub_field( 'bwcet_section_heading' );
          $bwcet_sections_sub_heading = get_sub_field( 'bwcet_sections_sub_heading' );
          $bwcet_vacancy_obj          = get_sub_field( 'bwcet_vacancy' );
          $bwcet_button_text          = get_sub_field( 'bwcet_button_text' );

          ?>
          <div class="accordion__item <?php echo ( $flag == 1 ) ? 'open' : ''; ?> js-accordion-toggle">
            <div class="accordion__item-title">
              <?php echo $bwcet_section_heading; ?>
              <div class="title-arrow <?php echo ( $flag == 1 ) ? 'show' : ''; ?>"></div>
            </div>
            <div class="accordion__item-content">
              <?php if ( $bwcet_sections_sub_heading ) : ?>
                <div class="content__name">
                  <?php echo $bwcet_sections_sub_heading; ?>
                </div>
              <?php endif; ?>
              <?php if ( ! empty( $bwcet_vacancy_obj ) ):
                $vacancy_id = $bwcet_vacancy_obj->ID;
                $vacancy_info = get_field( 'bwcet_vacancy_info', $vacancy_id );
                $vacancy_documents = get_field( 'bwcet_vacancy_documents', $vacancy_id ); ?>

                <?php if ( ! empty( $vacancy_documents ) ): ?>
                <div class="content__download">
                  <?php foreach ( $vacancy_documents as $file ) : ?>
                    <?php if ( $file ) : ?>
                      <div class="content__download-col">
                        <p>
                          <?php echo $file['file_label']; ?>
                        </p>
                        <a href="<?php echo esc_html( wp_get_attachment_url( $file['file'] ) ); ?>"
                           class="content__download-link" download>
                          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                               xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                               viewBox="0 0 18.9 22.1" enable-background="new 0 0 18.9 22.1" xml:space="preserve">
                            <g>
                              <path d="M16.9,0H6.5C6.3,0,6.1,0.1,6,0.2L0.2,5.9C0.1,6,0,6.2,0,6.4v13.7c0,1.1,0.9,2,2,2l14.9,0c1.1,0,2-0.9,2-2V2
                                C18.9,0.9,18,0,16.9,0z M5.8,2.4v3.3H2.4L5.8,2.4z M17.5,20.1c0,0.3-0.3,0.6-0.6,0.6H2c-0.3,0-0.6-0.3-0.6-0.6v-13h5.1
                                c0.4,0,0.7-0.3,0.7-0.7v-5h9.7c0.3,0,0.6,0.3,0.6,0.6V20.1z"/>
                              <path
                                d="M10.4,16.7h-6c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7h6c0.4,0,0.7-0.3,0.7-0.7S10.8,16.7,10.4,16.7z"/>
                              <path d="M14.5,13h-10c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7h10c0.4,0,0.7-0.3,0.7-0.7
                                C15.2,13.3,14.9,13,14.5,13z"/>
                              <path d="M14.5,9.2h-10c-0.4,0-0.7,0.3-0.7,0.7c0,0.4,0.3,0.7,0.7,0.7h10c0.4,0,0.7-0.3,0.7-0.7
                                C15.2,9.5,14.9,9.2,14.5,9.2z"/>
                            </g>
                        </svg>
                          <?php _e( 'DOWNLOAD', 'bishop-wilkinson' ); ?>
                        </a>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>

                <div class="content__info">
                  <?php if ( $vacancy_info['left_column'] ) : ?>
                    <div class="content__info-col">
                      <?php echo $vacancy_info['left_column']; ?>
                    </div>
                  <?php endif; ?>
                  <?php if ( $vacancy_info['right_column'] ) : ?>
                    <div class="content__info-col">
                      <?php echo $vacancy_info['right_column']; ?>
                    </div>
                  <?php endif; ?>
                </div>
                <?php if ( ! empty( $bwcet_button_text ) ) : ?>
                  <div class="content__button">
                    <a class="btn" href="<?php echo get_page_link($vacancy_id); ?>"><?php echo $bwcet_button_text ?></a>
                  </div>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          </div>
          <?php $flag ++; ?>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php if ( ! empty( get_field( 'bwcet_description' ) ) ): ?>
        <div class="accordion_block__block-description"><?php the_field( 'bwcet_description' ); ?></div>
      <?php endif; ?>
    </div>
  </div>
</section>
