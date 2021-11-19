<?php
/**
 * Content_block Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'content_block-' . $block['id'];
if( !empty($block['anchor']) ) {
  $id = $block['anchor'];
}
$className = 'content_block';
if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

$bwcet_content_variation = get_field('bwcet_content_variation');
$bwcet_content_variation_img_align = $bwcet_content_variation['bwcet_formated_image_align'];
$bwcet_block_background_color = get_field('bwcet_block_background_color');
?>
<section id="<?php echo esc_attr($id); ?>" class="main-content__block <?php echo esc_attr($className); ?> <?php if (empty(get_field('bwcet_divider'))): ?>m-not-divider<?php endif; ?> <?php if( $bwcet_content_variation_img_align ): ?>img-align-<?php echo $bwcet_content_variation_img_align;?><?php endif; ?>" style="background-color: <?php echo $bwcet_block_background_color; ?>">
  <div class="container">
    <?php if(!empty(get_field('bwcet_title'))): ?>
      <h2 class="main-content__block-heading"><?php the_field('bwcet_title');?></h2>
    <?php endif; ?>
    <?php if(!empty(get_field('bwcet_divider'))): ?>
      <div class="main-content__block-divider"><?php the_field('bwcet_divider'); ?></div>
    <?php endif; ?>
    <?php if(!empty(get_field('bwcet_description'))): ?>
    <div class="main-content__block-description"><?php the_field('bwcet_description'); ?></div>
    <?php endif; ?>
    <?php if( have_rows('bwcet_content_variation') ): ?>
        <?php while( have_rows('bwcet_content_variation') ): the_row();

            $bwet_content_1_column      = get_sub_field('bwet_content_1_column');
            $bwet_content_2_column      = get_sub_field('bwcet_content_2_column');
            $bwcet_formated_image       = get_sub_field('bwcet_formated_image');
            $bwcet_formated_image_align = get_sub_field('bwcet_formated_image_align');
            $bwcet_author               = get_sub_field('bwcet_author');
            $bwcet_button_atributes     = get_sub_field('bwcet_button_atributes');

            ?>
          <div class="m-flex">

            <?php if( $bwet_content_1_column ): ?>
              <div class="main-content__block-fr m-fl-clmn">
                <?php echo $bwet_content_1_column; ?>
              </div>
            <?php endif; ?>

            <div class="m-fl-clmn">

              <?php if( $bwet_content_2_column ): ?>
                <div class="main-content__block-sc">
                  <?php echo $bwet_content_2_column; ?>
                </div>
              <?php endif; ?>

              <?php if( $bwcet_author ): ?>
                <div class="main-content__block-author">
                  <?php echo $bwcet_author; ?>
                </div>
              <?php endif; ?>

            </div>

            <?php if( $bwcet_formated_image ): ?>
              <div class="main-content__block-feachured-image">
                <?php echo wp_get_attachment_image($bwcet_formated_image,'bwcet_386-280',"", array( "class" => "img-align-".$bwcet_formated_image_align )) ?>
              </div>
            <?php endif; ?>

          </div>

          <?php if(( $bwcet_button_atributes ) && ($bwcet_button_atributes['bwcet_link'])): ?>
              <div class="main-content__block-btns <?php echo $bwcet_button_atributes['bwcet_button_align']; ?>">
                  <a href="<?php echo $bwcet_button_atributes['bwcet_link']; ?>" class="btn"><?php echo $bwcet_button_atributes['bwcet_text']; ?></a>
              </div>
          <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
