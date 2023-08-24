<?php
/**
 * Title: Event dark session with media on the left, and date, name, location on right sidebar
 * Slug: seance/event-dark-media-text-right-sidebar
 * Categories: text, media, sidebar
 * Description: Event dark session with right sidebar dark block pattern
 * Keywords: text, media, sidebar
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","backgroundColor":"foreground","textColor":"primary","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-color has-foreground-background-color has-text-color has-background">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"5%"}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"70%"} -->
        <div class="wp-block-column" style="flex-basis:70%">
            <!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"},"spacing":{"margin":{"bottom":"0px"}}}} -->
            <h1 class="wp-block-heading alignwide" style="margin-bottom:0px;font-size:clamp(3rem, 6vw, 4.5rem)"><?php echo wp_kses_post(__('Hydesville Memorial Park<br>1510 Hydesville Road<br>Newark, NY 14513', 'seance')); ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":""} -->
        <div class="wp-block-column"></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"5%"}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"bottom":"32px"}}}} -->
        <div class="wp-block-column" style="padding-bottom:32px;flex-basis:70%">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/poster-session-duotone.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:spacer {"height":"16px"} -->
            <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size"><em><?php echo esc_html_e('Event', 'seance'); ?></em></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p><?php echo esc_html_e('Private Séance Session', 'seance'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:separator {"backgroundColor":"background","className":"is-style-wide"} -->
            <hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-wide" />
            <!-- /wp:separator -->
            <!-- wp:spacer {"height":"16px"} -->
            <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size"><em><?php esc_html_e('Hosts', 'seance'); ?></em></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p><?php esc_html_e('Margaret, Catherine, and Leah Fox', 'seance'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:separator {"backgroundColor":"background","className":"is-style-wide"} -->
            <hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-wide" />
            <!-- /wp:separator -->
            <!-- wp:spacer {"height":"16px"} -->
            <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size"><em><?php echo esc_html_e('Date', 'seance'); ?></em></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p><?php esc_html_e('March 31, 1848', 'seance'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:separator {"backgroundColor":"background","className":"is-style-wide"} -->
            <hr class="wp-block-separator has-text-color has-background-color has-alpha-channel-opacity has-background-background-color has-background is-style-wide" />
            <!-- /wp:separator -->
            <!-- wp:spacer {"height":"16px"} -->
            <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size"><em><?php esc_html_e('Location', 'seance'); ?></em></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p><?php echo wp_kses_post(__('Hydesville Memorial Park<br>1510 Hydesville Road<br> Newark NY 14513', 'seance')); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:spacer {"height":"16px"} -->
            <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->