<?php
/**
 * Title: Gallery dark with heading, paragraph, and buttons
 * Slug: seancewp/gallery-duotone-text-buttons-two-columns
 * Categories: gallery
 * Description: Gallery with heading, paragraph, and buttons on a dark block pattern
 * Keywords: gallery, columns, media, buttons
 * Viewport Width: 1500
 * Block Types: 
 * Post Types: 
 * Inserter: true
 * 
 * @package seancewp
 * @since 1.0.0
 */
?>

<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(90deg,rgba(0,0,0,0) 20%,rgb(15,15,16) 20%)"},"spacing":{"padding":{"top":"4em","bottom":"4em","right":"0%","left":"0px"}}},"textColor":"primary","className":"has-responsive-dark-background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-responsive-dark-background has-primary-color has-text-color has-background" style="background:linear-gradient(90deg,rgba(0,0,0,0) 20%,rgb(15,15,16) 20%);padding-top:4em;padding-right:0%;padding-bottom:4em;padding-left:0px">
    <!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0">
        <!-- wp:column {"verticalAlignment":"center","width":"33.33%","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
            <!-- wp:image {"scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topRight":null,"bottomLeft":null,"bottomRight":null}}}} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/gallery-dark-left.jpg")); ?>" alt="The Fox Sisters" style="object-fit:cover" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"66.66%","layout":{"type":"default"}} -->
        <div class="wp-block-column" style="flex-basis:66.66%">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":null,"bottomLeft":null,"bottomRight":null}}}} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/gallery-dark-top.jpg")); ?>" alt="The Fox Sisters" /></figure>
            <!-- /wp:image -->
            <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
            <div class="wp-block-columns">
                <!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"top":"5%","bottom":"5%","left":"5%"}}}} -->
                <div class="wp-block-column" style="padding-top:5%;padding-bottom:5%;padding-left:5%;flex-basis:66.66%">
                    <!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontSize":"60px"}}} -->
                    <h3 class="wp-block-heading alignwide" style="font-size:60px"><?php echo wp_kses_post(__('<em>Séance</em>, a Full Site Editing Theme', 'seancewp')); ?></h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p><?php echo wp_kses_post(__('Introducing our WordPress FSE theme, <em>Séance</em>, a portal that intertwines the elegance of bygone eras with modern design.<br><br>Crafted with ethereal aesthetics and intuitive functionalities, let your website be the medium that bridges the past with the present, and the seen with the unseen.', 'seancewp')); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:spacer {"height":"10px"} -->
                    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"textColor":"foreground"} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-text-color wp-element-button" href="#" target="_blank" rel="noreferrer noopener"><?php esc_html_e('Browse', 'seancewp'); ?></a></div>
                        <!-- /wp:button -->
                        <!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Download', 'seancewp'); ?></a></div>
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