<?php
/**
 * Title: Header dark with site logo, navigation, and social icons
 * Slug: seancewp/header-dark-logo-navigation-social
 * Categories: header
 * Description: Dark Header with Site Logo, Navigation, and Social Icons
 * Keywords: header, buttons
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 * 
 * @package seancewp
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var(--wp--custom--spacing--small, 1.25rem)","bottom":"var(--wp--custom--spacing--small, 1.25rem)"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0rem","top":"0px","right":"0px","left":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:0rem;padding-left:0px">
        <!-- wp:site-logo {"width":64} /-->
        <!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
        <!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
        <!-- wp:social-links {"iconColor":"background","iconColorValue":"var(--wp--preset--color--background)","className":"is-style-logos-only"} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only">
            <!-- wp:social-link {"url":"#","service":"facebook"} /-->
            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
            <!-- wp:social-link {"url":"#","service":"twitter"} /-->
            <!-- wp:social-link {"url":"#","service":"instagram"} /-->
            <!-- wp:social-link {"url":"#","service":"pinterest"} /-->
            <!-- wp:social-link {"url":"#","service":"wordpress"} /-->
        </ul>
        <!-- /wp:social-links -->
        <!-- /wp:navigation -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->