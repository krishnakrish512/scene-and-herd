<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<div class="hero-section inner-hero">
    <div class="hero-img"> <img src="<?php echo wp_get_attachment_image($content['banner_image'],'full'); ?>"
            width="2000" height="800" alt="">
        <div class="hero-content-wrapper">
            <div class="hero-content">
                <h1 class=" wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                    <?php echo wp_kses_post($content['title']); ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="site-section intro-section team-intro inner-intro">
    <div class="site-wrapper">
        <div class="site-image  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
            <?php echo wp_get_attachment_image($content['team_image1'],'full'); ?>
            <div class="sec-image"><?php echo wp_get_attachment_image($content['team_image2'],'full'); ?> </div>
        </div>
        <div class="section-content  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
            <?php echo preg_replace('/<\/?p>/','', $content['description']); ?>
        </div>
    </div>
</div>
<?php endif;