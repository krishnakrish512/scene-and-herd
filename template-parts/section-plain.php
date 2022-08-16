<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<div class="hero-section inner-hero">
    <div class="hero-img"> <img src="<?php echo wp_get_attachment_image($content['plain_banner'],'full'); ?>"
            width="2000" height="800" alt="">
        <div class="hero-content-wrapper">
            <div class="hero-content">
                <h1 class=" wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                    <?php echo wp_kses_post($content['title']); ?></h1>
            </div>
        </div>
    </div>
</div>
<section class="site-section session-mid ">
    <div class="site-wrapper sm-wrapper">
        <div class="section-heading">
            <h2><?php echo wp_kses_post($content['heading']); ?></h2>
        </div>
        <div class="entry-content">
            <?php echo preg_replace('/<\/?p>/','', $content['description']); ?>
        </div>
    </div>
</section>
<?php endif;