<?php
/**
 * Title: Services Grid
 * Slug: 3aai-theme/services
 * Categories: 3aai-patterns
 * Description: A 3-column grid showcasing services or features with icons, headings, and descriptions
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--3-xl);padding-bottom:var(--wp--preset--spacing--3-xl)">
    <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--sm)">
        <?php echo esc_html__('خبراتنا التقنية', '3aai-theme'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|2xl"}}},"textColor":"muted"} -->
    <p class="has-text-align-center has-muted-color has-text-color"
        style="margin-bottom:var(--wp--preset--spacing--2-xl)">
        <?php echo esc_html__('نقدم حلولاً تقنية متكاملة تساعدك على النجاح', '3aai-theme'); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}}} -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|lg"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-base-background-color has-background"
                style="border-radius:12px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--lg)">
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"3rem"}},"textColor":"primary"} -->
                <p class="has-text-align-center has-primary-color has-text-color" style="font-size:3rem">🤖</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|sm"}}}} -->
                <h3 class="wp-block-heading has-text-align-center"
                    style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--sm)">
                    <?php echo esc_html__('حلول الذكاء الاصطناعي', '3aai-theme'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","textColor":"muted"} -->
                <p class="has-text-align-center has-muted-color has-text-color">
                    <?php echo esc_html__('دمج نماذج الذكاء الاصطناعي في منتجاتك مع هندسة أوامر احترافية', '3aai-theme'); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|lg"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-base-background-color has-background"
                style="border-radius:12px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--lg)">
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"3rem"}},"textColor":"secondary"} -->
                <p class="has-text-align-center has-secondary-color has-text-color" style="font-size:3rem">📱</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|sm"}}}} -->
                <h3 class="wp-block-heading has-text-align-center"
                    style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--sm)">
                    <?php echo esc_html__('تطوير التطبيقات', '3aai-theme'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","textColor":"muted"} -->
                <p class="has-text-align-center has-muted-color has-text-color">
                    <?php echo esc_html__('تطبيقات متعددة المنصات بأداء عالي وواجهات مستخدم حديثة', '3aai-theme'); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|lg"}},"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-base-background-color has-background"
                style="border-radius:12px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--lg)">
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"3rem"}},"textColor":"accent"} -->
                <p class="has-text-align-center has-accent-color has-text-color" style="font-size:3rem">⚡</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|sm"}}}} -->
                <h3 class="wp-block-heading has-text-align-center"
                    style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--sm)">
                    <?php echo esc_html__('Backend as a Service', '3aai-theme'); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","textColor":"muted"} -->
                <p class="has-text-align-center has-muted-color has-text-color">
                    <?php echo esc_html__('بنية خلفية سريعة وآمنة مع Firebase وSupabase وAppwrite', '3aai-theme'); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->