<?php
/**
 * Title: Header dark with site logo, navigation, and social icons
 * Slug: seance/header-dark-logo-navigation-social
 * Categories: header
 * Description: Dark Header with Site Logo, Navigation, and Social Icons
 * Keywords: header, buttons
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
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0rem","top":"0px","right":"0px","left":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:0rem;padding-left:0px">
        <!-- wp:site-logo {"width":64} /-->
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
        <!-- wp:social-links {"iconColor":"background","iconColorValue":"var(--wp--preset--color--background)","className":"is-style-logos-only"} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only">
            <!-- wp:social-link {"url":"facebook.com","service":"facebook","label":"Facebook"} /-->
            <!-- wp:social-link {"url":"linkedin.com","service":"linkedin",,"label":"LinkedIn"} /-->
            <!-- wp:social-link {"url":"instagram.com","service":"instagram","label":"Instagram"} /-->
            <!-- wp:social-link {"url":"pinterest.com","service":"pinterest","label":"Pinterest"} /-->
            <!-- wp:social-link {"url":"wordpress.org","service":"wordpress","label":"WordPress"} /-->
        </ul>
        <!-- /wp:social-links -->
        <!-- /wp:navigation -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->