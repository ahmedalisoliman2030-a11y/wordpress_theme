<?php
/**
 * Title: Hero Tech Section
 * Slug: 3aai-theme/hero-tech
 * Categories: 3aai-patterns, featured
 * Description: A modern hero section with gradient background, heading, description, and call-to-action buttons
 */
?>

<!-- wp:cover {"url":"","dimRatio":0,"overlayColor":"base","minHeight":600,"gradient":"dark-gradient","contentPosition":"center center","isDark":true,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl"}}}} -->
<div class="wp-block-cover alignfull is-dark"
    style="padding-top:var(--wp--preset--spacing--3-xl);padding-bottom:var(--wp--preset--spacing--3-xl);min-height:600px">
    <span aria-hidden="true"
        class="wp-block-cover__background has-base-background-color has-background-dim-0 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|2xl","left":"var:preset|spacing|2xl"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center">
                <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
                    <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3.5rem","lineHeight":"1.1"}},"textColor":"contrast"} -->
                    <h1 class="wp-block-heading has-contrast-color has-text-color"
                        style="font-size:3.5rem;line-height:1.1">
                        <?php echo esc_html__('نبني المستقبل بالذكاء الاصطناعي', '3aai-theme'); ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|xl"}},"typography":{"fontSize":"1.125rem"}},"textColor":"muted"} -->
                    <p class="has-muted-color has-text-color"
                        style="margin-top:var(--wp--preset--spacing--lg);margin-bottom:var(--wp--preset--spacing--xl);font-size:1.125rem">
                        <?php echo esc_html__('حلول تقنية متكاملة تجمع بين الذكاء الاصطناعي، تطوير البرمجيات، وتجارب المستخدم الحديثة. نساعدك على تحويل أفكارك إلى منتجات رقمية عالية الجودة.', '3aai-theme'); ?>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|md"}}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"8px"}}} -->
                        <div class="wp-block-button"><a
                                class="wp-block-button__link has-primary-background-color has-background wp-element-button"
                                style="border-radius:8px"><?php echo esc_html__('ابدأ الآن', '3aai-theme'); ?></a>
                        </div>
                        <!-- /wp:button -->

                        <!-- wp:button {"backgroundColor":"surface","textColor":"contrast","className":"is-style-outline","style":{"border":{"radius":"8px","width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
                        <div class="wp-block-button is-style-outline"><a
                                class="wp-block-button__link has-contrast-color has-surface-background-color has-text-color has-background has-link-color wp-element-button"
                                style="border-width:2px;border-radius:8px"><?php echo esc_html__('اعرف المزيد', '3aai-theme'); ?></a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
                    <!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
                    <figure class="wp-block-image size-large has-custom-border"><img src=""
                            alt="<?php echo esc_attr__('Dashboard Preview', '3aai-theme'); ?>"
                            style="border-radius:16px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->