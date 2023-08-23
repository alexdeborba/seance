<?php
/**
 * Title: Event dark sessions with dates, names, and locations on columns
 * Slug: seance/event-dark-text-grid-columns
 * Categories: text, events
 * Description: Event dark grid with text on dark block pattern
 * Keywords: text, grid
 * Viewport Width: 1500
 * Block Types: 
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"backgroundColor":"foreground","textColor":"background"} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)">
    <!-- wp:group {"align":"full","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull">
        <!-- wp:heading {"align":"wide","style":{"typography":{"fontSize":"clamp(3.25rem, 8vw, 6.25rem)","lineHeight":"1.15"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
        <h2 class="alignwide" style="font-size:clamp(3.25rem, 8vw, 6.25rem);line-height:1.15;margin-bottom:2rem"><em><?php echo esc_html_e('Séance Sessions', 'seance'); ?></em></h2>
        <!-- /wp:heading -->
        <!-- wp:spacer {"height":32} -->
        <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <!-- wp:separator {"color":"background","align":"wide","className":"is-style-wide"} -->
        <hr class="wp-block-separator alignwide has-text-color has-background has-background-background-color has-background-color is-style-wide" />
        <!-- /wp:separator -->
        <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
        <div class="wp-block-columns alignwide are-vertically-aligned-center">
            <!-- wp:column {"verticalAlignment":"center","width":"210px"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:210px">
                <!-- wp:paragraph -->
                <p><?php echo esc_html_e('March 31, 1848, 8 - 9 pm', 'seance'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">
                <!-- wp:heading {"fontSize":"x-large"} -->
                <h2 class="has-x-large-font-size" id="margaret-fox"><?php echo esc_html_e('Margaret Fox', 'seance'); ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">
                <!-- wp:paragraph -->
                <p><?php echo wp_kses_post(__('Hydesville Memorial Park<br>1510 Hydesville Road<br>Newark, NY 14513', 'seance')); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- wp:separator {"color":"background","align":"wide","className":"is-style-wide"} -->
        <hr class="wp-block-separator alignwide has-text-color has-background has-background-background-color has-background-color is-style-wide" />
        <!-- /wp:separator -->
        <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
        <div class="wp-block-columns alignwide are-vertically-aligned-center">
            <!-- wp:column {"verticalAlignment":"center","width":"210px"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:210px">
                <!-- wp:paragraph -->
                <p><?php echo esc_html_e('March 24, 1848, 8 - 9 pm', 'seance'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">
                <!-- wp:heading {"fontSize":"x-large"} -->
                <h2 class="has-x-large-font-size" id="catherine-fox "><?php echo esc_html_e('Catherine Fox', 'seance'); ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">
                <!-- wp:paragraph -->
                <p><?php echo wp_kses_post(__('Hydesville Memorial Park<br>1510 Hydesville Road<br>Newark, NY 14513', 'seance')); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- wp:separator {"color":"background","align":"wide","className":"is-style-wide"} -->
        <hr class="wp-block-separator alignwide has-text-color has-background has-background-background-color has-background-color is-style-wide" />
        <!-- /wp:separator -->
        <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
        <div class="wp-block-columns alignwide are-vertically-aligned-center">
            <!-- wp:column {"verticalAlignment":"center","width":"210px"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:210px">
                <!-- wp:paragraph -->
                <p><?php echo esc_html_e('March 17, 1848, 8 - 9 pm', 'seance'); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">
                <!-- wp:heading {"fontSize":"x-large"} -->
                <h2 class="has-x-large-font-size" id="leah-fox"><?php echo esc_html_e('Leah Fox', 'seance'); ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">
                <!-- wp:paragraph -->
                <p><?php echo wp_kses_post(__('Hydesville Memorial Park<br>1510 Hydesville Road<br>Newark, NY 14513', 'seance')); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- wp:separator {"color":"background","align":"wide","className":"is-style-wide"} -->
        <hr class="wp-block-separator alignwide has-text-color has-background has-background-background-color has-background-color is-style-wide" />
        <!-- /wp:separator -->
        <!-- wp:spacer {"height":32} -->
        <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->