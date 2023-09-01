<?php
/**
 * Title: Footer Light with site logo, and copyright
 * Slug: seancewp/footer-light-logo
 * Categories: footer
 * Description: Footer with logo and copyright on a light block pattern
 * Keywords: footer
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 * 
 * @package seancewp
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem">
        <!-- wp:site-logo {"width":60} /-->
        <!-- wp:paragraph {"align":"right"} -->
        <p class="has-text-align-right">
            <?php
            /* Translators: WordPress link. */
            $wordpress_link = '<a href="' . esc_url(__('https://wordpress.org', 'seancewp')) . '" rel="nofollow">WordPress</a>';
            echo sprintf(
                esc_html__('Proudly powered by %1$s', 'seancewp'),
                $wordpress_link
            );
            ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->