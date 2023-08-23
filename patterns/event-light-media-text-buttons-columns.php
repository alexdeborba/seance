<?php
/**
 * Title: Event light wide with media, heading, paragraph, buttons on columns
 * Slug: seance/event-light-media-text-buttons-columns
 * Categories: featured, columns, image, text, buttons
 * Description: Event with media, text, and buttons on light block pattern
 * Keywords: image, heading, paragraph, buttons
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
    <!-- wp:image {"sizeSlug":"large"} -->
    <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/welcome-unknown.jpg")); ?>" alt="<?php echo esc_html_e('The Unknown Widows', 'seance'); ?>" /></figure>
    <!-- /wp:image -->
    <!-- wp:columns {"verticalAlignment":null} -->
    <div class="wp-block-columns">
        <!-- wp:column {"verticalAlignment":"bottom"} -->
        <div class="wp-block-column is-vertically-aligned-bottom">
            <!-- wp:heading {"style":{"typography":{"fontSize":"clamp(3.25rem, 8vw, 6.25rem)","lineHeight":"1.15"}}} -->
            <h2 style="font-size:clamp(3.25rem, 8vw, 6.25rem);line-height:1.15"><?php echo wp_kses_post(__('Welcome to<br>the <em>Unknown</em>', 'seance')); ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"bottom":"6rem"}}}} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="padding-bottom:6rem">
        <!-- wp:paragraph -->
            <p><?php echo wp_kses_post(__('From the pioneers of Spiritualism, now in the digital realm, experience a séance like no other. Secure your spot for this exclusive online event and connect with the beyond. Tickets are limited.<br><br>Do not miss your chance to bridge the worlds.', 'seance')); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:spacer {"height":20} -->
            <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link"><?php echo esc_html_e('Learn More', 'seance'); ?></a></div>
                <!-- /wp:button -->
                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link"><?php echo esc_html__('Buy Tickets', 'seance'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->