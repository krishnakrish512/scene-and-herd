<div class="hero-section inner-hero">
    <div class="hero-img"> <img src="<?php echo wp_get_attachment_image($content['404_banner'],'full'); ?>"
            width="2000" height="800" alt="">
        <div class="hero-content-wrapper">
            <div class="hero-content">
                <h1 class=" wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                    <?php echo wp_kses_post($content['title']); ?></h1>
            </div>
        </div>
    </div>
</div>