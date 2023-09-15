<?php
/**
 * Title: Header dark solid background
 * Slug: seance/header-dark-solid
 * Categories: header
 * Description: Header with large dark block pattern
 * Keywords: page, layout, design, template, image, buttons
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"0px","bottom":"var(--wp--custom--spacing--large, 8rem)"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:0px;padding-bottom:var(--wp--custom--spacing--large, 8rem);">
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull" style="padding-top:0px;padding-bottom:0px;">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--small, 1.25rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)">
            <!-- wp:group {"layout":{"type":"flex"}} -->
            <div class="wp-block-group">
                <!-- wp:site-logo {"width":64} /-->
                <!-- wp:site-title {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} /-->
            </div>
            <!-- /wp:group -->
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
            <!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->
        <!-- wp:heading {"align":"wide","style":{"typography":{"fontSize":"clamp(3.25rem, 8vw, 6.25rem)","lineHeight":"1.15"}}} -->
        <h2 class="alignwide" style="font-size:clamp(3.25rem, 8vw, 6.25rem);line-height:1.15"><?php echo wp_kses_post(__('<em>Séance</em>: A Theme Born Out of Love and Death…', 'seance')) ?></h2>
        <!-- /wp:heading -->
        <!-- wp:spacer {"height":76} -->
        <div style="height:76px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->