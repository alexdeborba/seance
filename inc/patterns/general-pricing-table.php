<?php
/**
 * Séance: Pricing table block pattern
 */
return array(
	'title'      => __( 'Pricing table', 'seance' ),
	'categories' => array( 'featured', 'columns', 'buttons' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:separator {"className":"is-style-wide"} -->
					<hr class="wp-block-separator is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:heading {"style":{"typography":{"fontSize":"var(--wp--custom--typography--font-size--gigantic, clamp(2.75rem, 6vw, 3.25rem))","lineHeight":"0.5"}}} -->
					<h2 id="1" style="font-size:var(--wp--custom--typography--font-size--gigantic, clamp(2.75rem, 6vw, 3.25rem));line-height:0.5">' . esc_html( _x( '1', 'First item in a numbered list.', 'seance' ) ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
					<h3 class="has-x-large-font-size" id="seanced"><em>' . esc_html__( 'Séance', 'seance' ) . '</em></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>' . esc_html__( 'Nourish aid to the growing medium community by converging as part of the Séance level. Your contribution will allow the expansion of our spiritual outreach.', 'seance' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-background-color has-background">' . esc_html__( '$25', 'seance' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons -->

					<!-- wp:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:separator {"className":"is-style-wide"} -->
					<hr class="wp-block-separator is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(2.75rem, 6vw, 3.25rem)","lineHeight":"0.5"}}} -->
					<h2 id="2" style="font-size:clamp(2.75rem, 6vw, 3.25rem);line-height:0.5">' . esc_html( _x( '2', 'Second item in a numbered list.', 'seance' ) ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:heading {"fontSize":"x-large"} -->
					<h2 class="has-x-large-font-size" id="seanced"><meta charset="utf-8"><em>' . esc_html__( 'Séanced', 'seance' ) . '</em></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>' . esc_html__( 'Join the spiritual community by becoming part of the Séanced level. You will receive the communion newsletter, plus a living raven to inspire your poetic twists in retribution.', 'seance' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-background-color has-background">' . esc_html__( '$75', 'seance' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons -->

					<!-- wp:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:separator {"className":"is-style-wide"} -->
					<hr class="wp-block-separator is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(2.75rem, 6vw, 3.25rem)","lineHeight":"0.5"}}} -->
					<h2 id="3" style="font-size:clamp(2.75rem, 6vw, 3.25rem);line-height:0.5">' . esc_html( _x( '3', 'Third item in a numbered list.', 'seance' ) ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:heading {"fontSize":"x-large"} -->
					<h2 class="has-x-large-font-size" id="seances"><meta charset="utf-8"><em>' . esc_html__( 'Séances', 'seance' ) . '</em></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>' . esc_html__( 'Join our community at the spiritual table by becoming part of the Séances level. This earns you a sit at our table where you can communicate with your deceased loved ones.', 'seance' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-background-color has-background">' . esc_html__( '$150', 'seance' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons -->

					<!-- wp:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->',
);
