<?php
/**
 * Title: Video dark player with heading, paragraph on the left, player with media on the right
 * Slug: seancewp/video-dark-player-media-text-right
 * Categories: media, columns, media, video
 * Description: Video player on the right with header and text in a dark block pattern
 * Keywords: video
 * Viewport Width: 1500
 * Block Types: 
 * Post Types:
 * Inserter: true
 * 
 * @package seancewp
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"6rem","bottom":"4rem"}}},"backgroundColor":"foreground","textColor":"primary","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:6rem;padding-bottom:4rem">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%">
            <!-- wp:heading {"fontSize":"x-large"} -->
            <h2 class="has-x-large-font-size" id="extended-trailer"><?php echo esc_html_e('Extended Trailer', 'seancewp'); ?></h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p><?php echo esc_html_e('Join us, the Fox sisters, in \'Séance,\' a cinematic journey into the ethereal realm. As pioneers of spiritual communication, we invite you to delve deep into the mysteries of the beyond, unveiling whispers and wonders from a world unseen.', 'seancewp'); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%">
            <!-- wp:video -->
            <figure class="wp-block-video"><video controls src="<?php echo esc_url(get_theme_file_uri("/assets/videos/seancewp.mp4")); ?>"></video></figure>
            <!-- /wp:video -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->