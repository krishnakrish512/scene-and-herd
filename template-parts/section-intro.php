<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>

<div class="site-section intro-section light-bg" id="intro-section">
    <div class="site-wrapper">
        <div class="site-image wow" data-wow-offset="0" data-wow-delay="0.3s">
            <?php echo wp_get_attachment_image($content['image'],'full'); ?> </div>
        <div class="section-content">
            <div class="section-heading  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                <h2 class="section-title "><?php echo wp_kses_post($content['heading']); ?>
                </h2>
            </div>
            <div class="entry-content wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <?php echo preg_replace('/<\/?p>/','', $content['paragraph']); ?>

            </div>
        </div>
    </div>
</div>
<?php endif;