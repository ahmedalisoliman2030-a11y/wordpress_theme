<?php
/**
 * Title: Pricing Table
 * Slug: 3aai-theme/pricing
 * Categories: 3aai-patterns
 * Description: A 3-column pricing table with featured middle card
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--3-xl);padding-bottom:var(--wp--preset--spacing--3-xl)">
    <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--sm)">
        <?php echo esc_html__('خطط الأسعار', '3aai-theme'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|2xl"}}},"textColor":"muted"} -->
    <p class="has-text-align-center has-muted-color has-text-color"
        style="margin-bottom:var(--wp--preset--spacing--2-xl)">
        <?php echo esc_html__('اختر الخطة المناسبة لاحتياجاتك', '3aai-theme'); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}}} -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|lg"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"muted","backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-muted-border-color has-base-background-color has-background"
                style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--lg)">
                <!-- wp:heading {"textAlign":"center","level":3} -->
                <h3 class="wp-block-heading has-text-align-center"><?php echo esc_html__('البداية', '3aai-theme'); ?>
                </h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|lg"}},"typography":{"fontSize":"2.5rem","fontWeight":"700"}}} -->
                <p class="has-text-align-center"
                    style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--lg);font-size:2.5rem;font-weight:700">
                    $99</p>
                <!-- /wp:paragraph -->

                <!-- wp:list {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}},"textColor":"muted"} -->
                <ul class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xl)">
                    <li><?php echo esc_html__('استشارة مجانية', '3aai-theme'); ?></li>
                    <li><?php echo esc_html__('تطوير أساسي', '3aai-theme'); ?></li>
                    <li><?php echo esc_html__('دعم فني', '3aai-theme'); ?></li>
                </ul>
                <!-- /wp:list -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"width":100,"className":"is-style-outline"} -->
                    <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a
                            class="wp-block-button__link wp-element-button"><?php echo esc_html__('اختر الخطة', '3aai-theme'); ?></a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|lg"}},"border":{"radius":"12px","width":"2px"}},"borderColor":"primary","backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-primary-border-color has-base-background-color has-background"
                style="border-width:2px;border-radius:12px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--lg)">
                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}},"backgroundColor":"primary","textColor":"contrast","fontSize":"xs"} -->
                <p class="has-text-align-center has-contrast-color has-primary-background-color has-text-color has-background has-xs-font-size"
                    style="margin-bottom:var(--wp--preset--spacing--sm)">⭐
                    <?php echo esc_html__('الأكثر شعبية', '3aai-theme'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"textAlign":"center","level":3} -->
                <h3 class="wp-block-heading has-text-align-center">
                    <?php echo esc_html__('الاحترافية', '3aai-theme'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|lg"}},"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"primary"} -->
                <p class="has-text-align-center has-primary-color has-text-color"
                    style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--lg);font-size:2.5rem;font-weight:700">
                    $299</p>
                <!-- /wp:paragraph -->

                <!-- wp:list {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}},"textColor":"muted"} -->
                <ul class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xl)">
                    <li><?php echo esc_html__('كل مزايا البداية', '3aai-theme'); ?></li>
                    <li><?php echo esc_html__('تطوير متقدم', '3aai-theme'); ?></li>
                    <li><?php echo esc_html__('دعم أولوية', '3aai-theme'); ?></li>
                    <li><?php echo esc_html__('تدريب مجاني', '3aai-theme'); ?></li>
                </ul>
                <!-- /wp:list -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"primary","width":100} -->
                    <div class="wp-block-button has-custom-width wp-block-button__width-100"><a
                            class="wp-block-button__link has-primary-background-color has-background wp-element-button"><?php echo esc_html__('اختر الخطة', '3aai-theme'); ?></a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|lg"}},"border":{"radius":"12px","width":"1px"}},"borderColor":"muted","backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-muted-border-color has-base-background-color has-background"
                style="border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--lg)">
                <!-- wp:heading {"textAlign":"center","level":3} -->
                <h3 class="wp-block-heading has-text-align-center"><?php echo esc_html__('المؤسسات', '3aai-theme'); ?>
                </h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|lg"}},"typography":{"fontSize":"2.5rem","fontWeight":"700"}}} -->
                <p class="has-text-align-center"
                    style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--lg);font-size:2.5rem;font-weight:700">
                    <?php echo esc_html__('مخصص', '3aai-theme'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:list {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}},"textColor":"muted"} -->
                <ul class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xl)">
                    <li><?php echo esc_html__('كل المزايا', '3aai-theme'); ?></li>
                    <li><?php echo esc_html__('حلول مخصصة', '3aai-theme'); ?></li>
                    <li><?php echo esc_html__('دعم 24/7', '3aai-theme'); ?></li>
                    <li><?php echo esc_html__('استشارات مستمرة', '3aai-theme'); ?></li>
                </ul>
                <!-- /wp:list -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"width":100,"className":"is-style-outline"} -->
                    <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a
                            class="wp-block-button__link wp-element-button"><?php echo esc_html__('تواصل معنا', '3aai-theme'); ?></a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->