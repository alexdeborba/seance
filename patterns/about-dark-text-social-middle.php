<?php
/**
 * Title: About dark with heading, paragraph, and social icons on the middle
 * Slug: seance/about-dark-text-social-middle
 * Categories: pages
 * Description: About with text on the middle dark block pattern
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
    <!-- wp:cover {"overlayColor":"foreground","minHeight":80,"minHeightUnit":"vh","align":"full"} -->
    <div class="wp-block-cover alignfull" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-100 has-background-dim"></span>
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"layout":{"inherit":false,"contentSize":"400px","type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:spacer {"height":"64px"} -->
                <div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:heading {"style":{"typography":{"lineHeight":"1","textTransform":"uppercase","fontSize":"clamp(2.75rem, 6vw, 3.25rem)"}}} -->
                <h2 class="wp-block-heading" id="margaret-fox" style="font-size:clamp(2.75rem, 6vw, 3.25rem);line-height:1;text-transform:uppercase"><?php echo wp_kses_post(__('Margaret<br>Fox', 'seance')); ?></h2>
                <!-- /wp:heading -->
                <!-- wp:spacer {"height":"8px"} -->
                <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><?php echo esc_html_e('I am Margaret Fox, one of the pioneering sisters from the dawn of spiritualism. With my unique gift, I bridged the gap between the living and the departed, revealing mysteries from the other side.', 'seance'); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:spacer {"height":"8px"} -->
                <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--foreground)","className":"is-style-logos-only"} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only">
                    <!-- wp:social-link {"url":"#","service":"facebook"} /-->
                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                    <!-- wp:social-link {"url":"#","service":"twitter"} /-->
                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                    <!-- wp:social-link {"url":"#","service":"pinterest"} /-->
                    <!-- wp:social-link {"url":"#","service":"wordpress"} /-->
                </ul>
                <!-- /wp:social-links -->
                <!-- wp:spacer {"height":"64px"} -->
                <div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->