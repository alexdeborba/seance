<?php
/**
 * Title: About dark with media on the right, and heading, paragraph, social icons on bottom left
 * Slug: seance/about-dark-media-right-text-left-bottom
 * Categories: pages
 * Description: About with media on the right and text on the bottom left on a dark block pattern
 * Keywords: image, heading, paragraph, social
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:media-text {"align":"full","mediaPosition":"right","mediaType":"image","imageFill":true,"focalPoint":{"x":"0.50","y":"0.10"},"backgroundColor":"foreground","className":"alignfull is-image-fill has-background-color has-text-color has-background has-link-color"} -->
    <div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-image-fill has-background-color has-text-color has-background has-link-color has-foreground-background-color">
        <div class="wp-block-media-text__content">
            <!-- wp:spacer {"height":"32px"} -->
            <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"min(8rem, 5vw)","top":"min(28rem, 28vw)"}}}} -->
            <div class="wp-block-group" style="padding-top:min(28rem, 28vw);padding-right:min(8rem, 5vw)">
                <!-- wp:heading {"style":{"typography":{"fontWeight":"300","lineHeight":"1.115","fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
                <h2 class="wp-block-heading" style="font-size:clamp(3rem, 6vw, 4.5rem);font-weight:300;line-height:1.115"><em><?php echo wp_kses_post(__('The Fox <br> Sisters', 'seance')); ?></em></h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}}} -->
                <p style="line-height:1.6"><?php echo esc_html_e('We are Margaret, Catherine, and Leah Fox, renowned spiritual mediums from a bygone era, now embracing the digital age. With our unique abilities, we have connected countless souls with the messages of the spirit world.', 'seance'); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:spacer {"height":"40px"} -->
                <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:social-links {"iconColor":"background","iconColorValue":"var(--wp--preset--color--background)","iconBackgroundColor":"foreground","iconBackgroundColorValue":"var(--wp--preset--color--foreground)"} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color">
                    <!-- wp:social-link {"url":"#","service":"wordpress"} /-->
                    <!-- wp:social-link {"url":"#","service":"facebook"} /-->
                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                    <!-- wp:social-link {"url":"#","service":"twitter"} /-->
                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                    <!-- wp:social-link {"url":"#","service":"pinterest"} /-->
                    <!-- wp:social-link {"url":"#","service":"wordpress"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
            <!-- wp:spacer {"height":"32px"} -->
            <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
        </div>
        <figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url(get_theme_file_uri("/assets/images/about-dark-right.jpg")); ?>);background-position:50% 10%"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/about-dark-right.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
    </div>
    <!-- /wp:media-text -->
</div>
<!-- /wp:group -->