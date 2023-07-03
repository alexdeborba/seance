<?php
/**
 * Title: Small Dark Header
 * Slug: seance/header-small-dark
 * Categories: header
 * Description: Small header with dark background block pattern
 * Keywords: header, navigation
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:0px;padding-bottom:0px;"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:0px;padding-bottom:0px;"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--small, 1.25rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":64} /-->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
<!-- wp:page-list /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignwide size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumbnail-path-on-transparent-d.png" alt="' . esc_attr__( 'Illustration', 'seance' ) . '"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
<!-- wp:spacer {"height":66} -->
<div style="height:66px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->