<?php
/**
 * Title: Footer dark with posts query loop, featured images, title, date, and excerpt
 * Slug: seance/footer-dark-posts
 * Categories: footer
 * Description: Footer with posts query in a dark block pattern
 * Keywords: footer, posts, images, title, date, excerpt
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template -->
		<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"318px"} /-->
		<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
		<!-- wp:post-excerpt /-->
		<!-- wp:post-date {"format":"F j, Y","isLink":true,"fontSize":"small"} /-->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-title {"level":0} /-->
		<!-- wp:group {"layout":{"type":"flex","justifyContent":"right"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph -->
			<p>
				<?php
				/* Translators: WordPress link. */
				$wordpress_link = '<a href="' . esc_url(__('https://wordpress.org', 'seance')) . '" rel="nofollow">WordPress</a>';
				echo sprintf(
					esc_html__('Proudly powered by %1$s', 'seance'),
					$wordpress_link
				);
				?>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->