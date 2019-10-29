<?php
/**
 * Bootstrap Carousel - Hero section.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}

// Create id attribute allowing for custom "anchor" value.
$id = 'bcb-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'bcb';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$rows             = get_field('carousel_repeater');
$image            = $rows[0]['carousel_image'];
$image_id         = $image['ID'];
$image_attachment = wp_get_attachment_image_src($image_id, 'full');
$text             = $rows[0]['carousel_text'];
$image_url        = $image['url'];
$image_alt        = $image['alt'];

if (have_rows('carousel_repeater')): // Check if rows exist

    ?>

	<!-- <section class="jumbotron text-center"> -->
	<section>

	    <?php
    // var_dump($rows);

    ?>
	    <div id="<?php echo esc_attr('ActiveID'); ?>" class="carousel slide carousel-fade" data-pause="hover"
	        data-ride="carousel" data-interval="5000" data-keyboard="true">

	        <div class="carousel-inner">

	            <div class="carousel-item active">

	                <img class="d-block slideImg" src="<?php echo $image_attachment[0]; ?>"
	                    alt="<?php echo esc_attr($image_alt); ?>" />
	                <div class="carousel-caption d-block">
	                    <h2><?php echo $text; ?></h2>

	                </div>

	            </div>

	            <?php

    $rows = array_slice($rows, 1);
    foreach ($rows as $row) {
        $image            = $row['carousel_image'];
        $image_id         = $image['ID'];
        $image_attachment = wp_get_attachment_image_src($image_id, 'full');
        $text             = $row['carousel_text'];
        $image_url        = $image['url'];
        $image_alt        = $image['alt'];

        ?>

	            <div class="carousel-item">
	                <img class="d-block slideImg" src="<?php echo esc_url($image_attachment[0]); ?>"
	                    alt="<?php echo esc_attr($image_alt); ?>" />
	                <div class="carousel-caption d-block">
	                    <h2><?php echo $text; ?></h2>

	                </div>

	            </div>

	            <?php }
    ?>

	            <a class="carousel-control-prev" href="#<?php echo esc_attr('ActiveID'); ?>" role="button"
	                data-slide="prev">
	                <i class="fa fa-chevron-circle-left fa-5x" aria-hidden="true"></i>
	                <span class="sr-only">Previous</span>
	            </a>
	            <a class="carousel-control-next" href="#<?php echo esc_attr('ActiveID'); ?>" role="button"
	                data-slide="next">
	                <i class="fa fa-chevron-circle-right fa-5x" aria-hidden="true"></i>
	                <span class="sr-only">Next</span>
	            </a>

	        </div>

	    </div>



	    </ul>

	</section>

	<?php endif;