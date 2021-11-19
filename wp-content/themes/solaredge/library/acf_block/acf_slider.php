<?php

/**
 * Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$select = get_field('slider_select');
$slider = get_field('slider');
$title = get_field('slider_title');
$link = get_field('slider_link');
$link_text = get_field('slider_link_text');
$slider_true = ($select === 'slider');
$table_true = ($select === 'table');
if($slidertrue) {
    $className = 'js-acf-slider';
}
if($tableTrue) {
    $className = $select;
}

    ?>
    <div class='acf-slider'>
        <div class='acf-slider__header'>
            <?php
            if($title) {
                ?>
                <h3><?= $title ?></h3>
                <?php
            }
            if($link && $link_text) {
                ?>
                <a href="<?= $link ?>"><?= $link_text ?></a>
                <?php
            }
            ?>
        </div>
        <?php
        if($table_true) {
            ?>
            <div class="<?php echo esc_attr($className); ?>" id="<?php echo esc_attr($id); ?>">
            <?php 
        }
        if($slider_true) {
            ?>
            <div class="swiper <?php echo esc_attr($className); ?>" id="<?php echo esc_attr($id); ?>">
            <div class="swiper-wrapper">
            <?php
        }
                if($slider) {
                    foreach($slider as $row) {
                        $img = $row['slider_img'];
                        if($tableTrue) {
                            ?>
                            <div class="<?php echo esc_attr($className); ?>__slide ">
                            <?php
                        }
                        if($slidertrue) {
                            ?>
                            <div class="swiper-slide  <?php echo esc_attr($className); ?>__slide ">
                            <?php
                        }
                        ?>
                                <img src="<?= $img ?>" />
                            </div>
                    <?php
                    }
                }
                if($slider_true) {
                    ?>
                    </div>
                    <div class="swiper-scrollbar <?php echo esc_attr($className); ?>__scrollbar"></div>
                    <?php
                }
            ?>
        </div>
    </div>
    <?php
?>
