<?php
/**
 * Title: About page with solid background color
 * Slug: seance/page-about-solid-color
 * Categories: pages
 * Description: About Us page with solid background color block pattern
 * Keywords: page, layout, design, template, image, text
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem"><!-- wp:cover {"overlayColor":"secondary","minHeight":80,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:80vh"><span aria-hidden="true" class="has-secondary-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":false,"contentSize":"400px"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":64} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --><!-- wp:heading {"style":{"typography":{"lineHeight":"1","textTransform":"uppercase","fontSize":"clamp(2.75rem, 6vw, 3.25rem)"}}} -->
<h2 id="edvard-smith" style="font-size:clamp(2.75rem, 6vw, 3.25rem);line-height:1;text-transform:uppercase"><?php wp_kses_post( __( 'Edvard<br>Smith', 'seance' ) ) ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":8} -->
<div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html__( 'Oh hello. My name’s Edvard, and you’ve found your way to my website. I’m an avid bird watcher, and I also broadcast my own radio show every Tuesday evening at 11PM EDT. Listen in sometime!', 'seance' ) ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":8} -->
<div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"wordpress"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --><!-- wp:spacer {"height":64} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->