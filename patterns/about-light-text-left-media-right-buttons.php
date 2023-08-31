<?php
/**
 * Title: About light with text, media, and buttons
 * Slug: seancewp/about-light-text-left-media-right-buttons
 * Categories: posts
 * Description: About with text, media and buttons on a light block pattern
 * Keywords: text, media, buttons
 * Viewport Width: 1500
 * Block Types: 
 * Post Types: 
 * Inserter: true
 * 
 * @package seancewp
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3em","bottom":"3em"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:3em;padding-bottom:3em">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"top":"var:preset|spacing|80"}}}} -->
        <div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--80);flex-basis:33.33%">
            <!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontSize":"60px"}}} -->
            <h3 class="wp-block-heading alignwide" style="font-size:60px"><?php echo wp_kses_post(__('Welcome to<br>the <em>Unknown</em>', 'seancewp')); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:spacer {"height":"30px"} -->
            <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"bottom","width":"66.66%"} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66.66%">
            <!-- wp:image {"id":1747,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/about-light-top.jpg")); ?>" alt="<?php esc_html_e('The Fox Sisters', 'seancewp'); ?>" /></figure>
            <!-- /wp:image -->
            <!-- wp:paragraph -->
            <p><?php echo esc_html_e('We are Margaret, Catherine, and Leah Fox, renowned spiritual mediums from a bygone era, now embracing the digital age. With our unique abilities, we have connected countless souls with the messages of the spirit world', 'seancewp'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:spacer {"height":"10px"} -->
            <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"foreground"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button" href="#"><?php echo esc_html_e('Learn More', 'seancewp'); ?></a></div>
                <!-- /wp:button -->
                <!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_e('About Us', 'seancewp'); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->