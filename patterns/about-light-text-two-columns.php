<?php
/**
 * Title: About light with heading, paragraphs on two columns
 * Slug: seance/about-light-text-two-columns
 * Categories: pages
 * Description: About with text on two columns on a light block pattern
 * Keywords: heading, paragraph, columns
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--large, 8rem);">
    <!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(4rem, 15vw, 12.5rem)","lineHeight":"1","fontWeight":"200"}}} -->
    <h1 class="alignwide" style="font-size:clamp(4rem, 15vw, 12.5rem);font-weight:200;line-height:1"><?php echo wp_kses_post(__('<em>Life </em><br><em>&amp; Death</em>', 'seance')); ?></h1>
    <!-- /wp:heading -->
    <!-- wp:spacer {"height":50} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%">
                <!-- wp:paragraph -->
                <p><?php echo wp_kses_post(__('Greetings', 'seance')); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%">
                <!-- wp:separator {"className":"is-style-wide"} -->
                <hr class="wp-block-separator is-style-wide" />
                <!-- /wp:separator -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph -->
            <p><?php echo wp_kses_post(__('We are the Fox sisters, Margaret, Catherine, and Leah.<br><br>We have been blessed with the ability to communicate with the spirits, and through us, many have found answers and solace from the other side.<br><br>We first discovered our gift in our home in <a href="#">Hydesville</a>, <a href="#">New York</a>, where we communicated with a spirit through mysterious rappings.<br><br>Our experiences have not only transformed our lives but have also ignited a movement, bringing hope and understanding to many about the mysteries of the afterlife.<br><br>As pioneers in the Spiritualist movement, we have traveled extensively, sharing our abilities and stories with those eager to connect with the world beyond.<br><br>Our journey has been both enlightening and challenging, as we have encountered both believers and skeptics. Yet, our mission remains steadfast: to bridge the gap between the living and the departed, offering a glimpse into the eternal.<br><br>May the spirits guide and protect you until we meet again.<br><br>Farewell.', 'seance')) ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column"></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->