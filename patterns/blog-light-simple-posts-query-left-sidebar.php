<?php
/**
 * Title: Blog light posts simple grid with left sidebar
 * Slug: seance/blog-light-simple-posts-query-left-sidebar
 * Categories: pages
 * Description: Blog posts grid with left sidebar in a light block pattern
 * Keywords: page, query, blog, posts, sidebar
 * Viewport Width: 1500
 * Block Types: pages
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--small, 1.25rem)","bottom":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px">
        <!-- wp:column {"width":"30%"} -->
        <div class="wp-block-column" style="flex-basis:30%">
            <!-- wp:heading {"level":4,"fontSize":"large"} -->
            <h4 class="has-large-font-size"><em><?php esc_html_e('Categories', 'seance'); ?></em></h4>
            <!-- /wp:heading -->
            <!-- wp:tag-cloud {"taxonomy":"category","showTagCounts":true} /-->
            <!-- wp:spacer {"height":32} -->
            <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:separator {"color":"foreground","className":"is-style-wide"} -->
            <hr class="wp-block-separator has-text-color has-background has-foreground-background-color has-foreground-color is-style-wide" />
            <!-- /wp:separator -->
            <!-- wp:spacer {"height":16} -->
            <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:heading {"level":4,"fontSize":"large"} -->
            <h4 class="has-large-font-size"><em><?php esc_html_e('Pages', 'seance'); ?></em></h4>
            <!-- /wp:heading -->
            <!-- wp:navigation {"orientation":"vertical"}} -->
            <!-- wp:page-list /-->
            <!-- /wp:navigation -->
            <!-- wp:spacer {"height":16} -->
            <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:separator {"color":"foreground","className":"is-style-wide"} -->
            <hr class="wp-block-separator has-text-color has-background has-foreground-background-color has-foreground-color is-style-wide" />
            <!-- /wp:separator -->
            <!-- wp:spacer {"height":16} -->
            <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:heading {"level":4,"fontSize":"large"} -->
            <h4 class="has-large-font-size"><em><?php esc_html_e('Tags', 'seance'); ?></em></h4>
            <!-- /wp:heading -->
            <!-- wp:tag-cloud {"showTagCounts":true} /-->
            <!-- wp:spacer {"height":16} -->
            <div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"70%"} -->
        <div class="wp-block-column" style="flex-basis:70%">
            <!-- wp:query {"query":{"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","inherit":false,"perPage":12},"displayLayout":{"type":"flex","columns":3},"layout":{"inherit":true}} -->
            <div class="wp-block-query">
                <!-- wp:post-template -->
                <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"200px"} /-->
                <!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
                <div class="wp-block-group">
                    <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small","fontFamily":"system-font"} /-->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
                <!-- wp:separator {"className":"alignwide is-style-wide"} -->
                <hr class="wp-block-separator alignwide is-style-wide" />
                <!-- /wp:separator -->
                <!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
                <!-- wp:query-pagination-previous {"fontSize":"small"} /-->
                <!-- wp:query-pagination-numbers /-->
                <!-- wp:query-pagination-next {"fontSize":"small"} /-->
                <!-- /wp:query-pagination -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->