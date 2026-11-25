
<?php
/**
 * Title: Embark Hero Section
 * Slug: embark-theme/hero-section
 * Categories: embark-sections
 * Description: A centered hero section with a heading, description, and button.
 */
?>

<!-- wp:group {"backgroundColor":"foreground","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--lg)">

    <!-- wp:heading {"textAlign":"center","level":1,"textColor":"background"} -->
    <h1 class="wp-block-heading has-text-align-center has-background-color has-text-color">Welcome to Embark</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Modern websites built with flexibility and purpose.</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">

        <!-- wp:button {"backgroundColor":"primary","textColor":"background"} -->
        <div class="wp-block-button">
            <a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background wp-element-button">Learn More</a>
        </div>
        <!-- /wp:button -->

    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
