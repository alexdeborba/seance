<?php
/**
 * Title: Footer light with site title, site logo, heading and paragraph
 * Slug: seance/footer-light-about
 * Categories: footer
 * Description: Footer with about paragraph on a light block pattern
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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"6rem"}}},"backgroundColor":"primary","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:6rem">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"33%"} -->
        <div class="wp-block-column" style="flex-basis:33%">
            <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
            <p style="text-transform:uppercase"><?php echo esc_html_e('About Us', 'seance'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"fontSize":"small"} -->
            <p class="has-small-font-size"><?php echo esc_html_e('We are the Fox sisters, Margaret, Catherine, and Leah. Hailing from Hydesville, New York, our lives took a mystifying turn in 1848 when we discovered our unique connection to the spirit realm.', 'seance'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:spacer {"height":180} -->
            <div style="height:180px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:site-title {"level":0} /-->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"bottom"} -->
        <div class="wp-block-column is-vertically-aligned-bottom">
            <!-- wp:site-logo {"align":"right","width":60} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->