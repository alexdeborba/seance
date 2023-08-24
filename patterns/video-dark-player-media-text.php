<?php
/**
 * Title: Video dark player with media, heading, and paragraphs
 * Slug: seance/video-dark-player-media-text
 * Categories: media, columns, media, video
 * Description: Video player with header and text in a dark block pattern
 * Keywords: video
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"foreground","textColor":"primary"} -->
<div class="wp-block-group alignfull has-primary-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)">
    <!-- wp:group {"align":"full","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull">
        <!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
        <h1 class="alignwide" id="warble-a-film-about-hobbyist-bird-watchers-1" style="font-size:clamp(3rem, 6vw, 4.5rem)"><?php echo wp_kses_post(__('<em>\'Séance,\'</em> a film exploring the<br>enigmatic world of spirits.', 'seance')); ?></h1>
        <!-- /wp:heading -->
        <!-- wp:spacer {"height":32} -->
        <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <!-- wp:video {"align":"wide"} -->
        <figure class="wp-block-video alignwide"><video controls src="<?php echo esc_url(get_theme_file_uri("/assets/videos/seance.mp4")); ?>"></video></figure>
        <!-- /wp:video -->
        <!-- wp:spacer {"height":32} -->
        <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%">
                <!-- wp:paragraph -->
                <p><strong><?php echo esc_html_e('Featuring', 'seance'); ?></strong></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:paragraph -->
                <p><?php echo wp_kses_post(__('Margaret Fox<br>Catherine Fox<br>Leah Fox<br>Eusapia Palladino<br>Sir Arthur Conan Doyle', 'seance')); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:paragraph -->
                <p><?php echo wp_kses_post(__('Daniel Dunglas Home<br>Florence Cook<br>William Stainton Moses<br>Helena Blavatsky<br>Leonora Piper', 'seance')); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->