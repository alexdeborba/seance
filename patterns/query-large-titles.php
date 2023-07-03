<?php
/**
 * Title: Large post titles
 * Slug: seance/query-large-titles
 * Categories: query, text, blog, posts
 * Description: Large post titles block pattern
 * Keywords: text, blog, posts
 * Viewport Width: 1500
 * Block Types: core/query
 * Post Types:
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":8},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"4em"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:4em"><!-- wp:post-date {"format":"M j","fontSize":"small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"clamp(2.75rem, 6vw, 3.25rem)"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
