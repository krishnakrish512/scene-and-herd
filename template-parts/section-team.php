<!-- team section starts here -->
<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<section class="site-section team-section pt-0 pb-0" id="team-section">
    <div class="site-wrapper">
        <div class="site-row">
            <div class="site-col col-6 col-md-6">
                <div class="site-image  wow fadeIn" data-wow-offset="0" data-wow-delay="0.3s">
                    <figure> <img src="<?php echo wp_get_attachment_image($content['image'],'full'); ?>" width="625"
                            height="417" alt=""> </figure>
                </div>
            </div>
            <div class="site-col col-6 col-md-6">
                <div class="site-content">
                    <div class="section-heading   wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                        <h2><?php echo wp_kses_post($content['title']); ?></h2>
                    </div>
                    <div class="entry-content  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                        <?php echo preg_replace('/<\/?p>/','', $content['description']); ?>
                        <br>

                        <a class="border-btn" href="<?php echo esc_url($content['link']['url']); ?>">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<!-- team-section ends here -->