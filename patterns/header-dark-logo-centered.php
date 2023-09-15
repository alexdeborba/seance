<?php
/**
 * Title: Header with site title on the left, centered logo, navigation on the right
 * Slug: seance/header-dark-logo-centered
 * Categories: header
 * Description: Header with centered logo on a dark block pattern
 * Keywords: header, logo, navigation
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var(--wp--custom--spacing--small, 1.25rem)","bottom":"var(--wp--custom--spacing--small, 1.25rem)"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem);">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}}} /-->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"64px"} -->
        <div class="wp-block-column" style="flex-basis:64px">
            <!-- wp:site-logo {"width":64} /-->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:site-logo {"width":64,"shouldSyncIcon":true} /-->
            <!-- wp:navigation {"icon":"menu","overlayBackgroundColor":"foreground","overlayTextColor":"primary","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"medium","fontFamily":"source-serif-pro"} -->
            <!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-submenu {"label":"Events","url":"#","kind":"custom","isTopLevelItem":true} -->
            <!-- wp:navigation-link {"label":"This Week","description":"All events taken place this week","url":"#","kind":"custom","isTopLevelLink":false} /-->
            <!-- wp:navigation-link {"label":"This Month","description":"All events taken place this month","url":"#","kind":"custom","isTopLevelLink":false} /-->
            <!-- wp:navigation-link {"label":"This Year","description":"All events taken place this year","url":"#","kind":"custom","isTopLevelLink":false} /-->
            <!-- /wp:navigation-submenu -->
            <!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"Gallery","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->