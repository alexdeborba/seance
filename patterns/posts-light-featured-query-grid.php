<?php
/**
 * Title: Posts light with heading, title, featured image, excerpt, and date
 * Slug: seancewp/posts-light-featured-query-grid
 * Categories: featured, query, posts, media
 * Description: Featured posts in a light block pattern
 * Keywords: query, posts, featured
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: true
 * 
 * @package seancewp
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignwide">
    <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
    <p style="text-transform:uppercase"><?php echo esc_html_e('Latest Posts', 'seancewp'); ?></p>
    <!-- /wp:paragraph -->
    <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
    <div class="wp-block-query">
        <!-- wp:post-template -->
        <!-- wp:post-featured-image {"isLink":true,"width":"","height":"310px"} /-->
        <!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
        <!-- wp:post-excerpt /-->
        <!-- wp:post-date {"fontSize":"small"} /-->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->