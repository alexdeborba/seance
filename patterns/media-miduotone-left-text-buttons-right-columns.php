<?php
/**
 * Title: Media mid-duotone on the left with heading, text, buttons on the right
 * Slug: seance/media-miduotone-left-text-buttons-right-columns
 * Categories: posts
 * Description: Grouped text, buttons and media on a mid-duotone block pattern
 * Keywords: buttons, text, media, columns
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(90deg,rgb(15,15,16) 30%,rgba(0,0,0,0) 20%)"},"spacing":{"padding":{"top":"3em","right":"10%","bottom":"3em","left":"15%"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(90deg,rgb(15,15,16) 30%,rgba(0,0,0,0) 20%);margin-top:0px;margin-bottom:0px;padding-top:3em;padding-right:10%;padding-bottom:3em;padding-left:15%">
    <!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0">
        <!-- wp:column {"verticalAlignment":"center","width":"33.33%","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
            <!-- wp:image {"id":1798,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topRight":null,"bottomLeft":null,"bottomRight":null}}}} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/gallery-dark-left.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%">
            <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
            <div class="wp-block-columns">
                <!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"5%","bottom":"5%","left":"5%"}}}} -->
                <div class="wp-block-column" style="padding-top:5%;padding-bottom:5%;padding-left:5%">
                    <!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontSize":"60px"}}} -->
                    <h3 class="wp-block-heading alignwide" style="font-size:60px"><?php echo wp_kses_post(__('Pioneers of Modern <em>Spiritualism</em>', 'seance')); ?></h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p><?php echo wp_kses_post(__('In the quaint village of Hydesville, New York, in the late 1840s, we, Margaret, Catherine and Leah Fox, ignited a movement that would reverberate through the annals of history.<br><br>Our mysterious communications with the spirit realm through a series of rappings captured the imagination of a nation, leading to the birth of Modern Spiritualism.', 'seance')); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:spacer {"height":"10px"} -->
                    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"foreground"} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button" href="#" rel=""><?php echo esc_html_e('Learn More', 'seance'); ?></a></div>
                        <!-- /wp:button -->
                        <!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" target="" rel=""><?php echo esc_html_e('About Us', 'seance'); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->