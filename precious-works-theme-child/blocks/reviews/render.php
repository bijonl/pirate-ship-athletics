<?php 
$reviews = get_field('reviews');
include(locate_template('blocks/partials/global-block-variables.php')); 

// Set number of columns (default = 2)
$review_columns = 3; 

// Early exit if no content
$has_content = have_rows('reviews') || $has_button_area || $has_title_area;
if (!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
}

// Prepare review columns
$columns = array_fill(0, $review_columns, []);

if ($reviews && count($reviews) > 0) {
    foreach ($reviews as $i => $review) {
        $col_index = $i % $review_columns;
        $columns[$col_index][] = $review;
    }
}
?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?> 

    <div class="reviews-container container">
        <div class="reviews-row row justify-content-center">
            <?php 
            // Loop through each column dynamically
            foreach ($columns as $col_index => $column_reviews) { 
                // Bootstrap column width (2-column = col-lg-5, 3-column = col-lg-4, adjust as needed)
                $col_class = ($review_columns === 3) ? 'col-md-6 col-lg-4' : 'col-md-6 col-lg-5'; 
            ?>
                <div class="reviews-col <?php echo esc_attr($col_class); ?>">
                    <?php foreach ($column_reviews as $review_id) { ?>
                        <?php include(locate_template('components/variables/review-variables.php')); ?>
                        <?php include(locate_template('blocks/reviews/partials/single-review.php')); ?>       
                    <?php } ?>
                </div>
            <?php } ?>
        </div>

        <div class="button-row row">
            <div class="button-col col-12 mx-auto text-center">
                <?php include(locate_template('blocks/partials/button-area.php')); ?>
            </div>
        </div>   
    </div>
</section>
