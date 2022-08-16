<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<div class="hero-section inner-hero">
    <div class="hero-img"> <img src="<?php echo wp_get_attachment_image($content['contact_banner'],'full'); ?>"
            width="2000" height="800" alt="">
        <div class="hero-content-wrapper">
            <div class="hero-content">
                <h1 class=" wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                    <?php echo wp_kses_post($content['title']); ?></h1>
            </div>
        </div>
    </div>
</div>
<section class="site-section contact-section ">
    <div class="container">
        <div class="site-wrapper">
            <div class="site-row">
                <div class="site-col col-md-6">
                    <div class="contact-blocks">
                        <div class="mt-contacts top-contacts">
                            <?php foreach($content['contacts'] as $item): ?>
                            <p><span
                                    class="icon"><?php echo wp_get_attachment_image($item['icon_image']); ?></span><span
                                    class="mt-info"><a href="<?php echo wp_kses_post($item['link_url']); ?>">
                                        <?php echo wp_kses_post($item['title']); ?></a></span></p>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
                <div class="site-col col-md-6 contact-form row  wow fadeInUp animated" data-wow-offset="0"
                    data-wow-delay="0.3s"
                    style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                    <h2 style="color:#e0a352">Send Us a Message</h2>
                    <?php 
                if(!empty($content['form'])):
                    echo do_shortcode('[gravityform id="'.$content['form'].'" title="false" description="false" ajax="true"]');
                endif;
                ?>


                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;