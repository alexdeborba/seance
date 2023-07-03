<?php
/**
 * Séance: Two images with text block pattern
 */
return array(
	'title'      => __( 'Two images with text', 'seance' ),
	'categories' => array( 'featured', 'columns', 'gallery' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}}} -->
					<div class="wp-block-column" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:image {"sizeSlug":"large"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/placeholder-two-one.jpg" alt="' . esc_attr__( 'Illustration.', 'seance' ) . '"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->

					<!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}}} -->
					<div class="wp-block-column" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:image {"sizeSlug":"large"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/placeholder-two-two.jpg" alt="' . esc_attr__( 'Illustration.', 'seance' ) . '"/></figure>
					<!-- /wp:image -->

					<!-- wp:spacer {"height":30} -->
					<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {"fontSize":"x-large"} -->
					<h2 class="has-x-large-font-size" id="screening">' . esc_html__( 'SCREENING', 'seance' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>' . wp_kses_post( __( 'May 15th, 1977 @ 6:50AM<br>R. da Esperança n.º 48-52, 9700-073 Angra do Heroísmo, Portugal', 'seance' ) ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":8} -->
					<div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:spacer {"height":10} -->
					<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-foreground-background-color has-background">' . esc_html__( 'Buy Tickets', 'seance' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->',
);
