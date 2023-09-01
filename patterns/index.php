<?php
/**
 * Title: index
 * Slug: ramen/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"nav"} /--></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/art-01.jpg","hasParallax":true,"dimRatio":40,"customOverlayColor":"#000000","minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull has-parallax" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#000000"></span><div role="img" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/art-01.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:heading {"style":{"typography":{"fontSize":"48px","lineHeight":"1.2"}},"className":"alignwide has-white-color has-text-color"} -->
<h2 class="wp-block-heading alignwide has-white-color has-text-color" style="font-size:48px;line-height:1.2"><strong><em>Overseas:</em></strong><br><strong><em>1500 — 1960</em></strong></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"style":{"color":{"text":"#ffffff"}}} -->
<p class="has-text-color" style="color:#ffffff">An exhibition about the different representations of the ocean throughout time, between the sixteenth and the twentieth century. Taking place in our Open Room in <em>Floor 2</em>.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"text":"#ffffff","background":"#000000"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="color:#ffffff;background-color:#000000">Visit</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"contentSize":null,"type":"constrained"}} -->
<main class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:post-content /-->

<!-- wp:group {"style":{"typography":{"fontSize":"14px"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="font-size:14px"><!-- wp:post-author {"showAvatar":false,"showBio":false} /-->

<!-- wp:post-date {"isLink":true} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query -->

<!-- wp:gallery {"columns":2,"linkTo":"none","align":"wide"} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-2 is-cropped"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"width":"0px","style":"none"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/nature-above-01.jpg" alt="<?php echo esc_attr_e( 'An aerial view of waves crashing against a shore.', 'Ramen' ); ?>" style="border-style:none;border-width:0px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/nature-above-02.jpg" alt="<?php echo esc_attr_e( 'An aerial view of a field. A road runs through the upper right corner.', 'Ramen' ); ?>"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->