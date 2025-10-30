<?php 
$certification_title = get_the_title($certification); 
$certification_display_title = get_field('certification_display_title', $certification); 
$certification_description = get_field('certification_description', $certification);
$certification_read_more = get_field('certification_read_more', $certification); 
?>

<article 
    class="certification-card" 
    id="certification-<?php echo $certification; ?>" 
    aria-labelledby="certification-<?php echo $certification; ?>-title"
>
    <div class="certification-card-content-wrapper">
        <div class="certification-card-title-wrapper">
            <h5 id="certification-<?php echo $certification; ?>-title">
                <?php echo $certification_display_title ? $certification_display_title : $certification_title ?>
            </h5>
        </div>

        <?php if (!empty($certification_description)) { ?>
            <div class="certification-card-description-wrapper wysiwyg">
                <?php echo $certification_description ?>
            </div>
        <?php } ?>

        <?php if (!empty($certification_read_more)) { ?>
            <button 
                class="readmore-btn" 
                id="readmore-btn-<?php echo $certification; ?>"
                data-target="readmore-<?php echo $certification; ?>"
                aria-controls="readmore-<?php echo $certification; ?>"
                aria-expanded="false"
            >
                Read More 
                <span class="visually-hidden">
                    about <?php echo esc_html($certification_display_title ? $certification_display_title : $certification_title); ?>
                </span>
            </button>

            <div 
                id="readmore-<?php echo $certification; ?>" 
                class="certification-card-read-more-wrapper" 
                hidden
            >
                <?php echo $certification_read_more ?>
            </div>
        <?php } ?>
    </div>
</article>
