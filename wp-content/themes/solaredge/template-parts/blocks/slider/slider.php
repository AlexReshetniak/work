<?php
/**
* Testimonial Block Template.
*
* @param   array $block The block settings and attributes.
* @param   string $content The block inner HTML (empty).
* @param   bool $is_preview True during AJAX preview.
* @param   (int|string) $post_id The post ID this block is saved to.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'slider-' . $block['id'];
if( !empty($block['anchor']) ) {
$id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className = 'slider';
if( !empty($block['className']) ) {
$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="main-slider <?php echo esc_attr($className); ?>">
  <div class="main-slider__inner">
    <div class="swiper-container js-main-slider">
      <div class="swiper-wrapper">
        <?php
        if( have_rows('bwcet_slider') ) :
          while( have_rows('bwcet_slider') ) :
            the_row();
            $slide_desc = get_sub_field('bwcet_slider_description')
        ?>
          <div class="swiper-slide">
            <div class="main-slider__image" style="background-image: url(<?php echo get_sub_field('bwcet_slider_image');?>)"></div>
            <div class="main-slider__text"><?php if(!empty($slide_desc)): ?><div class="container"><span><?php echo $slide_desc;?></span></div><?php endif;?></div>
          </div>
        <?php
          endwhile;
        endif;
        ?>
      </div>
      <div class="main-slider__pagination js-main-pagitanion container"></div>
    </div>
  </div>
</section>
