<?php 
$certifications_and_awards = get_field('certifications_and_awards');
include(locate_template('blocks/partials/global-block-variables.php')); 

// Set number of columns (default = 2)
$review_columns = 3; 

// Early exit if no content
$has_content = have_rows('certifications_and_awards') || $has_button_area || $has_title_area;
if (!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?> 
    <div class="certifications-container container">

    <?php if($certifications_and_awards) { ?>
         <div class="certifications-row row row-cols-3">
            <?php foreach($certifications_and_awards as $certification) { ?>
                <?php include(locate_template('blocks/certifications-and-awards/partials/single-certification.php')); ?>       
            <?php } ?>
        </div>
    <?php } ?>
        <div class="button-row row">
            <div class="button-col col-12 mx-auto text-center">
                <?php include(locate_template('blocks/partials/button-area.php')); ?>
            </div>
        </div>   
    </div>
</section>
