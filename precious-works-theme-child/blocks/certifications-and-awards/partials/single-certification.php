<?php 
$certification_title = get_the_title($certification); 
$certification_display_title = get_field('certification_display_title', $certification); 
$certification_description = get_field('certification_description', $certification);
$certification_read_more = get_field('certification_read_more', $certification); ?>


<article class="certification-card" aria-labelledby="certification-<?php echo $certification; ?>">
    <div class="certification-card-content-wrapper">
        <div class="certification-card-title-wrapper">
            <h5><?php echo $certification_display_title ? $certification_display_title : $certification_title ?></h5>
        </div>
        <?php if(!empty($certification_description)) { ?>
            <div class="certification-card-description-wrapper">
                <?php echo $certification_description  ?>
            </div>
        <?php } ?>
        <?php if(!empty($certification_read_more)) { ?>
            <button class="readmore-btn">Read More</button>
            <div class="certification-card-read-more-wrapper">
                <?php echo $certification_read_more ?>
            </div>
        <?php } ?>
    </div>
</article>
