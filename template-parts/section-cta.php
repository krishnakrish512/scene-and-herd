<!-- cta-section starts here -->
<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<section class="site-section cta-section "
    style="background-image: url('<?php echo wp_get_attachment_url($content['image']); ?>')">
    <div class="site-wrapper  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
        <div class="site-content">
            <h3> <?php echo wp_kses_post($content['title']); ?> </h3> <a class="site-btn border-btn"
                href="<?php echo esc_url($content['link']['url']); ?>">Book
                Now</a>
        </div>
    </div>
</section>
<?php endif;?>
<!-- cta-section ends here -->