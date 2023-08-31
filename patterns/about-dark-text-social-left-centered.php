<?php
/**
 * Title: About dark with heading, paragraph, and social icons on the left
 * Slug: seancewp/about-dark-text-social-left-centered
 * Categories: pages
 * Description: About with text on the left centered on a dark block pattern
 * Keywords: heading, paragraph, social
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: true
 * 
 * @package seancewp
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"max(1.25rem, 8vw)","right":"max(1.25rem, 8vw)","bottom":"max(1.25rem, 8vw)","left":"max(1.25rem, 8vw)"}}},"backgroundColor":"foreground","textColor":"primary"} -->
<div class="wp-block-group alignfull has-primary-color has-foreground-background-color has-text-color has-background" style="padding-top:max(1.25rem, 8vw);padding-right:max(1.25rem, 8vw);padding-bottom:max(1.25rem, 8vw);padding-left:max(1.25rem, 8vw)">
    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column {"verticalAlignment":"bottom","width":"45%","style":{"spacing":{"padding":{"top":"12rem"}}}} -->
        <div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:12rem;flex-basis:45%">
            <!-- wp:heading {"style":{"typography":{"fontWeight":"300","lineHeight":"1.115","fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
            <h2 class="wp-block-heading" style="font-size:clamp(3rem, 6vw, 4.5rem);font-weight:300;line-height:1.115"><em><?php echo wp_kses_post(__('The Fox <br> Sisters', 'seancewp')); ?></em></h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}}} -->
            <p style="line-height:1.6"><?php echo esc_html_e('We are Margaret, Catherine, and Leah Fox, renowned spiritual mediums from a bygone era, now embracing the digital age. With our unique abilities, we have connected countless souls with the messages of the spirit world.', 'seancewp'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:spacer {"height":"40px"} -->
            <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:social-links {"iconColor":"background","iconColorValue":"var(--wp--preset--color--foreground)","iconBackgroundColor":"foreground","iconBackgroundColorValue":"var(--wp--preset--color--background)"} -->
            <ul class="wp-block-social-links has-icon-color has-icon-background-color">
                <!-- wp:social-link {"url":"#","service":"facebook"} /-->
                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                <!-- wp:social-link {"url":"#","service":"twitter"} /-->
                <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                <!-- wp:social-link {"url":"#","service":"pinterest"} /-->
                <!-- wp:social-link {"url":"#","service":"wordpress"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"4rem","left":"0rem"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0rem;padding-right:0rem;padding-bottom:4rem;padding-left:0rem">
            <!-- wp:separator {"opacity":"css","backgroundColor":"background","className":"is-style-wide"} -->
            <hr class="wp-block-separator has-text-color has-background-color has-css-opacity has-background-background-color has-background is-style-wide" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->