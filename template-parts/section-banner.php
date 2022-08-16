<?php
$content = get_sub_field('banner_settings');
if($content['enable_disable']):
    ?>
<div class="hero-section">
    <div class="hero-img"> <?php echo wp_get_attachment_image($content['images'],'full'); ?>
        <div class="hero-content-wrapper">
            <div class="hero-content  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                <h3 class=" wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                    <?php echo preg_replace('/<\/?p>/','', $content['headings']); ?>

            </div>
        </div>
    </div>
    <div class="scroll-down" id="scroll-arrow">
        <a href="#intro-section">Scroll</a>
    </div>
</div>
<?php endif;
	