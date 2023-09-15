<?php
/**
 * Title: Posts dark with heading, paragraph, and latest query grid
 * Slug: seance/posts-dark-latest-query-grid
 * Categories: posts
 * Description: Posts with heading and paragraph on a dark block pattern
 * Keywords: posts, query
 * Viewport Width: 1500
 * Block Types: 
 * Post Types: 
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"4rem","bottom":"4rem"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:4rem;padding-bottom:4rem">
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:spacer {"height":"60px"} -->
        <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"300","lineHeight":"1.115","fontSize":"clamp(3rem, 6vw, 4.5rem)","textTransform":"uppercase"}}} -->
        <h3 class="wp-block-heading has-text-align-center" style="font-size:clamp(3rem, 6vw, 4.5rem);font-weight:300;line-height:1.115;text-transform:uppercase"><?php echo esc_html_e('Latest Posts', 'seance'); ?></h3>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"}}} -->
        <p class="has-text-align-center" style="line-height:1.6"><?php echo esc_html_e('Join us, the Fox sisters, in \'Séance,\' a cinematic journey into the ethereal realm. As pioneers of spiritual communication, we invite you to delve deep into the mysteries of the beyond, unveiling whispers and wonders from a world unseen.', 'seance'); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:spacer {"height":"60px"} -->
        <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->
    <!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"318px"} /-->
        <!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
        <!-- wp:post-excerpt /-->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
    <!-- wp:spacer {"height":"60px"} -->
    <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
</div>
<!-- /wp:group -->