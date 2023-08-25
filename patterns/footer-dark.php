<?php
/**
 * Title: Footer dark with site title and copyright
 * Slug: seance/footer-dark
 * Categories: footer
 * Description: Footer in a dark block pattern
 * Keywords: footer
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var(--wp--custom--spacing--small, 1.25rem)","bottom":"var(--wp--custom--spacing--small, 1.25rem)"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:site-title {"level":0} /-->
        <!-- wp:paragraph {"align":"right"} -->
        <p class="has-text-align-right">
            <?php
            /* Translators: WordPress link. */
            $wordpress_link = '<a href="' . esc_url(__('https://wordpress.org', 'twentytwentyfour')) . '" rel="nofollow">WordPress</a>';
            echo sprintf(
                esc_html__('Proudly powered by %1$s', 'seance'),
                $wordpress_link
            );
            ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->