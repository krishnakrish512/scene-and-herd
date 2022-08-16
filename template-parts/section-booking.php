<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<div class="hero-section inner-hero">
    <div class="hero-img"> <img src="<?php echo wp_get_attachment_image($content['booking_banner'],'full'); ?>"
            width="2000" height="800" alt="">
        <div class="hero-content-wrapper">
            <div class="hero-content">
                <h1 class=" wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                    <?php echo wp_kses_post($content['title']); ?></h1>
            </div>
        </div>
    </div>
</div>
<section class="site-section booking-section ">
    <div class="container">
        <div class="site-wrapper">
            <div class="site-row">
                <div class="site-col col-md-6">
                    <div class="site-content">
                        <h2> <?php echo wp_kses_post($content['heading']); ?></h2>
                        <p> <?php echo wp_kses_post($content['sub_heading']); ?></p>
                        <ul>
                            <?php echo preg_replace('/<\/?p>/','', $content['list']); ?>
                        </ul>
                    </div>
                </div>
                <div class="site-col col-md-6 booking-form  wow fadeInUp">
                    <h2>Book Now</h2>
                    <?php 
                if(!empty($content['booking_form'])):
                    echo do_shortcode('[gravityform id="'.$content['booking_form'].'" title="false" description="false" ajax="true"]');
                endif;
                ?>


                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;
