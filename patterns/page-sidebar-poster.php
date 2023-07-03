<?php
/**
 * Title: Page with right sidebar
 * Slug: seance/page-sidebar-poster
 * Categories: pages
 * Description: Page right sidebar block pattern
 * Keywords: page, layout, design, template
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"5%"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%">

<!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"},"spacing":{"margin":{"bottom":"0px"}}}} -->
<h1 class="alignwide" style="font-size:clamp(3rem, 6vw, 4.5rem);margin-bottom:0px"><?php echo wp_kses_post( __( '<em>Flutter</em>, a collection of bird-related ephemera', 'seance' ) ) ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"5%"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"bottom":"32px"}}}} -->
<div class="wp-block-column" style="padding-bottom:32px;flex-basis:70%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php esc_url( get_template_directory_uri() ) ?>/assets/images/thumnbail.jpg" alt="<?php echo esc_attr__( 'Image', 'seance' ) ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:image {"width":100,"height":47,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php esc_url( get_template_directory_uri() ) ?>/assets/images/thumbnail.png" alt="<?php echo esc_attr__( 'An icon', 'seance' ) ?>" width="100" height="47"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":16} -->
<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><em><?php echo esc_html__( 'Date', 'seance' ) ?></em></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'February, 12 2021', 'seance' ) ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":16} -->
<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="has-large-font-size"><em><?php echo esc_html__( 'Location', 'seance' ) ?></em></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( 'The Grand Theater<br>154 Eastern Avenue<br>Maryland NY, 12345', 'seance' ) ) ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":16} -->
<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->