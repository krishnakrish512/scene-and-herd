<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<div class="hero-section inner-hero">
    <div class="hero-img"> <img src="<?php echo wp_get_attachment_image($content['session_banner'],'full'); ?>"
            width="2000" height="800" alt="">
        <div class="hero-content-wrapper">
            <div class="hero-content">
                <h1 class=" wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                    <?php echo wp_kses_post($content['title']); ?> </h1>
            </div>
        </div>
    </div>
</div>
<div class="site-section intro-section session-intro has-checklists lightbrown-bg">
    <div class="site-wrapper">
        <div class="section-content">
            <?php echo preg_replace('/<\/?p>/','', $content['description']); ?>
            <div class="intro-sub">
                <div class="intro-sub-content">
                    <p><?php echo wp_kses_post($content['list_title']); ?> </h1>:</p>
                    <ul>
                        <?php echo preg_replace('/<\/?p>/','', $content['list']); ?>
                    </ul>
                </div>
                <div class="site-image  wow" data-wow-offset="0" data-wow-delay="0.3s">
                    <?php echo wp_get_attachment_image($content['image'],'full'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;