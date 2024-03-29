<?php
/**
 * Title: About - Dark (Heading, Paragraph, and Social Icons Centered Middle)
 * Slug: seance/about-dark-text-social-middle
 * Categories: about, dark, heading, paragraph, social
 * Description: A dark block pattern for an about section featuring text and social icons centered in the middle.
 * Keywords: dark, heading, paragraph, social
 * Viewport Width: 1500
 * Block Types: core/group, core/cover, core/heading, core/paragraph, core/social-links, core/spacer
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"}}},"backgroundColor":"foreground"} -->
<div class="wp-block-group alignfull has-foreground-background-color has-background" style="padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem">
    <!-- wp:cover {"dimRatio":0,"minHeight":80,"minHeightUnit":"vh","isDark":false,"align":"full","textColor":"primary"} -->
    <div class="wp-block-cover alignfull is-light has-primary-color has-text-color" style="min-height:80vh">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
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
                <!-- wp:social-links {"iconColor":"background","iconColorValue":"var(--wp--preset--color--background)","iconBackgroundColor":"foreground","iconBackgroundColorValue":"var(--wp--preset--color--foreground)","openInNewTab":true} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color">
                    <!-- wp:social-link {"url":"facebook.com","service":"facebook","label":"Facebook"} /-->
                    <!-- wp:social-link {"url":"linkedin.com","service":"linkedin","label":"LinkedIn"} /-->
                    <!-- wp:social-link {"url":"instagram.com","service":"instagram","label":"Instagram"} /-->
                    <!-- wp:social-link {"url":"pinterest.com","service":"pinterest","label":"Pinterest"} /-->
                    <!-- wp:social-link {"url":"wordpress.org","service":"wordpress","label":"WordPress"} /-->
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