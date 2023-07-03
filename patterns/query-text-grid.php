<?php
/**
 * Title: Text-based grid of posts block pattern
 * Slug: seance/query-text-grid
 * Categories: posts 
 * Description: A grid of posts block pattern
 * Keywords: text, blog, post, grid
 * Viewport Width: 1500
 * Block Types: core/footer
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:query {"query":{"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":12},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->

<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:post-date {"format":"F j, Y","isLink":true,"fontSize":"small"} /-->
<!-- /wp:post-template -->

<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"fontSize":"small"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->