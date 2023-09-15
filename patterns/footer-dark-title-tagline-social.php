<?php
/**
 * Title: Footer dark with site title, tagline, and social icons
 * Slug: seance/footer-dark-title-tagline-social
 * Categories: footer
 * Description: Footer with site title, tagline, and icons on a dark block pattern
 * Keywords: footer, title, tagline, social
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem">
        <!-- wp:group -->
        <div class="wp-block-group">
            <!-- wp:site-title {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"textTransform":"uppercase"}}} /-->
            <!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0.25em","bottom":"0px"}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:social-links {"iconBackgroundColor":"foreground","iconBackgroundColorValue":"var(--wp--preset--color--foreground)","layout":{"type":"flex","justifyContent":"right"}} -->
        <ul class="wp-block-social-links has-icon-background-color">
            <!-- wp:social-link {"url":"facebook.com","service":"facebook","label":"Facebook"} /-->
            <!-- wp:social-link {"url":"linkedin.com","service":"linkedin",,"label":"LinkedIn"} /-->
            <!-- wp:social-link {"url":"instagram.com","service":"instagram","label":"Instagram"} /-->
            <!-- wp:social-link {"url":"pinterest.com","service":"pinterest","label":"Pinterest"} /-->
            <!-- wp:social-link {"url":"wordpress.org","service":"wordpress","label":"WordPress"} /-->
        </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->