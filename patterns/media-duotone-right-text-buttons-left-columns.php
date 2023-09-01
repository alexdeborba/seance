<?php
/**
 * Title: Media duotone on the right with heading, text, buttons on the left
 * Slug: seancewp/media-duotone-right-text-buttons-left-columns
 * Categories: posts
 * Description: Grouped text, buttons and media on a duotone block pattern
 * Keywords: buttons, text, media, columns
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: true
 * 
 * @package seancewp
 * @since 1.0.0
 */
?>

<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(90deg,rgb(15,15,16) 70%,rgba(0,0,0,0) 20%)"},"spacing":{"padding":{"top":"3em","bottom":"3em","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","className":"has-responsive-dark-background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-primary-color has-text-color has-background" style="background:linear-gradient(90deg,rgb(15,15,16) 70%,rgba(0,0,0,0) 20%);margin-top:0px;margin-bottom:0px;padding-top:3em;padding-right:0px;padding-bottom:3em;padding-left:0px">
    <!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0">
        <!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%">
            <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
            <div class="wp-block-columns">
                <!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"top":"5%","bottom":"5%","left":"0px"}}}} -->
                <div class="wp-block-column" style="padding-top:5%;padding-bottom:5%;padding-left:0px;flex-basis:66.66%">
                    <!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontSize":"60px"}}} -->
                    <h3 class="wp-block-heading alignwide" style="font-size:60px"><?php echo wp_kses_post(__('Pioneers of Modern <em>Spiritualism</em>', 'seancewp')); ?></h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p><?php echo wp_kses_post(__('In the quaint village of Hydesville, New York, in the late 1840s, we, Margaret, Catherine and Leah Fox, ignited a movement that would reverberate through the annals of history.<br><br>Our mysterious communications with the spirit realm through a series of rappings captured the imagination of a nation, leading to the birth of Modern Spiritualism.', 'seancewp')); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:spacer {"height":"10px"} -->
                    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"foreground","className":"is-style-fill"} -->
                        <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button" href="#" rel=""><?php echo esc_html_e('Learn More', 'seancewp'); ?></a></div>
                        <!-- /wp:button -->
                        <!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" target="_blank" rel=""><?php echo esc_html_e('About Us', 'seancewp'); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"center","width":"33.33%","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
            <!-- wp:image {"id":1798,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topRight":null,"bottomLeft":null,"bottomRight":null}}}} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/gallery-dark-left.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seancewp'); ?>" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->