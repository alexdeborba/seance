<?php
/**
 * Title: Posts light grid with title, excerpt, and date
 * Slug: seancewp/posts-light-text-query-grid
 * Categories: query, posts, text, grid
 * Description: Posts text grid on a light block pattern
 * Keywords: text, blog, posts, grid
 * Viewport Width: 1500
 * Block Types: core/query
 * Post Types:
 * Inserter: true
 *
 * @package seancewp
 * @since 1.0.0
 */
?>

<!-- wp:group {"className":"alignfull"} -->
<div class="wp-block-group alignfull">
    <!-- wp:query {"queryId":9,"query":{"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":12},"align":"wide","layout":{"contentSize":null,"type":"constrained"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
        <!-- wp:post-excerpt /-->
        <!-- wp:post-date {"format":"F j, Y","fontSize":"small"} /-->
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