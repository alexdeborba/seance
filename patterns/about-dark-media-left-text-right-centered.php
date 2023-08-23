<?php

/**
 * Title: About dark with media on the left, and heading, paragraph, social icons on centered right
 * Slug: seance/about-dark-media-left-and-text-right-centered
 * Categories: pages
 * Description: About with media on the left and text on the right centered dark block pattern
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
    <!-- wp:media-text {"align":"full","mediaPosition":"left","mediaLink":"<?php echo esc_url(get_theme_file_uri("/assets/images/about-dark-left.jpg")); ?>","mediaType":"image","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background"} -->
    <div class="wp-block-media-text alignfull has-media-on-the-left is-stacked-on-mobile has-background-color has-foreground-background-color has-text-color has-background has-link-color">
        <figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/about-dark-left.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
        <div class="wp-block-media-text__content">
            <!-- wp:spacer {"height":32} -->
            <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"min(8rem, 5vw)","top":"min(20rem, 20vw)"}}}} -->
            <div class="wp-block-group" style="padding-top:min(20rem, 20vw);padding-right:min(8rem, 5vw)">
                <!-- wp:heading {"style":{"typography":{"fontWeight":"300","lineHeight":"1.115","fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
                <h2 style="font-size:clamp(3rem, 6vw, 4.5rem);font-weight:300;line-height:1.115"><em><?php echo wp_kses_post(__('The Fox <br> Sisters', 'seance')); ?></em></h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}}} -->
                <p style="line-height:1.6"><?php echo esc_html__('We are Margaret, Catherine, and Leah Fox, renowned spiritual mediums from a bygone era, now embracing the digital age. With our unique abilities, we have connected countless souls with the messages of the spirit world.', 'seance') ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:spacer {"height":40} -->
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
            <!-- /wp:group -->
        </div>
        <!-- wp:spacer {"height":32} -->
        <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:media-text -->
</div>
<!-- /wp:group -->