<?php
/**
 * Title: Blog dark posts archive
 * Slug: seancewp/blog-dark-posts-archive
 * Categories: query, blog, posts
 * Description: Blog posts archive on a dark block pattern
 * Keywords: query, text, blog, posts
 * Viewport Width: 1500
 * Block Types: core/query
 * Post Types:
 * Inserter: true
 *
 * @package seancewp
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"backgroundColor":"foreground","textColor":"background"} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)">
    <!-- wp:group {"align":"full"} -->
    <div class="wp-block-group alignfull">
        <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":10}} -->
        <div class="wp-block-query">
            <!-- wp:post-template -->
            <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"var(--wp--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"} /-->
            <!-- wp:post-featured-image {"isLink":true} /-->
            <!-- wp:post-excerpt /-->
            <!-- wp:group {"layout":{"type":"flex"}} -->
            <div class="wp-block-group">
                <!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->
                <!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
                <!-- wp:post-terms {"term":"post_tag","fontSize":"small"} /-->
            </div>
            <!-- /wp:group -->
            <!-- wp:spacer {"height":40} -->
            <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- /wp:post-template -->
            <!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <!-- wp:query-pagination-previous {"fontSize":"small"} /-->
            <!-- wp:query-pagination-numbers /-->
            <!-- wp:query-pagination-next {"fontSize":"small"} /-->
            <!-- /wp:query-pagination -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->