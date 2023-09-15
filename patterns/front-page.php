<?php
/**
 * Title: Front Page
 * Slug: seance/front-page
 * Categories: hidden
 * Description: The Front Page template takes precedence over all templates
 * Keywords: page
 * Viewport Width: 1500
 * Block Types: core/pages
 * Post Types:
 * Inserter: no
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">
    <!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"4rem","bottom":"4rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:4rem;padding-bottom:4rem">
        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">
            <!-- wp:spacer {"height":"60px"} -->
            <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"300","lineHeight":"1.115","fontSize":"clamp(3rem, 6vw, 4.5rem)","textTransform":"uppercase"}}} -->
            <h3 class="wp-block-heading has-text-align-center" style="font-size:clamp(3rem, 6vw, 4.5rem);font-weight:300;line-height:1.115;text-transform:uppercase"><?php echo esc_html_e('Latest Posts', 'seance'); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"}}} -->
            <p class="has-text-align-center" style="line-height:1.6"><?php echo wp_kses_post(__('Join us, the Fox sisters, in \'Séance,\' a cinematic journey into the ethereal realm. As pioneers of spiritual communication, we invite you to delve deep into the mysteries of the beyond, unveiling whispers and wonders from a world unseen.', 'seance')); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:spacer {"height":"60px"} -->
            <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
        </div>
        <!-- /wp:group -->
        <!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","layout":{"type":"default"}} -->
        <div class="wp-block-query alignwide">
            <!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"318px"} /-->
            <!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
            <!-- wp:post-excerpt /-->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
        <!-- wp:spacer {"height":"60px"} -->
        <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(90deg,rgba(0,0,0,0) 20%,rgb(15,15,16) 20%)"},"spacing":{"padding":{"top":"4em","bottom":"4em","right":"0%","left":"0px"},"margin":{"top":"0","bottom":"0"}}},"textColor":"primary","className":"has-responsive-dark-background","layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group alignfull has-primary-color has-text-color has-background" style="background:linear-gradient(90deg,rgba(0,0,0,0) 20%,rgb(15,15,16) 20%);margin-top:0;margin-bottom:0;padding-top:4em;padding-right:0%;padding-bottom:4em;padding-left:0px">
        <!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0">
            <!-- wp:column {"verticalAlignment":"center","width":"33.33%","layout":{"type":"default"}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
                <!-- wp:image {"scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topRight":null,"bottomLeft":null,"bottomRight":null}}}} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/poster-light-right.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" style="object-fit:cover" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"width":"66.66%","layout":{"type":"default"}} -->
            <div class="wp-block-column" style="flex-basis:66.66%">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":null,"bottomLeft":null,"bottomRight":null}}}} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/gallery-dark-top.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
                <!-- /wp:image -->
                <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
                <div class="wp-block-columns">
                    <!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"top":"5%","bottom":"5%","left":"5%"}}}} -->
                    <div class="wp-block-column" style="padding-top:5%;padding-bottom:5%;padding-left:5%;flex-basis:66.66%">
                        <!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontSize":"60px"}}} -->
                        <h3 class="wp-block-heading alignwide" style="font-size:60px"><?php echo wp_kses_post(__('<em>Séance</em>, a Full Site Editing Theme', 'seance')); ?></h3>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p><?php echo wp_kses_post(__('Introducing our WordPress FSE theme, <em>Séance</em>, a portal that intertwines the elegance of bygone eras with modern design.<br><br>Crafted with ethereal aesthetics and intuitive functionalities, let your website be the medium that bridges the past with the present, and the seen with the unseen.', 'seance')); ?></p>
                        <!-- /wp:paragraph -->
                        <!-- wp:spacer {"height":"10px"} -->
                        <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->
                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"textColor":"foreground"} -->
                            <div class="wp-block-button">
                                <a class="wp-block-button__link has-foreground-color has-text-color wp-element-button" href="#"><?php echo esc_html_e('Learn More', 'seance'); ?></a>
                            </div>
                            <!-- /wp:button -->
                            <!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_e('About Us', 'seance'); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3em","bottom":"3em"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:3em;padding-bottom:3em">
        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"top":"var:preset|spacing|80"}}}} -->
            <div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--80);flex-basis:33.33%">
                <!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontSize":"60px"}}} -->
                <h3 class="wp-block-heading alignwide" style="font-size:60px"><?php echo wp_kses_post(__('Welcome to<br>the <em>Unknown</em>', 'seance')); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:spacer {"height":"30px"} -->
                <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"verticalAlignment":"bottom","width":"66.66%"} -->
            <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66.66%">
                <!-- wp:image {"className":"size-large"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/about-light-top.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
                <!-- /wp:image -->
                <!-- wp:paragraph -->
                <p><?php echo wp_kses_post(__('We are Margaret, Catherine, and Leah Fox, renowned spiritual mediums from a bygone era, now embracing the digital age. With our unique abilities, we have connected countless souls with the messages of the spirit world.', 'seance')); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:spacer {"height":"10px"} -->
                <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"foreground"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button" href="#"><?php echo esc_html_e('Learn More', 'seance'); ?></a></div>
                    <!-- /wp:button -->
                    <!-- wp:button {"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_e('About Us', 'seance'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(90deg,rgb(15,15,16) 70%,rgba(0,0,0,0) 20%)"},"spacing":{"padding":{"top":"3em","bottom":"3em","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","className":"has-responsive-dark-background","layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group alignfull has-responsive-dark-background has-primary-color has-text-color has-background" style="background:linear-gradient(90deg,rgb(15,15,16) 70%,rgba(0,0,0,0) 20%);margin-top:0px;margin-bottom:0px;padding-top:3em;padding-right:0px;padding-bottom:3em;padding-left:0px">
        <!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0">
            <!-- wp:column {"width":"66.66%"} -->
            <div class="wp-block-column" style="flex-basis:66.66%">
                <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
                <div class="wp-block-columns">
                    <!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"top":"5%","bottom":"5%","left":"0px"}}}} -->
                    <div class="wp-block-column" style="padding-top:5%;padding-bottom:5%;padding-left:0px;flex-basis:66.66%">
                        <!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontSize":"60px"}}} -->
                        <h3 class="wp-block-heading alignwide" style="font-size:60px"><?php echo wp_kses_post(__('Pioneers of Modern <em>Spiritualism</em>', 'seance')); ?></h3>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p><?php echo wp_kses_post(__('In the quaint village of Hydesville, New York, in the late 1840s, we, Margaret, Catherine and Leah Fox, ignited a movement that would reverberate through the annals of history.<br><br>Our mysterious communications with the spirit realm through a series of rappings captured the imagination of a nation, leading to the birth of Modern Spiritualism.', 'seance')); ?></p>
                        <!-- /wp:paragraph -->
                        <!-- wp:spacer {"height":"10px"} -->
                        <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->
                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"backgroundColor":"foreground","className":"is-style-fill"} -->
                            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button" href="#"><?php echo esc_html_e('Learn More', 'seance'); ?></a></div>
                            <!-- /wp:button -->
                            <!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_e('About Us', 'seance'); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"verticalAlignment":"center","width":"33.33%","layout":{"type":"default"}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topRight":null,"bottomLeft":null,"bottomRight":null}}}} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/gallery-dark-left.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(90deg,rgba(0,0,0,0) 75%,rgb(15,15,16) 30%)"},"spacing":{"padding":{"top":"3em","right":"10%","bottom":"3em","left":"0px"},"margin":{"top":"0rem","bottom":"0rem"}}},"className":"has-responsive-light-background","layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group alignfull has-responsive-light-background has-background" style="background:linear-gradient(90deg,rgba(0,0,0,0) 75%,rgb(15,15,16) 30%);margin-top:0rem;margin-bottom:0rem;padding-top:3em;padding-right:10%;padding-bottom:3em;padding-left:0px">
        <!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0">
            <!-- wp:column {"width":"66.66%"} -->
            <div class="wp-block-column" style="flex-basis:66.66%">
                <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
                <div class="wp-block-columns">
                    <!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"left":"0%","top":"5%","bottom":"5%"}}}} -->
                    <div class="wp-block-column" style="padding-top:5%;padding-bottom:5%;padding-left:0%;flex-basis:66.66%">
                        <!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontSize":"60px"}}} -->
                        <h3 class="wp-block-heading alignwide" style="font-size:60px"><?php echo wp_kses_post(__('Pioneers of Modern <em>Spiritualism</em>', 'seance')); ?></h3>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p><?php echo wp_kses_post(__('In the quaint village of Hydesville, New York, in the late 1840s, we, Margaret, Catherine and Leah Fox, ignited a movement that would reverberate through the annals of history.<br><br>Our mysterious communications with the spirit realm through a series of rappings captured the imagination of a nation, leading to the birth of Modern Spiritualism.', 'seance')); ?></p>
                        <!-- /wp:paragraph -->
                        <!-- wp:spacer {"height":"10px"} -->
                        <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->
                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"backgroundColor":"foreground"} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button" href="#"><?php echo esc_html_e('Learn More', 'seance'); ?></a></div>
                            <!-- /wp:button -->
                            <!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_e('About Us', 'seance'); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"verticalAlignment":"center","width":"33.33%","layout":{"type":"default"}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topRight":null,"bottomLeft":null,"bottomRight":null}}}} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/poster-light-left.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(90deg,rgba(0,0,0,0) 30%,rgb(15,15,16) 30%)"},"spacing":{"padding":{"top":"3em","right":"0%","bottom":"3em","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","className":"has-responsive-dark-background","layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group alignfull has-responsive-dark-background has-primary-color has-text-color has-background" style="background:linear-gradient(90deg,rgba(0,0,0,0) 30%,rgb(15,15,16) 30%);margin-top:0px;margin-bottom:0px;padding-top:3em;padding-right:0%;padding-bottom:3em;padding-left:0px">
        <!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0">
            <!-- wp:column {"verticalAlignment":"center","width":"33.33%","layout":{"type":"default"}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topRight":null,"bottomLeft":null,"bottomRight":null}}}} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/gallery-dark-left.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"width":"66.66%"} -->
            <div class="wp-block-column" style="flex-basis:66.66%">
                <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
                <div class="wp-block-columns">
                    <!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"5%","bottom":"5%","left":"0","right":"15%"}}}} -->
                    <div class="wp-block-column" style="padding-top:5%;padding-right:15%;padding-bottom:5%;padding-left:0">
                        <!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontSize":"60px"}}} -->
                        <h3 class="wp-block-heading alignwide" style="font-size:60px"><?php echo wp_kses_post(__('Pioneers of Modern <em>Spiritualism</em>', 'seance')); ?></h3>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p><?php echo wp_kses_post(__('In the quaint village of Hydesville, New York, in the late 1840s, we, Margaret, Catherine and Leah Fox, ignited a movement that would reverberate through the annals of history.<br><br>Our mysterious communications with the spirit realm through a series of rappings captured the imagination of a nation, leading to the birth of Modern Spiritualism.', 'seance')); ?></p>
                        <!-- /wp:paragraph -->
                        <!-- wp:spacer {"height":"10px"} -->
                        <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->
                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"textColor":"foreground"} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-text-color wp-element-button" href="#"><?php echo esc_html_e('Learn More', 'seance'); ?></a></div>
                            <!-- /wp:button -->
                            <!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_e('About Us', 'seance'); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column {"style":{"spacing":{"padding":{"top":"8rem","right":"0rem","bottom":"8rem","left":"0rem"}}}} -->
            <div class="wp-block-column" style="padding-top:8rem;padding-right:0rem;padding-bottom:8rem;padding-left:0rem">
                <!-- wp:image {"sizeSlug":"large"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/poster-light-left.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
                <!-- /wp:image -->
                <!-- wp:spacer {"height":"30px"} -->
                <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:heading {"fontSize":"x-large"} -->
                <h2 class="wp-block-heading has-x-large-font-size" id="spiritual-summit"><?php echo esc_html_e('Spiritual Summit', 'seance'); ?></h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph -->
                <p><?php echo wp_kses_post(__('March 31, 1848 @ 7:00PM<br>Hydesville Memorial Park<br>1510 Hydesville Road, Newark<br>NY 14513', 'seance')); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:spacer {"height":"8px"} -->
                <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:spacer {"height":"10px"} -->
                <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button"><?php echo esc_html_e('Buy Tickets', 'seance'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"style":{"spacing":{"padding":{"top":"8rem","right":"0rem","bottom":"8rem","left":"0rem"}}}} -->
            <div class="wp-block-column" style="padding-top:8rem;padding-right:0rem;padding-bottom:8rem;padding-left:0rem">
                <!-- wp:image {"sizeSlug":"large"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/poster-light-right.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
                <!-- /wp:image -->
                <!-- wp:spacer {"height":"30px"} -->
                <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:heading {"fontSize":"x-large"} -->
                <h2 class="wp-block-heading has-x-large-font-size" id="ethereal-echoes"><?php echo esc_html_e('Ethereal Echoes', 'seance'); ?></h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph -->
                <p><?php echo wp_kses_post(__('November 14, 1888 @ 7:00PM<br>Cypress Hills Cemetery<br>833 Jamaica Avenue<br>Brooklyn, NY 11208', 'seance')); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:spacer {"height":"8px"} -->
                <div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:spacer {"height":"10px"} -->
                <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"foreground"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button"><?php echo esc_html_e('Buy Tickets', 'seance'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"align":"full","style":{"color":{"gradient":"linear-gradient(90deg,rgb(15,15,16) 30%,rgba(0,0,0,0) 20%)"},"spacing":{"padding":{"top":"3em","right":"10%","bottom":"3em","left":"15%"},"margin":{"top":"0px","bottom":"0px"}}},"className":"has-responsive-light-background","layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group alignfull has-responsive-light-background has-background" style="background:linear-gradient(90deg,rgb(15,15,16) 30%,rgba(0,0,0,0) 20%);margin-top:0px;margin-bottom:0px;padding-top:3em;padding-right:10%;padding-bottom:3em;padding-left:15%">
        <!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0">
            <!-- wp:column {"verticalAlignment":"center","width":"33.33%","layout":{"type":"default"}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
                <!-- wp:image {"className":"size-large"} -->
                <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/poster-light-left.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"width":"66.66%"} -->
            <div class="wp-block-column" style="flex-basis:66.66%">
                <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
                <div class="wp-block-columns">
                    <!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"5%","bottom":"5%","left":"5%"}}}} -->
                    <div class="wp-block-column" style="padding-top:5%;padding-bottom:5%;padding-left:5%">
                        <!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontSize":"60px"}}} -->
                        <h3 class="wp-block-heading alignwide" style="font-size:60px"><?php echo wp_kses_post(__('Pioneers of Modern <em>Spiritualism</em>', 'seance')); ?></h3>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p><?php echo wp_kses_post(__('In the quaint village of Hydesville, New York, in the late 1840s, we, Margaret, Catherine and Leah Fox, ignited a movement that would reverberate through the annals of history.<br><br>Our mysterious communications with the spirit realm through a series of rappings captured the imagination of a nation, leading to the birth of Modern Spiritualism.', 'seance')); ?></p>
                        <!-- /wp:paragraph -->
                        <!-- wp:spacer {"height":"10px"} -->
                        <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->
                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"backgroundColor":"foreground"} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button" href="#"><?php echo esc_html_e('Learn More', 'seance'); ?></a></div>
                            <!-- /wp:button -->
                            <!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_e('About Us', 'seance'); ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
        <!-- wp:media-text {"align":"full","mediaLink":"<?php echo esc_url(get_theme_file_uri("/assets/images/about-dark-left.jpg")); ?>","mediaType":"image","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","className":"has-media-on-the-left"} -->
        <div class="wp-block-media-text alignfull is-stacked-on-mobile has-media-on-the-left has-background-color has-foreground-background-color has-text-color has-background has-link-color">
            <figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_theme_file_uri("/assets/images/about-dark-left.jpg")); ?>" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" /></figure>
            <div class="wp-block-media-text__content">
                <!-- wp:spacer {"height":"32px"} -->
                <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:group {"style":{"spacing":{"padding":{"right":"min(8rem, 5vw)","top":"min(20rem, 20vw)"}}}} -->
                <div class="wp-block-group" style="padding-top:min(20rem, 20vw);padding-right:min(8rem, 5vw)">
                    <!-- wp:heading {"style":{"typography":{"fontWeight":"300","lineHeight":"1.115","fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
                    <h2 class="wp-block-heading" style="font-size:clamp(3rem, 6vw, 4.5rem);font-weight:300;line-height:1.115"><em><?php echo wp_kses_post(__('The Fox<br>Sisters', 'seance')); ?></em></h2>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}}} -->
                    <p style="line-height:1.6"><?php echo wp_kses_post(__('We are Margaret, Catherine, and Leah Fox, renowned spiritual mediums from a bygone era, now embracing the digital age. With our unique abilities, we have connected countless souls with the messages of the spirit world.', 'seance')); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:spacer {"height":"40px"} -->
                    <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->
                </div>
                <!-- /wp:group -->
                <!-- wp:spacer {"height":"32px"} -->
                <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
            </div>
        </div>
        <!-- /wp:media-text -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->