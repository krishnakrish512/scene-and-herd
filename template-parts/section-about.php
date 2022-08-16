<!-- about section starts here -->
<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<div class="site-section intro-section about-section has-checklists light-bg">
    <div class="site-wrapper">
        <div class="site-image wow " data-wow-offset="0" data-wow-delay="0.3s"> <img
                src="<?php echo wp_get_attachment_image($content['image'],'full'); ?>" alt="">
        </div>
        <div class="section-content">
            <div class="section-heading">
                <h2 class="section-title  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                    <?php echo wp_kses_post($content['title']); ?>
            </div>
            <div class="entry-content wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <?php echo preg_replace('/<\/?p>/','', $content['description']); ?>
                <ul>
                    <?php echo preg_replace('/<\/?p>/','', $content['list']); ?>
                </ul> <a class="border-btn" href="<?php echo esc_url($content['link']['url']); ?>">Explore More</a>
            </div>
        </div>
    </div>
</div>
<?php endif;