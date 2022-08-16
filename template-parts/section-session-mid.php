<!-- session mid section starts here -->
<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<section class="site-section session-mid ">
    <div class="site-wrapper sm-wrapper">
        <div class="section-heading">
            <h2><?php echo wp_kses_post($content['title']); ?></h2>
        </div>
        <?php echo preg_replace('/<\/?p>/','', $content['description']); ?>

        <?php echo wp_get_attachment_image($content['image'],'full'); ?>

        <?php echo preg_replace('/<\/?p>/','', $content['description1']); ?>
    </div>
</section>
<?php endif?>
<!-- session mid ends here -->