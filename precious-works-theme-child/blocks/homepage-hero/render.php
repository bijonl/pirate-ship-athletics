<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$image = get_field('image'); 
$second_image = get_field('second_image'); 
$image_url = wp_get_attachment_url($image);
$second_image_url = wp_get_attachment_url($second_image);


?>

<?php $has_content = $image || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="overlay image-overlay"></div>
    <div class="homepage-hero-container h-100">
        <div class="homepage-hero-row row align-items-center h-100">
            <div class="homepage-hero-image-col left-image col h-100">
                <div class="h-100 image-canvas" style="background-image: url('<?php echo $image_url ?>')"></div>
            </div>
            <div class="homepage-hero-col col-12 col-sm-5">
                <div class="homepage-hero-content-wrapper">
                    <?php $display_title = 'h1'; ?>
                    <?php include(locate_template('blocks/partials/title-area.php')); ?>
                    <?php include(locate_template('blocks/partials/button-area.php')); ?>
                </div>
            </div>
            <div class="homepage-hero-image-col right-image col h-100">
                <div class="h-100 image-canvas" style="background-image: url('<?php echo $second_image_url ?>')"></div>
            </div>
        </div>
    </div>
</section>