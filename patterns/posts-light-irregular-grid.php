<?php
/**
 * Title: Posts light irregular grid with media, title, excerpt, and date
 * Slug: seancewp/posts-light-irregular-grid
 * Categories: query, text, blog, posts, grid
 * Description: Irregular posts grid on a light block pattern
 * Keywords: query, text, blog, posts, grid, image
 * Viewport Width: 1500
 * Block Types: core/query
 * Post Types:
 * Inserter: true
 * 
 * @package seancewp
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:query {"query":{"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":"1"},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
            <div class="wp-block-query alignwide">
                <!-- wp:post-template {"align":"wide"} -->
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
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:query {"query":{"offset":"1","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":"1"},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
            <div class="wp-block-query alignwide">
                <!-- wp:post-template {"align":"wide"} -->
                <!-- wp:spacer {"height":64} -->
                <div style="height:64px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->
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
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:query {"query":{"offset":"2","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":"1"},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
            <div class="wp-block-query alignwide">
                <!-- wp:post-template {"align":"wide"} -->
                <!-- wp:spacer {"height":128} -->
                <div style="height:128px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->
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
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:query {"query":{"offset":"3","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":"1"},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
            <div class="wp-block-query alignwide">
                <!-- wp:post-template {"align":"wide"} -->
                <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"318px"} /-->
                <!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /--> <!-- wp:group {"layout":{"type":"flex"}} -->
                <div class="wp-block-group">
                    <!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->
                    <!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
                    <!-- wp:post-terms {"term":"post_tag","fontSize":"small"} /-->
                </div>
                <!-- /wp:group -->
                <!-- wp:post-excerpt /-->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:query {"query":{"offset":"4","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":"1"},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
            <div class="wp-block-query alignwide">
                <!-- wp:post-template {"align":"wide"} -->
                <!-- wp:spacer {"height":96} -->
                <div style="height:96px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
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
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:query {"query":{"offset":"5","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":"1"},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
            <div class="wp-block-query alignwide">
                <!-- wp:post-template {"align":"wide"} -->
                <!-- wp:spacer {"height":160} -->
                <div style="height:160px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->
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
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:query {"query":{"offset":"6","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":"1"},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
            <div class="wp-block-query alignwide">
                <!-- wp:post-template {"align":"wide"} -->
                <!-- wp:spacer {"height":32} -->
                <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
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
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:query {"query":{"offset":"7","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":"1"},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
            <div class="wp-block-query alignwide">
                <!-- wp:post-template {"align":"wide"} -->
                <!-- wp:spacer {"height":160} -->
                <div style="height:160px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->
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
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:query {"query":{"offset":"8","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","sticky":"","perPage":"1"},"displayLayout":{"type":"list","columns":3},"align":"wide","layout":{"inherit":true}} -->
            <div class="wp-block-query alignwide">
                <!-- wp:post-template {"align":"wide"} -->
                <!-- wp:spacer {"height":96} -->
                <div style="height:96px" aria-hidden="true" class="wp-block-spacer">
                </div>
                <!-- /wp:spacer -->
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
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->