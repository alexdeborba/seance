<?php
/**
 * Title: About gray with heading, paragraph, and social icons on the middle
 * Slug: seance/about-gray-text-social-middle
 * Categories: pages
 * Description: About with text on the middle gray block pattern
 * Keywords: heading, paragraph, social
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">
    <!-- wp:cover {"overlayColor":"secondary","minHeight":80,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
    <div class="wp-block-cover alignfull is-light" style="min-height:80vh"><span aria-hidden="true" class="has-secondary-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span>
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"layout":{"inherit":false,"contentSize":"400px"}} -->
            <div class="wp-block-group">
                <!-- wp:spacer {"height":64} -->
                <div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer --><!-- wp:heading {"style":{"typography":{"lineHeight":"1","textTransform":"uppercase","fontSize":"clamp(2.75rem, 6vw, 3.25rem)"}}} -->
                <h2 id="leah-fox" style="font-size:clamp(2.75rem, 6vw, 3.25rem);line-height:1;text-transform:uppercase"><?php echo wp_kses_post(__('Leah<br>Fox', 'seance')); ?></h2>
                <!-- /wp:heading -->
                <!-- wp:spacer {"height":8} -->
                <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><?php echo esc_html_e('I am Leah Fox, the eldest of the Fox sisters, and a cornerstone in the foundation of modern spiritualism. With wisdom and experience, I have championed our family\'s unique connection to the unseen world.', 'seance'); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:spacer {"height":8} -->
                <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","className":"is-style-logos-only"} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only">
                    <!-- wp:social-link {"url":"#","service":"facebook"} /-->
                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                    <!-- wp:social-link {"url":"#","service":"twitter"} /-->
                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                    <!-- wp:social-link {"url":"#","service":"pinterest"} /-->
                    <!-- wp:social-link {"url":"#","service":"wordpress"} /-->
                </ul>
                <!-- /wp:social-links --><!-- wp:spacer {"height":64} -->
                <div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->