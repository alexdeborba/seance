<?php
/**
 * Title: Event light media with heading, paragraphs, buttons on two columns
 * Slug: seance/event-light-media-text-buttons-light-two-columns
 * Categories: featured, columns, gallery, image, buttons
 * Description: Event with two images, text and buttons on a light block pattern
 * Keywords: image, heading, paragraph, columns
 * Viewport Width: 1500
 * Block Types: 
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"8rem","right":"0rem","bottom":"8rem","left":"0rem"}}}} -->
        <div class="wp-block-column" style="padding-top:8rem;padding-right:0rem;padding-bottom:8rem;padding-left:0rem">
            <!-- wp:image {"sizeSlug":"large"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/poster-light-left.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
            <!-- /wp:image -->
            <!-- wp:spacer {"height":30} -->
            <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:heading {"fontSize":"x-large"} -->
            <h2 class="has-x-large-font-size" id="spiritual-summit"><?php echo esc_html_e('Spiritual Summit', 'seance'); ?></h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p><?php echo wp_kses_post(__('March 31, 1848 @ 7:00PM<br>Hydesville Memorial Park<br>1510 Hydesville Road, Newark<br>NY 14513', 'seance')); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:spacer {"height":8} -->
            <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:spacer {"height":10} -->
            <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"foreground"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-foreground-background-color has-background"><?php echo esc_html_e('Buy Tickets', 'seance'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"8rem","right":"0rem","bottom":"8rem","left":"0rem"}}}} -->
        <div class="wp-block-column" style="padding-top:8rem;padding-right:0rem;padding-bottom:8rem;padding-left:0rem">
            <!-- wp:image {"sizeSlug":"large"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/poster-light-right.jpg")); ?>"" alt=" <?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
            <!-- /wp:image -->
            <!-- wp:spacer {"height":30} -->
            <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:heading {"fontSize":"x-large"} -->
            <h2 class="has-x-large-font-size" id="ethereal-echoes"><?php echo esc_html_e('Ethereal Echoes', 'seance'); ?></h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p><?php echo wp_kses_post(__('November 14, 1888 @ 7:00PM<br>Cypress Hills Cemetery<br>833 Jamaica Avenue<br>Brooklyn, NY 11208', 'seance')); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:spacer {"height":8} -->
            <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:spacer {"height":10} -->
            <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"foreground"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-foreground-background-color has-background"><?php echo wp_kses_post(__('Buy Tickets', 'seance')); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->