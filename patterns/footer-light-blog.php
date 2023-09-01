<?php
/**
 * Title: Footer light with about, latest posts, categories, site title and copyright
 * Slug: seancewp/footer-light-blog
 * Categories: footer
 * Description: Blog footer on a light block pattern
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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
            <p style="text-transform:uppercase"><?php echo esc_html_e('About us', 'seancewp'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p><?php echo esc_html_e('We are the Fox sisters, Margaret, Catherine, and Leah. Hailing from Hydesville, New York, our lives took a mystifying turn in 1848 when we discovered our unique connection to the spirit realm.', 'seancewp'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
            <p style="text-transform:uppercase"><?php echo esc_html_e('Latest Posts', 'seancewp'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:latest-posts /-->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
            <p style="text-transform:uppercase"><?php echo esc_html_e('Categories', 'seancewp'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:categories /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    <!-- wp:spacer {"height":50} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem">
        <!-- wp:site-title {"level":0} /-->
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