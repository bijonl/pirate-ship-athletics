<?php include(locate_template('components/variables/post-variables.php')); 
$featured_image = get_the_post_thumbnail($id, 'landscape-thumbnail', array('class' => '')); 
$date = get_the_date('F j, Y', $id); ?>

<div class="single-post-tile">
    <a href=<?php echo $permalink ?> class="color-inherit">
        <div class="single-post-image-wrapper">
            <?php echo $featured_image ? $featured_image : wp_get_attachment_image($default_blog_image, 'full', false, array('class' => 'w-100 h-auto'))?>
        </div>
        <div class="single-post-title-wrapper">
            <h4 class="mb-0"><?php echo $title ?></h4>
        </div>
        <div class="single-post-date-wrapper">
            <p class="mb-0"><?php echo $date ?></p>
        </div>
    </a>
</div>