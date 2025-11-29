<?php
/**
 * Title: Portfolio
 * Slug: 3aai-theme/portfolio
 * Categories: featured, 3aai-patterns
 */

$cookit_app_img = get_template_directory_uri() . '/assets/images/cookit-app.svg';
$news_img = get_template_directory_uri() . '/assets/images/3aai-news.svg';
$prompt_img = get_template_directory_uri() . '/assets/images/prompt-engineer.svg';
$cookit_web_img = get_template_directory_uri() . '/assets/images/cookit-web.svg';
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--3xl);padding-bottom:var(--wp--preset--spacing--3xl)">

    <!-- wp:heading {"textAlign":"center","level":2,"textColor":"primary","textTransform":"uppercase"} -->
    <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="text-transform:uppercase"><?php echo esc_html__('المشاريع السابقة', '3aai-theme'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|2xl"}}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--xs);margin-bottom:var(--wp--preset--spacing--2xl)"><?php echo esc_html__('أبرز أعمالنا', '3aai-theme'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}}} -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"border":{"radius":"12px"}},"backgroundColor":"surface","layout":{"type":"default","orientation":"vertical"}} -->
            <div class="wp-block-group has-surface-background-color has-background" style="border-radius:12px">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px"}}}} -->
                <figure class="wp-block-image size-large" style="border-top-left-radius:12px;border-top-right-radius:12px"><img src="<?php echo esc_url($cookit_app_img); ?>" alt="CookIt App"/></figure>
                <!-- /wp:image -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">منصة CookIt – الذكاء الاصطناعي في خدمة الطهي</h5>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"textColor":"muted"} -->
                    <p class="has-muted-color has-text-color">تطبيق يدعم الذكاء الاصطناعي، مصمم لمساعدة المستخدم في اكتشاف وصفات جديدة استنادًا إلى المكوّنات المتوفرة لديه.</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"primary"} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background" href="http://cookit.3aai.in/" target="_blank" rel="noopener">زيارة المشروع</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"border":{"radius":"12px"}},"backgroundColor":"surface","layout":{"type":"default","orientation":"vertical"}} -->
            <div class="wp-block-group has-surface-background-color has-background" style="border-radius:12px">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px"}}}} -->
                <figure class="wp-block-image size-large" style="border-top-left-radius:12px;border-top-right-radius:12px"><img src="<?php echo esc_url($news_img); ?>" alt="3A-AI News"/></figure>
                <!-- /wp:image -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">المدونة التقنية – 3A-AI News</h5>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"textColor":"muted"} -->
                    <p class="has-muted-color has-text-color">مدونة تقنية مبنية لخدمة المطورين ومحبي الذكاء الاصطناعي. تقدم محتوى متجدد حول التكنولوجيا الحديثة.</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"primary"} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background" href="https://news.3aai.in/" target="_blank" rel="noopener">زيارة المشروع</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}}} -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"border":{"radius":"12px"}},"backgroundColor":"surface","layout":{"type":"default","orientation":"vertical"}} -->
            <div class="wp-block-group has-surface-background-color has-background" style="border-radius:12px">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px"}}}} -->
                <figure class="wp-block-image size-large" style="border-top-left-radius:12px;border-top-right-radius:12px"><img src="<?php echo esc_url($prompt_img); ?>" alt="Prompt Engineer"/></figure>
                <!-- /wp:image -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">منصة مهندس الأوامر – Prompt Engineer</h5>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"textColor":"muted"} -->
                    <p class="has-muted-color has-text-color">منصة لتقديم أدوات ذكاء اصطناعي جاهزة تساعد المستخدم في الحصول على أفضل النتائج من النماذج التوليدية.</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"secondary","className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-background-color has-background">قريباً</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"border":{"radius":"12px"}},"backgroundColor":"surface","layout":{"type":"default","orientation":"vertical"}} -->
            <div class="wp-block-group has-surface-background-color has-background" style="border-radius:12px">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px"}}}} -->
                <figure class="wp-block-image size-large" style="border-top-left-radius:12px;border-top-right-radius:12px"><img src="<?php echo esc_url($cookit_web_img); ?>" alt="CookIt Web"/></figure>
                <!-- /wp:image -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","right":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Cook It Web – واجهة ويب خفيفة وسريعة</h5>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"textColor":"muted"} -->
                    <p class="has-muted-color has-text-color">امتداد لتطبيق CookIt الأساسي، يقدم تجربة محسّنة للمستخدمين على الشاشات الكبيرة.</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"primary"} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background" href="https://cookit.3aai.in/" target="_blank" rel="noopener">زيارة المشروع</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
