<!-- service-section starts here -->
<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<section class="site-section service-section" id="service-section">
    <div class="site-wrapper">
        <div class="section-heading text-center  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
            <h6 class="section-tagline"><?php echo wp_kses_post($content['title_1']); ?></h6>
            <h2 class="section-title"><?php echo wp_kses_post($content['title_1']); ?></h2>
        </div>
        <div class="site-row">
            <div class="site-col col-6">
                <div class="site-content  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                    <?php echo preg_replace('/<\/?p>/','', $content['service_1']); ?>
                </div>
            </div>
            <div class="site-col col-6  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <div class="site-content">
                    <?php echo preg_replace('/<\/?p>/','', $content['service_2']); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<!-- services-section ends here -->