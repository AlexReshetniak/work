<?php

/**
 * ACF-Posts Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'acf_posts-' . $block['id'];
$className = 'acf_posts';
$head = get_field('acf_posts_head');
$block = get_field('acf_posts_block');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php 
        if($head) {
            ?>
                <h3><?= $head ?></h3>
                <div class='<?= $className ?>__content'>
            <?php
        }
                    if($block) {
                        foreach($block as $row) {
                            $img = $row['acf_posts_img'];
                            $title = $row['acf_posts_title'];
                            $link = $row['acf_posts_link'];
                            if($img) {
                                ?>
                                    <div class='<?= $className ?>__block'>
                                        <img src="<?= $img; ?>" alt="<?= $img; ?>">
                                <?php
                            }
                                if($link && $title) {
                                    ?>
                                        <a href="<?= $link; ?>">
                                            <h5><?= $title; ?></h5>
                                        </a>
                                    </div>
                                    <?php
                                }
                        }
                    }
                ?>
                </div>
</div>