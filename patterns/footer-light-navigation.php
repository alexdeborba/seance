<?php
/**
 * Title: Footer light with navigation, and copyright
 * Slug: seance/footer-light-navigation
 * Categories: footer
 * Description: Footer with navigation, and copyright in a light block pattern
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

<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem">
        <!-- wp:navigation -->
        <!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
        <!-- /wp:navigation -->
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