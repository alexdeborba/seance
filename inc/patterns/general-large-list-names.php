<?php
/**
 * Séance: Large list of names block pattern
 */
return array(
	'title'      => __( 'Large list of names', 'seance' ),
	'categories' => array( 'featured', 'text' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"tertiary","textColor":"primary","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull has-primary-color has-tertiary-background-color has-text-color has-background has-link-color" style="padding-top:6rem;padding-bottom:6rem"><!-- wp:group {"align":"wide"} -->
					<div class="wp-block-group alignwide"><!-- wp:image {"width":175,"height":82,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/placeholder-icon.png" alt="' . esc_attr__( 'An icon representing observation.', 'seance' ) . '" width="175" height="82"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:group -->

					<!-- wp:group {"align":"wide"} -->
					<div class="wp-block-group alignwide"><!-- wp:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"300"}},"fontSize":"x-large"} -->
					<p class="has-x-large-font-size" style="font-weight:300">' . esc_html__( 'Alex de Borba, Martha Moreno, Sebastián Salazar, Janelly Restrepo, Lorena Angulo, Daniel Calderon, Nicolas Lecocq, Carolina McCulloch.', 'seance' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":32} -->
					<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background">' . esc_html__( 'Read more', 'seance' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
