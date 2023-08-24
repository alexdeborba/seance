<?php
/**
 * Title: Posts light grid with featured image, title, excerpt, and date
 * Slug: seance/posts-light-media-query-grid
 * Categories: query
 * Description: Posts featured grid on a light block pattern
 * Description: Light grid of posts block pattern
 * Keywords: text, blog, posts, grid, image
 * Viewport Width: 1500
 * Block Types: core/query
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
    <!-- wp:query {"queryId":43,"query":{"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":12},"align":"wide","layout":{"contentSize":null,"type":"constrained"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"318px"} /-->
        <!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
        <!-- wp:group {"layout":{"type":"flex"}} -->
        <div class="wp-block-group">
            <!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->
            <!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
            <!-- wp:post-terms {"term":"post_tag","fontSize":"small"} /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:post-excerpt /-->
        <!-- /wp:post-template -->
        <!-- wp:separator {"opacity":"css","className":"alignwide is-style-wide"} -->
        <hr class="wp-block-separator has-css-opacity alignwide is-style-wide" />
        <!-- /wp:separator -->
        <!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:query-pagination-previous {"fontSize":"small"} /-->
        <!-- wp:query-pagination-numbers /-->
        <!-- wp:query-pagination-next {"fontSize":"small"} /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->