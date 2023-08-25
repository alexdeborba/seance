<?php
/**
 * Title: Blog light posts with heading, title, featured image, excerpt, and date with left sidebar 
 * Slug: seance/blog-light-posts-query-left-sidebar
 * Categories: pages
 * Description: Blog posts with left sidebar in a light block pattern
 * Keywords: page, query, blog, posts, sidebar
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--small, 1.25rem)","bottom":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"5%"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
    <div class="wp-block-columns alignwide has-foreground-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px">
        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%">
            <!-- wp:spacer {"height":40} -->
            <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:heading {"level":4,"fontSize":"large"} -->
            <h4 class="has-large-font-size"><em><?php echo esc_html_e('Categories', 'seance'); ?></em></h4>
            <!-- /wp:heading -->
            <!-- wp:tag-cloud {"taxonomy":"category","showTagCounts":true} /-->
            <!-- wp:spacer {"height":32} -->
            <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:separator {"color":"foreground","className":"is-style-wide"} -->
            <hr class="wp-block-separator has-text-color has-background has-foreground-background-color has-foreground-color is-style-wide" />
            <!-- /wp:separator -->
            <!-- wp:spacer {"height":32} -->
            <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:heading {"level":4,"fontSize":"large"} -->
            <h4 class="has-large-font-size"><em><?php echo esc_html_e('Pages', 'seance'); ?></em></h4>
            <!-- /wp:heading -->
            <!-- wp:navigation {"orientation":"vertical"} -->
            <!-- wp:page-list /-->
            <!-- /wp:navigation -->
            <!-- wp:spacer {"height":32} -->
            <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:separator {"color":"foreground","className":"is-style-wide"} -->
            <hr class="wp-block-separator has-text-color has-background has-foreground-background-color has-foreground-color is-style-wide" />
            <!-- /wp:separator -->
            <!-- wp:spacer {"height":32} -->
            <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:heading {"level":4,"fontSize":"large"} -->
            <h4 class="has-large-font-size"><em><?php esc_html_e('Tags', 'seance'); ?></em></h4>
            <!-- /wp:heading -->
            <!-- wp:tag-cloud {"showTagCounts":true} /-->
            <!-- wp:spacer {"height":32} -->
            <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:separator {"color":"foreground","className":"is-style-wide"} -->
            <hr class="wp-block-separator has-text-color has-background has-foreground-background-color has-foreground-color is-style-wide" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%">
            <!-- wp:query {"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"inherit":true}} -->
            <div class="wp-block-query">
                <!-- wp:post-template -->
                <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"var(--wp--custom--typography--font-size--huge, clamp(2.25rem, 4vw, 2.75rem))"} /-->
                <!-- wp:post-featured-image {"isLink":true} /-->
                <!-- wp:post-excerpt /-->
                <!-- wp:group {"layout":{"type":"flex"}} -->
                <div class="wp-block-group">
                    <!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->
                    <!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
                    <!-- wp:post-terms {"term":"post_tag","fontSize":"small"} /-->
                </div>
                <!-- /wp:group -->
                <!-- wp:spacer {"height":128} -->
                <div style="height:128px" aria-hidden="true" class="wp-block-spacer"></div>
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
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->