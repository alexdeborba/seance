<?php
/**
 * Title: Footer light with social icons, and copyright
 * Slug: seance/footer-light-social-copyright
 * Categories: footer
 * Description: Footer with social icons and copyright on a light block pattern
 * Keywords: footer, social, icons, copyright
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}}} -->
    <div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem">
        <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","iconBackgroundColor":"background","iconBackgroundColorValue":"var(--wp--preset--color--background)","layout":{"type":"flex","justifyContent":"center"}} -->
        <ul class="wp-block-social-links has-icon-color has-icon-background-color">
            <!-- wp:social-link {"url":"facebook.com","service":"facebook","label":"Facebook"} /-->
            <!-- wp:social-link {"url":"linkedin.com","service":"linkedin",,"label":"LinkedIn"} /-->
            <!-- wp:social-link {"url":"instagram.com","service":"instagram","label":"Instagram"} /-->
            <!-- wp:social-link {"url":"pinterest.com","service":"pinterest","label":"Pinterest"} /-->
            <!-- wp:social-link {"url":"wordpress.org","service":"wordpress","label":"WordPress"} /-->
        </ul>
        <!-- /wp:social-links -->
        <!-- wp:spacer {"height":50} -->
        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
        <p class="has-text-align-center" style="font-size:16px"><?php echo esc_html__('© Site Title', 'seance'); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->