<?php
/**
 * Title: Header with site logo and site title on the left, and navigation on the right
 * Slug: seance/header-light
 * Categories: header
 * Description: Header with title and navigation on a dark block pattern
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

<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--large, 8rem)","top":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
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
</div>
<!-- /wp:group -->